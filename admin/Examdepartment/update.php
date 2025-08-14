<?php

require("../../config.php");

$id=$_POST['texti'];
$n=$_POST['textn'];
$ma=$_POST['textm'];

$add="update exam_department set EM_ID='$id',FU_name='$n',Mail='$ma' where EM_ID='$id'";
if (mysqli_query($con,$add)){
    echo"<h1> successfull insert... </h1>";

}
else{
echo "insert Error.....".mysqli_error($con);
}
