<?php

    require '../../config.php';

	$id=$_GET['textn'];



	$a="delete from Student where S_ID='".$id."'";
    $ad="delete from Student_phone where S_ID='".$id."'";
    if (mysqli_query($con,$a)){
        echo"<h1> successfull insert... </h1>";
    
    }
    else{
    echo "insert Error.....".mysqli_error($con);
    }
    if (mysqli_query($con,$ad)){
        echo"<h1> successfull insert... </h1>";
    
    }
    else{
    echo "insert Error.....".mysqli_error($con);
    }
    
?>