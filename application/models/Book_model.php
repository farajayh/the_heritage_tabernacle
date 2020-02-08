<?php
    class Book_model extends CI_Model
    {
        public function get_cat()
        {
            $query = $this->db->query('SELECT DISTINCT category FROM books');
            return $query->result_array();
        }

        public function add_book($book_data)
        {
            $query = $this->db->insert('books', $book_data);
            if($query){
                return true;
            }
        }

        public function remv_book($name)
        {
            $query = $this->db->delete('books', array('book_title' => $name));
            if($query){
                return true;
            }
        }

        public function select_book_img($name)
        {
            $this->db->select('book_image');
            $query = $this->db->get_where('books', array('book_title' => $name));
            return $query->row_array();
        }
    }
?>