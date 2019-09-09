<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script>
    </head>
<?php
include_once './index3.php';
include_once './user_menue.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo 'new user';

if (isset($_POST['add'])){
    //var_dump($_POST);
    
    $username=$_POST['username'];
        $password=  md5($_POST['password']);
         $Fname=$_POST['Fname'];
         $Lname=$_POST['Lname'];
         $user_type=$_POST['user_type'];
         $query="INSERT INTO".
                 "`users`( `fname`, `lname`, `username`, `password`, `user_type_id`) "
                 ."VALUES ('$Fname','$Lname','$username','$password',$user_type)";

         echo $query ;
$result=  mysqli_query($link, $query);
if($result){
    echo ' <div class="alert  alert-success">Inserted successfully</div>';
    exit();
;
}

}
?>

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
                <label for ="Fname">Fname</label>
                <input type="text" name="Fname" id="FName" required="" class="form-control">  </div> 
                 <div class="form-group">
                <label for ="Lname">Lname </label>
                <input type="text" name="Lname" id="LName" required=""class="form-control">    </div>        
            <select name="user_type"><br><br>
                
            <?php
            
            $query="select *from user_type";
            $result= mysqli_query($link, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<option value="'.$row['id'].'">'.$row['title'].'</option>';
                
            }
            ?>
            
            </select>
            <br>
            <br>
             <div class="form-group">
                 <input type="submit" name="add" class="btn btn-danger" value="add">  
             </div>
            <br>
        </form>
    </div></div>
    
    </body>
        <html>