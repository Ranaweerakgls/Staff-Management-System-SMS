<?php

require 'config.php';

$studName=$_POST["sname"];
$studID=$_POST["sid"];
$studEmail=$_POST["semail"];
$studIssue=$_POST["sissue"];
$studFac=$_POST["sf"];

$sql="INSERT INTO it_ticket VALUES ('','$studName','$studID','$studEmail','$studIssue','$studFac')";

if($con->query($sql))
{
    echo "Insert successful";
}
else
{
    echo "error".$con->error;
}

$con->close();

?>