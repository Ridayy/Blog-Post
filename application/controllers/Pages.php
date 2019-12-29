<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function index(){

       if(isset($_SESSION['user_id'])){
            redirect(base_url().'/posts');
       }

       $app_data = [
           'title'=> 'BlogPosts',
           'description'=>'This is an application to share posts'
       ];
       $data = array();
       $data['app_data'] = $app_data;
       $this->load->view('pages/index', $data);
    }

    public function about(){
        $app_data = [
            'title'=> 'About',
            'description'=>'App created by Rida Arif'
        ];
        $data = array();
        $data['app_data'] = $app_data;
        $this->load->view('pages/about', $data);
     }
}

?>