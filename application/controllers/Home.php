<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
     public function bookmarks()
      {
        $this->load->view("bookmarks");
        
      }
     public function login()
      {
        $this->load->view("login");
        /*$this->load->model('bookmark_model');
            $r = $this->test_model->match();
            print_r($r);*/
      }
     public function registration_page()
      {
        $this->load->view("registration_page");
      }
    
}
?>