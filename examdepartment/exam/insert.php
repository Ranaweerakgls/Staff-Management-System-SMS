<?php

require '../../config.php';

$studName=$_POST["sname"];
$studID=$_POST["sid"];
$studEmail=$_POST["smail"];
$studIssue=$_POST["sissue"];
$studFac=$_POST["sf"];

$sql="INSERT INTO ex_ticket VALUES ('','$studName','$studID','$studEmail','$studFac','$studIssue')";

if($con->query($sql))
{
    echo "Insert succsessful";
}

else{
    echo "Error".$con->error;
}

$con->close();

?>