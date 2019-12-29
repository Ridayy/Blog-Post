<?php

    class Post extends CI_Model {
        public function get_posts(){
            $this->db->select('*');
            $this->db->from('posts');
            $this->db->join('users', 'posts.id = users.id');

           return $this->db->get()->result_array();
        }

        public function add_post($post){
            $this->db->insert('posts', $post);
        }

        public function get_post_by_id($id){
            $this->db->select('*');
            $this->db->from('posts');
            $this->db->join('users', 'posts.id = users.id AND posts.id='.$id);

           return $this->db->get()->row_array();
        }

        public function delete_post($id){
            $this->db->where('id', $id);
            $this->db->delete('posts');
            if ( $this->db->affected_rows() == '1' ) {return true;}
            else {return false;}
         
        }
    }

?>