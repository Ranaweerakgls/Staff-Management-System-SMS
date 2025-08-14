<?php

require 'config.php';

$userMail=$_POST["mail"];
$userID=$_POST["uid"];
$password=$_POST["pass"];

if(empty($userMail)||empty($userID)||empty($password))
{
    echo "All Required";
}

else{

    $sql="UPDATE account set U_password='$password' WHERE U_ID='$userID'";

    if($con->query($sql))
    {
        echo "Updated";
    }
    else
    {
        echo "Not updated";
    }
}


?>