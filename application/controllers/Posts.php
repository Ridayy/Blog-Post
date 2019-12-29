<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if(!isset($_SESSION['user_id'])){
            redirect(base_url());
        }else {
            $this->load->model('post');
        }
            
    }

    public function index(){
        $posts = $this->post->get_posts();

        $data = array(
            'posts' => $posts
        );

        $this->load->view('posts/index', $data);

    }

    public function add(){
        
        $this->form_validation->set_rules("title", "Title", "trim|required");
        $this->form_validation->set_rules("body", "Post body", "trim|required");

        if($this->form_validation->run() == FALSE){
            $this->load->view('posts/add');
        }
        else {
            // form validated successfully
            $post = array();

            // $user['name'] = $this->input->post('name');
            $post['title'] = $_POST['title'];
            $post['body'] = $_POST['body'];
            $post['user_id'] = $_SESSION['user_id'];

            $this->post->add_post($post);
            $this->session->set_flashdata('success', 'Post added successfully');
            redirect(base_url().'posts');
        }
    }

        public function show($id){
            $data = array(
                'post' => $this->post->get_post_by_id($id)
            );
            $this->load->view('posts/show', $data);
        }

        public function edit($id){

            $data = array(
                'post' => $this->post->get_post_by_id($id)
            );
              
            $this->form_validation->set_rules("title", "Title", "trim|required");
            $this->form_validation->set_rules("body", "Post body", "trim|required");

            if($this->form_validation->run() == FALSE){

                $this->load->view('posts/edit', $data);
            }
            else {
                // form validated successfully
                $post = array();

                // $user['name'] = $this->input->post('name');
                $post['title'] = $_POST['title'];
                $post['body'] = $_POST['body'];
                $post['user_id'] = $_SESSION['user_id'];

                $this->post->add_post($post);
                $this->session->set_flashdata('success', 'Post updated successfully');
                redirect(base_url().'posts');
            }
        }

        public function delete($id){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Get existing post from model
                $post = $this->post->get_post_by_id($id);
                
                // Check for owner
                if($post['user_id'] != $_SESSION['user_id']){
                  redirect(base_url().'posts');
                }
        
                if($this->post->delete_post($id)){
                    $this->session->set_flashdata('delete_success', 'Post Removed');
                  redirect(base_url().'posts');
                } else {
                    $this->session->set_flashdata('delete_failure','Something went wrong');
                }
              } else {
                redirect(base_url().'posts');
              }
        }

       

}

?>