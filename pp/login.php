<?php
session_start();
    include_once  './index3.php';
?>
<html>
    
    <br>
        <form action="" method="post">
          username  <input type="text" name="username" id="username" required="">
            <br><br>
            password <input type="password" name="password" id="password" required="">            
            <br><br>
            <input type="checkbox" name="remember" value="1" > remember me <br>
            <input type="submit" name="login" value="login">
            <br>
        </form>
    <div>
        <?php
        if(isset($_GET['error'])){
            echo 'invalid password or username ';
        }
        ?>
    </div>
    
</html>


<?php
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=  ($_POST['password']);
    if(isset($_POST['remember'])){
    $rem=$_POST['remember'];}
    
    $query="select *from users where username='$username' and password='$password'";
    $result=mysqli_query($link, $query);
    
    $row=  mysqli_fetch_assoc($result);
    //var_dump($row);
    echo $row['id'];
    
    if (mysqli_num_rows($result)>0)
    {
        $_SESSION['id']=$row['id'];
    $_SESSION['username']=$row['username'];
    $_SESSION['password']=$row['password'];
   $_SESSION['user_type_id']=$row['user_type_id'];
      $_SESSION['fname']=$row['fname'];
   $_SESSION['lname']=$row['lname'];
   //unset($_SESSION['lname']);
   
    //var_dump($_SESSION);

   header("location: home.php");  }

     
else {
header("location: login.php?error=1");  }
  var_dump($_GET);
}  

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

