<!DOCTYPE html>
<html>
<head>
    <title>registration form</title>
    <?php include ("header.php");
    ?>
    <link rel="stylesheet" href="css/appform.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <br><br><br>

    <div class="container">
        <div class="imga">
            <img src="css/images/Untitled-2.png" alt="logo" class="logo" >
        </div>
        <div class="intro"> 
            Are you looking for an appointment?<br>
            Let's schedule an appointment<br>
            <img src="css/images/shedule.png" alt="image" width="50px" height="50px">
        </div>

        <form action="#" method="post">
            <div class="userdetails">
                <div class="inputbox">
                    <span class="details">Full name</span>
                    <input type="text" placeholder="Enter your name" required>
                </div>
                <div class="inputbox">
                    <span class="details">Registration number</span>
                    <input type="text" placeholder="Enter your student ID" required>
                    
                </div>
                
                <div class="inputbox">
                    <span class="details">subject</span>
                    <input type="text" placeholder=" subject of issue" required>
                </div>
                <div class="inputbox">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter your email" required>
                </div>
                <div class="inputbox">
                    <span class="details">Issue</span>
                    <input type="text" placeholder="Type your issue" required>
                </div>
                <div class="inputbox">
                    <span class="details">Date</span>
                    <input type="Date" placeholder="Enter date" required>
                </div>
                <div class="inputbox">
                    <span class="details">Lecturer</span>
                    <select class="details">
                        <option>menaka</option>
                        <option>krishanth</option>
                        <option>susadi</option>
                    </select>
                </div>
            </div>    
      
            <div class="button">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    
     <!--foter section start-->


    
    <section class="footer">
    
        <h3>Contact us</h3>
        <h4>IT servisers</h4>
        <p> University of Enigma</p>
        <p>House, University Offices</p>
        <p>Wellington Square<p>
        <p>Tel: 01865 (2)73200</p>
        <div class="credit">
            <p>Create by KNDUNI_8 | all right reserverd @2024</p>
        </div>
    </section>
    
    <!--foter section end-->

</body>
</html>