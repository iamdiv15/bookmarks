<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_submit extends CI_Model{
    public function __construct() {
        parent:: __construct();
        $this->load->database();
    }
    function check_into_db(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $r=$this->db->query("SELECT email FROM users WHERE password='$password'"); 
        if($email==$r){
            
        }
        else{
            
        }
    }
}
?>