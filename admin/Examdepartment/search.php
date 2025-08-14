<?php

    require '../../config.php';

	$id=$_GET['textn'];



	$a="select * from exam_department where EM_ID='".$id."'";
    
    $result=$con->query($a)-> fetch_assoc();

	echo $result['EM_ID']." ". $result['FU_name']." ". $result['Mail'];
    
?>