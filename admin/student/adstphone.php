<?php

require("../../config.php");

$id=$_POST['texti'];
$p=$_POST['textp'];

$ad="insert into Student_phone('".$id."','". $p."')";

if (mysqli_query($con,$ad)){
    echo"<h1> successfull insert... </h1>";

}
else{
echo "insert Error.....".mysqli_error($con);
}
?>