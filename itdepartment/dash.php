<?php
include('../config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">

    <!----====== css======-->
    <link rel="stylesheet" href="css/dash.css">
    <title>IT Department panel</title>
    <!--BoxIcon CDN Link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
   </head> 
   <body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="css/pictures/logo1.png">
        </div>
        <ul class="nav-links">
            <li>
                <a href="dash.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="link_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="upuser.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="link_name">profile</span>
                </a>
            </li>

            <li>
                <a href="form/read.php">
                    <i class='bx bxs-chat' ></i>
                    <span class="link_name">Tickets</span>
                </a>
            </li>

            <li>
                <a href="itknow.php">
                    <i class='bx bxs-book'></i>
                    <span class="link_name">Knowledgebase</span>
                </a>
             </li>  

             <li>
                <a href="IT.php">
                    <i class="fa-solid fa-people-group"></i>
                    <span class="link_name">Team</span>
                </a>
             </li>
             
             
             <li>
                <a href="#">
                    <i class='bx bxs-envelope'></i>
                    <span class="link_name">Mail</span>
                </a>
             </li>
             
             <li>
                <a href="logout.php">
                    <i class='bx bxs-log-out'></i>
                    <span class="link_name">Log out</span>
                </a>
             </li>   
        </ul>
    </div>
     <!--home content-->
     <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu'></i>
                <span class="dashboard">Dashboard</span> 
            </div>

            <div class="back-end-user"><h2>IT Department Member</h2></div>
           <!--profile-->
            <div class="profile-details">
            <?php if(isset($_SESSION['Username'])){ $us=mysqli_query($con,"select * from it_department where Mail='".$_SESSION['Username']."'");
            $user=mysqli_fetch_array($us);?><?php echo "<h2>". $user['FU_name']."</h2>";}?>
            </div>
        </nav>

        <!--profile creating-->

        <div class="container">
            <div class="profile-box">
            <img src="css/pictures/IT.jpg" class="profile-pic">
            <p> Senior incharge of IT Department </p>
            <div class="social-media">
                <i class="fa-brands fa-square-twitter"></i>
                <i class="fa-brands fa-square-facebook"></i>
                <i class="fa-brands fa-square-github"></i>
            </div>

             <button type="button">Follow</button>

             <div class="profile-bottom">
                <p><h2>Profile card</h2></p>
                <br>
                <p>I Am senior oncharge of IT department in ENIGMA university</p>
                <br>
                <h3>Member ID : <?php if(isset($_SESSION['Username'])){ $us=mysqli_query($con,"select * from it_department where Mail='".$_SESSION['Username']."'");
            $user=mysqli_fetch_array($us);?><?php echo "<h2>". $user['ITM_ID']."</h2>";}?></h3>
                <h3>Email :<?php if(isset($_SESSION['Username'])){ $us=mysqli_query($con,"select * from it_department where Mail='".$_SESSION['Username']."'");
            $user=mysqli_fetch_array($us);?><?php echo "<h2>". $user['Mail']."</h2>";}?> </h3>
                <h3>Skills</h3>
                <ul>
                    <li>web development</li>
                    <li>software application development</li>
                </ul>
             </div>

            </div>
        </div>


     </section>
   </body>
</html>