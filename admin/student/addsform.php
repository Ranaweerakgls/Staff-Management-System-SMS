<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">

    <!----====== css======-->
    <link rel="stylesheet" href="admin.css">
    <title>IT Department panel</title>
    <!--BoxIcon CDN Link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
   </head> 
   <body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="../css/admin/logo1.png">
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

            <div class="back-end-user"><h2>Admin</h2></div>
           <!--profile-->
            <div class="profile-details">
            <img src="admin/images.jfif" width="60px" height="50px">
            <span class="admin_name">Mickel Farade</span>
            </div>
        </nav>

        <div class="account">
        
            <form method="POST" action="addstudent.php">
                    <legend>personal infomation</legend>
                        <p>student id <input type="text" name="texti"></p>
                        <p>First Name <input type="text" name="textn"></p>
                        <p>last Name <input type="text" name="textln"></p>
                        <p>NIC <input type="text" name="nic"></p>
                        <p>Addres <input type="text" name="texta"></p>
                        <p>DOB <input type="text" name="dob"></p>
                        <p>mail <input type="text" name="textm"></p>
                        <p>faculty <input type="text" name="textf"></p>
                        <p>Academic year <input type="text" name="textay"></p>
                        <p>phone number <input type="text" name="textp"></p>
                        <input type="submit">
            </form>
        </div>

     </section>
   </body>
</html>