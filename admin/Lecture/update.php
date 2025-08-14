<?php

require("../../config.php");

$id=$_POST['texti'];
$n=$_POST['textn'];
$f=$_POST['textf'];
$ma=$_POST['textm'];

$add="update Lecture set L_ID='$id',FU_name='$n',Faculty='$f',Mail='$ma' where L_ID='$id'";
if (mysqli_query($con,$add)){
    echo"<h1> successfull insert... </h1>";

}
else{
echo "insert Error.....".mysqli_error($con);
}
