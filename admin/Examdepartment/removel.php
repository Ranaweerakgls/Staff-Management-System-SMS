<?php

    require '../../config.php';

	$id=$_GET['textn'];



	$a="delete from exam_department where EM_ID='".$id."'";
    if (mysqli_query($con,$a)){
        echo"<h1> successfull insert... </h1>";
    
    }
    else{
    echo "insert Error.....".mysqli_error($con);
    }
    
?>