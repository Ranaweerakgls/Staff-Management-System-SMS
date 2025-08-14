<?php

    require '../../config.php';

	$id=$_GET['textn'];
    $a="select * from Counsellor where C_ID='".$id."'";
    $result=$con->query($a)-> fetch_assoc();
    echo $result['C_ID']." ". $result['FU_name']." ". $result['Mail'];
    
?>