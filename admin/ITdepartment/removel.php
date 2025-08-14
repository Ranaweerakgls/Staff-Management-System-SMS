<?php

    require '../../config.php';

	$id=$_GET['textn'];



	$a="delete from it_department where ITM_ID='".$id."'";
    if (mysqli_query($con,$a)){
        echo"<h1> successfull insert... </h1>";
    
    }
    else{
    echo "insert Error.....".mysqli_error($con);
    }
    
?>