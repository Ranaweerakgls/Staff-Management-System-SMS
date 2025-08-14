<?php

    require '../../config.php';

	$id=$_GET['textn'];



	$a="select * from Lecture where L_ID='".$id."'";
    
    $result=$con->query($a)-> fetch_assoc();

	echo $result['L_ID']." ". $result['FU_name']." ". $result['Faculty']." ". $result['Mail'];
    
?>