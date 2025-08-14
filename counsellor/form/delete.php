<?php

require 'config.php';

$studID=$_POST["sid"];

$sql="DELETE FROM it_ticket WHERE S_ID='$studID'";

if($con->query($sql))
{
    echo "Deleted";
}
else{
    echo "not deleted";
}


?>