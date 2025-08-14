<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">

    <!----====== css======-->
    <link rel="stylesheet" href="css/itknow.css">
    <title>IT Department panel</title>
    <!--BoxIcon CDN Link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
   </head> 
   <body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="css/admin/logo1.png">
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
                <a href="itknow.php">
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
                <span class="dashboard">Knowledgebase</span> 
            </div>

            <div class="back-end-user"><h2>IT Department Member</h2></div>
           <!--profile-->
        </nav>

        <!--knowledgebase content-->

        <!--main theme-->
    <div class="know-container">
        <h2><b><center>Knowledgebase</center></b>
     <p><center>Welcome to our Kowledgebase! You can view any document if you need.</center></p>
    </div>
    
    <!--search Box-->
    <div class="box">
        <div class="search-box">
            <input type="text" placeholder="Search or type here...">
            <label for="" class="icon">
                <i class="fa-solid fa-magnifying-glass"></i>
            </label>
        </div>
    </div>

    <!--Horizontal line-->
    <hr class="h-top">

    <h2><b><center>Featured Articles</center></b></h2>
    <br>

    <!--button 1-->
    <button type="button" class="button" width="400px">
        <span class="button_text" width="200px">Semester Reistration</span>
        <span class="chevron">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
    </button>
    <!--button 2-->
    <button type="button" class="button">
        <span class="button_text">What is Eduscope?</span>
        <span class="chevron">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
    </button>

    <!--button 3-->
    <button type="button" class="button">
        <span class="button_text">Rules and Regulation</span>
        <span class="chevron">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
    </button>

    <!--button 4-->
    <button type="button" class="button">
        <span class="button_text">Repeat Registration</span>
        <span class="chevron">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
    </button><br>
    <br>
    <!--button 5-->
    <button type="button" class="button">
        <span class="button_text" width="200px">Grading At Enigma uni</span>
        <span class="chevron">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
    </button>
    
    <!--button 6-->
    <button type="button" class="button">
        <span class="button_text">Refund and financial</span>
        <span class="chevron">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
    </button>
     
    <!--button 7-->
    <button type="button" class="button">
        <span class="button_text">Orientation Programme</span>
        <span class="chevron">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
    </button>

    <!--button 8-->
    <button type="button" class="button">
        <span class="button_text">Career Guidance</span>
        <span class="chevron">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
    </button><br>
    <br>

    <!--button 9-->
    <button type="button" class="button">
        <span class="button_text" width="400px">Dean's List/Lecturers</span>
        <span class="chevron">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
    </button>

    <!--button 10-->
    <button type="button" class="button">
        <span class="button_text">Reset your password</span>
        <span class="chevron">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
    </button>

    <!--button 11-->
    <button type="button" class="button">
        <span class="button_text">contact faculty staff</span>
        <span class="chevron">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
    </button>

    <!--button 12-->
    <button type="button" class="button">
        <span class="button_text">Financial Aide</span>
        <span class="chevron">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
    </button><br>
    <br>
    <br><br><br>

    <!--Horizontal line-->
    <hr class="h">

     <!--flex box support-->
     <div class="content">
        <div class="support">
            <i class="fa-solid fa-rectangle-list"></i>
            <h2>Can't Find what you're looking for?</h2>
            <P>click on Support button to raise a ticket. </P><br>
            <button type="button" class="button-support"><b>Support</b></button>
        </div>
      </div> 
    