<?php
    class Slide_model extends CI_Model
    {
        public function get_slides()
        {
            $query = $this->db->get('slides');
            return $query->result_array();
        }

        public function add_slides($image)
        {
            $query = $this->db->insert('slides', $image);
            if($query){
                return true;
            }
        }

        public function remv_slides($name)
        {
            $query = $this->db->delete('slides', array('image_name' => $name));
            if($query){
                return true;
            }
        }
    }
?>