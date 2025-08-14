<?php

require("../../config.php");

$id=$_POST['texti'];
$n=$_POST['textn'];
$f=$_POST['textf'];
$ma=$_POST['textm'];

$add="insert into Lecture values('".$id."','". $n."','". $f."','".$ma."')";

if (mysqli_query($con,$add)){
    echo"<h1> successfull insert... </h1>";

}
else{
echo "insert Error.....".mysqli_error($con);
}
