<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userQueries
 *
 * @author Lenovo
 */
include_once '../Database/Database.php' ;
class userQueries {
    //put your code here
    private $DB;
    public function __construct() {
        $this->DB=new Database();
    }
    public function select_user($id){
        $query="SELECT * FROM `users`WHERE id=$id";
        $data=  $this->DB->get_row($query);
        return $data;
    }
    
    public function login($username,$password){
        $username=  $this->DB->clean($username);
        $password=  $this->DB->clean($password);

        
        $query="SELECT * FROM `users` "
                . "WHERE username='$username'"
                . "and password='$password'";
        $data=  $this->DB->get_row($query);
        return $data;
    }
    
    
}
