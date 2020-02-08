<?php
    class Login_model extends CI_Model
    {
        public function login($password){
            $this->db->select('*');
            $this->db->from('_admin');
            $this->db->where('username', 'admin');
            $this->db->limit(1);
            $query=$this->db->get();
            if($query->num_rows() == 1){
                $result=$query->row_array();
                if($this->bcrypt->check_password($password,$result['password'])){
                    return $query->result();
                }else{
                    return FALSE;
                }
            }else{
                return FALSE;
            }       
        }

        public function change_password($password)
        {
            $data = array('password' => $password);
            $this->db->where('username','Admin');
            if($this->db->update('_admin', $data)){
                return true;
            }

        }

    }
?>