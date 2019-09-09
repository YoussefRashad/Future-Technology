<?php
include_once './index3.php';

$id=$_GET['id'];
$sql="SELECT * FROM `users` WHERE id=$id";
$result= mysqli_query($link, $sql);
$data= mysqli_fetch_assoc($result);

if(isset($_POST['sub']))
    {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname']; 
    $user_type=$_POST['user_type'];
    $query="UPDATE `users` SET `fname`='$fname',"
            . "`lname`='$lname',`username`='$username',`password`='$password',`user_type_id`='$user_type' WHERE id='$id'";
    $result= mysqli_query($link, $query);
    if($result){
        echo 'Updated';
        header("location: list_user.php");
    }
    }
?>
<html>
    <head>
        <title>Update User</title>
    </head>
    <body>
        <form action="" method="post">
            UserName:<input type="text" name="username" value="<?php echo$data['username']; ?>"><br><br>
            Password:<input type="text" name="password" value="<?php echo $data['password'] ?>"><br><br>
            First Name:<input type="text" name="fname" value="<?php echo$data['fname']; ?>"><br><br>
            Last Name:<input type="text" name="lname" value="<?php echo$data['lname']; ?>"><br><br>
            
            
            <select name="user_type"><br><br>
                
            <?php
            
            $query="select *from user_type";
            $result= mysqli_query($link, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<option value="'.$row['id'].'">'.$row['title'].'</option>';
                
            }
            ?>
            
            </select>
            
            
            <br><br><input type="submit" name="sub" value="Update">
        </form>
        
    </body>
    
    
</html>