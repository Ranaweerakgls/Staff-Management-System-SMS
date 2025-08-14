<?php
include('config.php');
session_start();
$email = $_POST["Email"];
$pass = $_POST["Password"];
$qry=mysqli_query($con,"select * from account where Username='$email' and U_password='$pass'");

	$usr=mysqli_fetch_array($qry);
	if($usr['U_type']=='IT')
	{
		$_SESSION['Username']=$email;
		header("location:index.php");
	}
	elseif($usr['U_type']=='AD')
	{
		$_SESSION['Username']=$email;
		header("location:admin/dash.php");
	}
    elseif($usr['U_type']=='CO')
	{
		$_SESSION['Username']=$email;
		header("location:counsellor/dash.php");
	}
    elseif($usr['U_type']=='ED')
	{
		$_SESSION['Username']=$email;
		header("location:examdepartment/dash.php");
	}
    elseif($usr['U_type']=='ID')
	{
		$_SESSION['Username']=$email;
		header("location:itdepartment/dash.php");
	}
    elseif($usr['U_type']=='LE')
	{
		$_SESSION['Username']=$email;
		header("location:lecture/dash.php");
	}
    else
    {
		header("location:beforelog.php");
    }

?>