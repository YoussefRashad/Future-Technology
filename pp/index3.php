<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        
define("host", "localhost");
define("dbName", "user_role");
define("username", "root")   ;    
define("password", "")   ;    
        
        
$link=mysqli_connect(host, username, password, dbName);
if(!$link){
    die("Connection Error") ;
}

        ?>
    </body>
</html>
