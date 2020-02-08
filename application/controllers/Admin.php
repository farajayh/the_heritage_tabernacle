<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Admin extends CI_Controller
    {
        public function index()
        {
            if ($this->session->userdata('logged_in') == true) {
                $data['title'] = 'Admin';
                $this->load->view('templates/admin_header', $data);
                $this->load->view('admin/index');
                $this->load->view('templates/footer', $data);
            } else {
                redirect(base_url().'login');
            }
        }

        public function login()
        {   
           
            $password = $this->input->post('password', TRUE);
            $query_result = $this->Login_model->login($password);
            if ($query_result != false) {
                $user_session=array();
                foreach ($query_result as $value) {
                    $user_session = array(
                        'logged_in' => true
                    );
                }
                $this->session->set_userdata($user_session);
                redirect(base_url().'admin');
            }
            else{
                $data['info'] = 'Incorrect Login Details';
            } 
                $data['title'] = 'Log In';
                $this->load->view('templates/login_header', $data);
                $this->load->view('admin/login',$data);
                $this->load->view('templates/footer', $data);
            }

            public function load_login()
            {
                $data['title'] = 'Log In';
                $data['info'] = '';
                $this->load->view('templates/login_header', $data);
                $this->load->view('admin/login',$data);
                $this->load->view('templates/footer', $data);
            }

            public function logout(){
                $this->session->unset_userdata('logged_in');
                $this->session->sess_destroy();
                redirect(base_url().'login');
            }

            public function slides()
            {
                if ($this->session->userdata('logged_in') == true) {
                $data['title'] = 'Slides';
                $data['result'] = $this->slide_model->get_slides();
                $this->load->view('templates/admin_header');
                $this->load->view('admin/slides',$data);
                $this->load->view('templates/footer');
                } else {
                redirect(base_url().'login');
                }

            }
            
            public function books()
            {
                if ($this->session->userdata('logged_in') == true) {
                $data['title'] = 'Books';
                $data['row'] = $this->book_model->get_cat();
                $cat = $this->book_model->get_cat();
                $this->load->view('templates/admin_header', $data);
                $this->load->view('admin/books',$data);
                $this->load->view('templates/footer', $data);
                } else {
                redirect(base_url().'login');
                }
            }           

            public function upload_books()
            {
                $config['upload_path'] = './books/';
                $config['allowed_types']  = 'gif|jpg|png|jpeg|jpe';
                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('book_image'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        //print_r($error);
                        redirect(base_url().'book');
                }
                else
                {
                        $book_title = $this->input->post('title');
                        $category = $this->input->post('category');
                        $category = strtoupper($category);
                        $details = $this->input->post('details');
                        $data = array('upload_data' => $this->upload->data());
                        $image_name = $data['upload_data']['file_name'];
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = 'books/'.$image_name;
                        $config['maintain_ratio'] = TRUE;
                        $config['width']         = 231;
                        $config['height']       = 231;
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
                        $book_data = array('book_title' => $book_title,
                                           'book_image' => $image_name,
                                           'category' => $category,
                                           'details' => $details
                                        );
                        if ($this->book_model->add_book($book_data)){
                            redirect(base_url().'book');
                        }
                }
            }

            public function change_password()
            {
                if ($this->session->userdata('logged_in') == true) {
                $data['title'] = 'Change Password';
                $this->load->view('templates/admin_header', $data);
                $this->load->view('admin/change_password',$data);
                $this->load->view('templates/footer', $data);
                } else {
                redirect(base_url().'login');
                }
            }
            public function upload_slides()
            {
                $config['upload_path'] = './slides/';
                $config['allowed_types']  = 'gif|jpg|png|jpeg|jpe';
                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('slide'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        //print_r($error);
                        redirect(base_url().'images');
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $image_name = $data['upload_data']['file_name'];
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = 'slides/'.$image_name;
                        $config['maintain_ratio'] = FALSE;
                        $config['width']         = 1920;
                        $config['height']       = 1080;
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
                        $image = array('image_name' => $image_name);
                        if ($this->slide_model->add_slides($image)) {  
                            redirect(base_url().'images');

                        }
                }
            }

            public function remove_slide($name){
                $img = "slides/".urldecode($name);
                if ($this->slide_model->remv_slides($name)) {
                    if (file_exists($img)) {
                        unlink($img);
                        redirect(base_url().'images');
                    }
                    redirect(base_url().'images');
                }
            }

            public function remove_book($name)
            {
                $img = $this->book_model->select_book_img(urldecode($name));
                $img = $img['book_image'];
                $img = "books/".$img;
               if ($this->book_model->remv_book(urldecode($name))) {
                    if (file_exists($img)) {
                        unlink($img);
                        redirect(base_url().'book');
                    }
                    redirect(base_url().'book');
                }
            }

            public function change_pass()
            {
               $this->form_validation->set_rules('new_pass', 'Password', 'required');
               $this->form_validation->set_rules('conf_pass', 'Password Confirmation', 'required|matches[new_pass]');
                if($this->form_validation->run() == false)
                {
                    $data['title'] = 'Change Password';
                    $data['msg'] = '<h6 class="red-text">New passwords do not match';
                    $this->load->view('templates/admin_header', $data);
                    $this->load->view('admin/change_password',$data);
                    $this->load->view('templates/footer', $data);
                }
                else{
                    $password = $this->input->post('old_pass', true);
                    $new_pass = $this->input->post('new_pass');
                    $new_pass = $this->bcrypt->hash_password($new_pass);
                    if ($this->Login_model->login($password) != false) {
                        if($this->Login_model->change_password($new_pass)){
                            $data['title'] = 'Change Password';
                            $data['msg'] = '<h6 class="green-text">Password was successfully changed';
                            $this->load->view('templates/admin_header', $data);
                            $this->load->view('admin/change_password',$data);
                            $this->load->view('templates/footer', $data);
                        }
                    }
                    else{
                        $data['title'] = 'Change Password';
                        $data['msg'] = '<h6 class="red-text">Incorrect Password';
                        $this->load->view('templates/admin_header', $data);
                        $this->load->view('admin/change_password',$data);
                        $this->load->view('templates/footer', $data);
                    }
                }
            }
    }
?>