<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author Lenovo
 */
//session_start();
include_once '../queries/userQueries.php';
include_once '../classes/userType.php';
class user {
    //put your code here
    
    
    public $fname;
    public $lname;
    public $username;
   Public $password;
   public $id;
   public $user_type;
    private $userQueries;
            
    function __construct($id) {
        $this->userQueries=new userQueries();
        if ($id!=''){
            $data=  $this->userQueries->select_user($id);
            $this->fname=$data['fname'];
            $this->lname=$data['lname'];
            $this->username=$data['username'];
            $this->password=$data['password'];
            $this->id=$data['id'];
            $this->user_type=new userType($data['user_type_id']);

        }
        
    }
    public function login($username,$password){
        $data=  $this->userQueries->login($username, $password);
        if(count($data)>0){
            $_SESSION['id']=$data['id'];
            $_SESSION['fname']=$data['fname'];
            return TRUE;
        }
 else {
            return FALSE;
 }
    }
    
    
        }
