<!DOCTYPE html>
<html>
<head>
    <title>Ticket</title>
    <link rel="stylesheet" href="css/ex-ticket.css">
</head>
<body>
    
    <div class="container">
        <div class="imga">
            <img src="css/images/unilogo.png" alt="logo" class="logo" >
        </div>
        <div class="intro"> 
            Are you looking for a Exam Help?<br>
            Let's Raise a ticket in here..<br>
            <img src="css/images/form.JPG" alt="image" width="60px" height="50px">
        </div>

        <form action="examdepartment/exam/insert.php" method="post">
            <div class="userdetails">
                <div class="inputbox">
                    <span class="details">Full name</span>
                    <input type="text" placeholder="Enter your name" name="sname" required>
                </div>
                <div class="inputbox">
                    <span class="details">Registration number</span>
                    <input type="text" placeholder="Enter your student ID" name="sid" required>
                    
                </div>
                
                <div class="inputbox">
                    <span class="details">Email</span>
                    <input type="email" placeholder=" subject of Email" name="smail" required>
                </div>
                <div class="inputbox">
                    <span class="details">Issue</span>
                    <input type="text" placeholder="Enter your Issue" name="sissue" required>
                </div>
                <div class="inputbox">
                    <span class="details">Faculty</span>
                    <input type="text" placeholder="Type your Faculty" name="sf" required>
                </div>
                <div class="inputbox">
                    <span class="details">Year </span>
                    <input type="text" placeholder="Enter your year" name="syear" required>
                </div>
            </div>    
      
            <div class="button">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    
</body>
</html>