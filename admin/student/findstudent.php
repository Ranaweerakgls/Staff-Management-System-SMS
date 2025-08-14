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
                <a href="../itknow.php">
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
                <a href="../logout.php">
                    <i class='bx bxs-log-out'></i>
                    <span class="link_name">Log out</span>
                </a>
             </li>   
        </ul>
    </div>
     <!--home content-->


        <div class="account">
        
            <form method="get" action="search.php">
				<p>student no<input type="text" name="textn"></p>
			<input type="submit" value="find">
        </div>

     </section>
   </body>
</html>