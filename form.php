<html>
<head>
 <link rel="stylesheet" href="css/ticket.css">
</head>

<body>
    
   <?php
      require 'config.php';
   ?>

<div class="container">
        <div class="imga">
            <img src="css/images/unilogo.png" alt="logo" class="logo" >
        </div>
        <div class="intro"> 
            Are you looking for a Help?<br>
            Let's Raise a ticket in here..<br>
            <img src="css/images/form.JPG" alt="image" width="60px" height="50px">
        </div>

        <form action="insert.php" method="post">
            <div class="userdetails">
                <div class="inputbox">
                    <span class="details">Full name</span>
                    <input type="text" name="sname" placeholder="Enter your name" required>
                </div>
                <div class="inputbox">
                    <span class="details">Registration number</span>
                    <input type="text" name="sid" placeholder="Enter your student ID" required>
                    
                </div>
                
                <div class="inputbox">
                    <span class="details">Email</span>
                    <input type="email" name="semail" placeholder=" subject of Email" required>
                </div>
                <div class="inputbox">
                    <span class="details">Issue</span>
                    <input type="text" name="sissue" placeholder="Enter your Issue" required>
                </div>
                <div class="inputbox">
                    <span class="details">Faculty</span>
                    <input type="text" name="sf" placeholder="Type your Faculty" required>
                </div>
                <div class="inputbox">
                    <span class="details">Year </span>
                    <input type="text" name="syear" placeholder="Enter your year" required>
                </div>
            </div>    
      
            <div class="button">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>


    <!--end-->   
</body>



</html>