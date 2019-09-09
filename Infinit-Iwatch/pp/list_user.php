
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script>
    </head>

</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo 'list user';

include_once './index3.php';
    echo 'List Users';
    $sql="SELECT * FROM `users`";
    $result= mysqli_query($link, $sql);
    echo '<div  style="border:2px solid purple; border-color=purple;  margin: 5px">  
        <table class="table table-sm table-dark" style="background-color:black; color:crimson ;  margin:%;
        padding: 100%;margin-bottom: 0px">
  <thead><tr >'.
            '<th scope="col"  >First Name </th>'.
            '<th scope="col" >Last Name </th>'.
            '<th scope="col">User Type </th>'.
            '<th scope="col" style"color:purple;">Action</th>'.
            '</tr>
            </thead>';
    while($row= mysqli_fetch_assoc($result))
            {
        echo '<tr  ><thead>';
        echo '<td scope="col" style="border-color:purple; color:pink;"  >'.$row['fname'].'</td>';
        echo '<td scope="col" style="border-color:purple;">'.$row['lname'].'</td>';
        echo '<td scope="col" style="border-color:purple; color:pink;">'.$row['user_type_id'].'</td>';
        echo '<td scope="col" style="border-color:purple;"><a href="update_user.php?id='.$row['id'].'">Update</a> '
                .'<a      href="delete_user.php?id='.$row['id'].'">Delete</a> </td>';        
        
        echo '</tr></thead>';
            }
            echo '</table> </div>';
?>

    
