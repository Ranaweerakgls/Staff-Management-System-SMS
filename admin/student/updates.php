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

$add="update Student set S_ID='$id',F_name='$n',L_name='$a',NIC='$na',S_Address='$ad',DOB='do',Mail='$ma',Faculty='$f',A_year='$p' where S_ID='$id'";
$ad="update Student_phone set S_ID='$id',phone='$p' where S_ID='$id'";


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