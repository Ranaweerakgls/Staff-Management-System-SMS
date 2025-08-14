<?php

    require '../../config.php';

	$id=$_GET['textn'];



	$a="select * from student where S_ID='".$id."'";
    
    $result=$con->query($a)-> fetch_assoc();

	echo $result['S_ID']." ". $result['F_name']." ". $result['L_name']." ". $result['NIC']." ". $result['S_Address']." ". $result['DOB']." ". $result['Mail']." ". $result['Faculty']." ". $result['A_year'];

    
?>