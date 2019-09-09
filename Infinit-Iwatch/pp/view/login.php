<?php
include_once '../classes/user.php';
if(isset($_POST['login'])){
    $username=$_POST['username'];
     $password=$_POST['password'];
    $user=new user($id='');
    if ($user->login($username, $password)){
           header("location: home.php");  }
           
     else{
      echo 'not valid';
     }      

    
}
 
?>
  <html>
 
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script>
    </head>
     <br>
    <body>
    <div class="row container-fluid">
    <div class="col-lg-2 col-sm-6 col-xl-12" >
        <form action="" method="post">
            <div class="form-group">
                <label for ="username">username </label>

                <input type="text" name="username" id="username" required="" class="form-control">
            </div>
            <br><br>
             <div class="form-group">
                <label for ="password">Password </label>
                <input type="password" name="password" id="password" required="" class="form-control">    </div>        
            <br><br>
              <div class="form-group">
                 <input type="submit" name="login" class="btn btn-danger" value="login">  
             </div>
            <br>
        </form>
        </body>
        </html>