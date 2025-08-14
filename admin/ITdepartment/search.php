<?php

    require '../../config.php';

	$id=$_GET['textn'];



	$a="select * from it_department where ITM_ID='".$id."'";
    
    $result=$con->query($a)-> fetch_assoc();

	echo $result['ITM_ID']." ". $result['FU_name']." ". $result['Mail'];
    
?>