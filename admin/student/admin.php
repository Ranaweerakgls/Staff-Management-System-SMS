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
    <link rel="stylesheet" href="css/IT.css">
    <title>IT Department panel</title>
    <!--BoxIcon CDN Link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   </head> 
   <body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="pic/logo.jpg">
            <span class="logo_name">UNIVERCITY</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="link_name">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class='bx bxs-chat' ></i>
                    <span class="link_name">Tickets</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class='bx bxs-book'></i>
                    <span class="link_name">Knowledgebase</span>
                </a>
             </li>  
             
             <li>
                <a href="#">
                    <i class='bx bxs-envelope'></i>
                    <span class="link_name">Mail</span>
                </a>
             </li>
             
             <li>
                <a href="#">
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

           <!--profile-->
            <div class="profile-details">
            <?php if(isset($_SESSION['Username'])){ $us=mysqli_query($con,"select * from System_admin where Mail='".$_SESSION['Username']."'");
            $user=mysqli_fetch_array($us);?><?php echo "<h2>". $user['FU_name']."</h2>";}?>
            </div>
        </nav>

        <!--home-content-->
        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="left-side">
                        <div class="box_topic">Recent Tickets</div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <script src="IT.js"></script>
   </body>
</html>