<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">

    <!----====== css======-->
    <link rel="stylesheet" href="IT.css">
    <title>IT Department panel</title>
    <!--BoxIcon CDN Link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--fontawesome CDN link-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
   </head> 
   <body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="images/unilogo.png">
            <span class="logo_name">ENIGMA UNIVERCITY</span>
        </div>
        <ul class="nav-links">
        <ul class="nav-links">
            <li>
                <a href="../dash.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="link_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="../upuser.php">
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
                <a href="../itknow.php">
                    <i class='bx bxs-book'></i>
                    <span class="link_name">Knowledgebase</span>
                </a>
             </li>  

             <li>
                <a href="../IT.php">
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
                <a href="../logout.php">
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
                <span class="dashboard">Tickets</span> 
            </div>

            <div class="back-end-user"><h2>IT Department Member</h2></div>
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
            <div class ="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>TicketID</th>
                            <th>SName</th>
                            <th>StID</th>
                            <th>Email</th>
                            <th>Issue</th>
                            <th>Faculty</th>
                        </tr>
                    </thead>
                        <tbody>
                        <?php

require 'config.php';

$sql="SELECT TID,Ful_Name,S_ID,mail,T_Description,Faculty FROM it_ticket";

$result=$con->query($sql);


if($result->num_rows>0)
{
    echo "<table border='1'>";
    
    while($row=$result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$row["TID"]."</td>". "<td>".$row["Ful_Name"]."</td>"."<td>".$row["S_ID"]."</td>"."<td>".$row["mail"]."</td> "."<td>".$row["T_Description"]."</td>"."<td>".$row["Faculty"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

else
{
    echo "No Results";
}

$con->close();
?>                    
                        </tbody>
                </table>
        </div>

        <br><br><br><br><br><br>
             <form method="post" action="delete.php">
                <div class="inputbox">
                    <span class="stID">Student ID</span>
                    <input type="text" name="sid" placeholder="Enter student ID to remove from colomn" required>  <input type="submit" value="Delete">
                    
                </div>
             </form>  

        
     </section>
   </body>
</html>


