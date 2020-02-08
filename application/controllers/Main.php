<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {
	public function index()
	{
		$data['result'] = $this->slide_model->get_slides(); 
		$data['title'] = 'Home';
		$this->load->view('templates/header',$data);
		$this->load->view('main/index', $data);
		$this->load->view('templates/footer', $data);
	}

	public function about()
	{
		$data['title'] = 'About Us';
		$this->load->view('templates/header',$data);
		$this->load->view('main/about_us', $data);
		$this->load->view('templates/footer', $data);
	}

	public function contact()
	{
		$data['title'] = 'Contact Us';
		$this->load->view('templates/header',$data);
		$this->load->view('main/contact_us', $data);
		$this->load->view('templates/footer', $data);
	}

	public function evangelism()
	{
		$data['title'] = 'World Evangelism';
		$this->load->view('templates/header',$data);
		$this->load->view('main/world_evangelism', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function guidelight()
	{
		$data['cat'] = $this->book_model->get_cat(); 
		$data['title'] = 'Guidelight Literature';
		$this->load->view('templates/header',$data);
		$this->load->view('main/guidelight', $data);
		$this->load->view('templates/footer', $data);
	}
}
