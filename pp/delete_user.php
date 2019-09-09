<?php
include_once './index3.php';

$id=$_GET['id'];
$sql="DELETE FROM `users` WHERE id=$id";
$result= mysqli_query($link, $sql);
if($result)
{    header("location: list_user.php");}
?>