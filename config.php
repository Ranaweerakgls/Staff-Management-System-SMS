<?php

$host = "127.0.0.1";
$user = "root";                     
$pass = "";                                  
$db = "onlinehelpdesk";

 $con = mysqli_connect($host, $user, $pass, $db);

 if($con->connect_error)
 {
    die("connection faild".$con->connect_error);
 }
?>

