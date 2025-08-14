<?php
include('config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css file link-->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/indexhome.css">
</head>    
<body>
    <!--header section start-->

    <div class="header">
        <ul>
            <img src="css/images/logo1.png" alt="logo" class="logo">
         <div class="header-right">
           <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="abt.php">About</a></li>
            <li><a href="know.php">Knowlagebase</a></li>
            <li><?php if(isset($_SESSION['Username'])){ $us=mysqli_query($con,"select * from Student where Mail='".$_SESSION['Username']."'");
            $user=mysqli_fetch_array($us);?><a href="support.php">Contact student suport</a><a href><?php echo $user['F_name'];?><a href="logout.php">Log out</a>
            <?php }else {?>
            <li><a href="loginpage.php">Log in</a><?php }?></li>
           </ul>
         </div>
    </div><br><br><br>
    <!--header section end-->
</body>
</body>
</html>
         