<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function bookmarks(){
        $this->load->view("bookmarks");
    }
    
    public function login(){
        $this->load->view("login");
    }
    
    public function registration_page(){
        $this->load->view("registration_page");
    }
    
    public function insert_into_db(){
        $this-> load-> model('register_submit');
        $r=$this-> register_submit->insert_into_db();
        $this-> load-> view("registration_success");
    }
    
}
?>