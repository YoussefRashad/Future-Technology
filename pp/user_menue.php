<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include_once './index3.php';
if(isset($_SESSION['user_type_id'])){


    $type_id=$_SESSION['user_type_id'];
    $query="SELECT url.id, url.title,url.value "
            . "FROM user_type_url , url "
            . "WHERE url.id=user_type_url.url_id "
            . "AND user_type_url.user_type_id=$type_id";
   
}
$result=  mysqli_query($link, $query);

echo '<ul>';
while ($row= mysqli_fetch_assoc($result)){
    echo '<li>';
    echo '<a href="'.$row['value'].'">'.$row["title"].'</a>';
       echo'</li>';
}

echo '<li><a href="http://localhost/Phpsession333/logout.php">Logout</a></li>';
echo '<li><a href="http://localhost/Phpsession333/reg_newuser.php">new</a></li>';

        echo '</ul>';