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

            <div class="back-end-user"><h2>Admin</h2></div>
        </nav>


        <!--Flex boxes-->

        <div class="content">
        <a href="student/findstudent.php">
            <div class="support">
                <i class="fa-solid fa-user-tie"></i>
                <h2>Student</h2>
                <P>You can add new users in here</P> 
            </div>
        </a>
      </div> 
         <!--flex box 1-->
      <div class="content">
        <a href="Lecture/findl.php">
            <div class="support">
                <i class="fa-solid fa-user-tie"></i>
                <h2>Lecturer</h2>
                <P>You can add new users in here</P> 
            </div>
        </a>
      </div> 
        <!--flex box 2-->
      <div class="content" >
      <a href="counsellor/findl.php">
            <div class="support">
                <i class="fa-solid fa-user-tie"></i>
                <h2>Counsellor</h2>
                <P>You can remove users in here </P> 
            </div>
        </a>
      </div> 

        <!--flex box 3-->
      <div class="content">
      <a href="ITdepartment/findl.php">
            <div class="support">
                <i class="fa-solid fa-building-user"></i>
                <h2>IT Department</h2>
                <P>You can update the user details</P> 
            </div>
        </a>
     </div>

      <!--flex box 4-->
      <div class="content">
      <a href="Examdepartment/findl.php">
            <div class="support">
                <i class="fa-solid fa-building-user"></i>
                <h2>Exam Department</h2>
                <P>You can find user details in here</P> 
            </div>
    </a>
      </div> 

      <!--flex box 5-->
      <div class="content">
        <div class="support">
            <i class="fa-solid fa-user-tie"></i>
            <h2>Admin</h2>
            <P>You can check acount details here</P> 
        </div>
      </div> 


     </section>
   </body>
</html>