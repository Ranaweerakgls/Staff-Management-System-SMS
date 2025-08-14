<?php

require("../../config.php");

$id=$_POST['texti'];
$n=$_POST['textn'];
$ma=$_POST['textm'];


$add="insert into Counsellor values('".$id."','". $n."','".$ma."')";

if (mysqli_query($con,$add)){
    echo"<h1> successfull insert... </h1>";

}
else{
echo "insert Error.....".mysqli_error($con);
}
