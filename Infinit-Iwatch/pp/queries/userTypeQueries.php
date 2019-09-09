<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userTypeQueries
 *
 * @author Lenovo
 */
class userTypeQueries {
    //put your code here
    private $DB;
    public function __construct() {
        $this->DB=new Database();
    }
    
    public function select_type($id){
        $query="SELECT * FROM `user_type` WHERE id=$id";
        $data=  $this->DB->get_row($query);
        return $data;
    }
}
