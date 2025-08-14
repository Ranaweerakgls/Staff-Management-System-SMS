<?php

require 'config.php';

$studID=$_POST["sid"];

$sql="DELETE FROM ex_ticket WHERE S_ID='$studID'";

if($con->query($sql))
{
    echo "deleted";
}

$con->close();


?>