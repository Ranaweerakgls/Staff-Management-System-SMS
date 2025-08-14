<?php

require("../../config.php");

$id=$_POST['texti'];
$n=$_POST['textn'];
$a=$_POST['textln'];
$na=$_POST['nic'];
$ad=$_POST['texta'];
$do=$_POST['dob'];
$ma=$_POST['textm'];
$f=$_POST['textf'];
$ay=$_POST['textay'];
$p=$_POST['textp'];

$add="insert into Student values('".$id."','". $n."','". $a."','". $na."','". $ad."','". $do."','". $ma."','". $f."','".$ay."')";
$ad="insert into Student_phone values('".$id."','". $p."')";


if (mysqli_query($con,$add)){
    echo"<h1> successfull insert... </h1>";

}
else{
echo "insert Error.....".mysqli_error($con);
}

if (mysqli_query($con,$ad)){
    echo"<h1> successfull insert... </h1>";

}
else{
echo "insert Error.....".mysqli_error($con);
}
?>