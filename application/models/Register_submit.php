<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_submit extends CI_Model{
    public function __construct() {
        parent:: __construct();
        $this->load->database();
    }
    function insert_into_db(){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $this->db->query("INSERT INTO users(username,email,password) VALUES('$username','$email','$password')");
        return $username;
        
    }
}
?>