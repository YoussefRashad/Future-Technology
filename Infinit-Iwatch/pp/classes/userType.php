<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userType
 *
 * @author Lenovo
 */
include_once '../queries/userTypeQueries.php';
class userType {
    //put your code here

    private $id;
    public $title;
    public function __construct($id) {
        $this->userTypeQueries= new userTypeQueries;
        if ($id!=''){
     
           $data=  $this->userTypeQueries->select_type($id) ;
           $this->title=$data['title'];
           $this->id=$data['id'];

           
        }
        
    }
}
