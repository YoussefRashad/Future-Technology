<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../queries/userTypeQueries.php';
include_once '../classes/user.php';
$user = new user(1);
//var_dump($user);

echo $user->fname;