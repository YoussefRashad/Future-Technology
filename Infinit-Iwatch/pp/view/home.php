<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include_once '../classes/user.php';
$user=new user($_SESSION['id']);
//echo 'welcome '.$_SESSION['fname'];
echo 'welcome '.$user->fname;
