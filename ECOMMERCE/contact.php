<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup |the mobile shopee</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        
        <hr>
        <div class="header">
                <nav class="navbar navbar-default navbar-fixed-top">
                     <div class="container">
                         <div class="navbar-header">
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav navbar-fixed-top">
                                    <a href="products.php"  class="estore">E-STORE</a>
                                    <a href="contact.php" class="contact"><span class="glyphicon glyphicon-log-in"></span>contact</a>
                                    <a href="about.php" class="about"><span class="glyphicon glyphicon-user"></span>about-us</a>
                                    <a href="login.php" class="signin"><span class="glyphicon glyphicon-shopping-cart"></span>sign-in</a>
                                    <a href="signup.php" class="signout"><span class="glyphicon glyphicon-log-in"></span>sign-up</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="image">
                    <img src="img/contact.png" alternate="">
                </div>
            <div class="content">
        
                <h1>LIVE SUPPORT</h1>
                <p>24 hours|7 days a week|365 days a year live support</p>
                <p>it is a long established fact that a reader will be distracted by the readable content of the page when looking at its layout.
                    the point of using lorem ipsum is that it has more or less normal distribution of letters. there are many variations of passage
                    of lorem ipsum available ,but the majority have suffered alteration in some form,by injected humour,or randomised wrds which dont
                    look even slightly believable.if you are going to use a passage of lorem ipsum you need to be sure there isnt anything embrassing
                    hidden in the middle of text.</p>
                
            </div>
           
            <div class=row>   
                <div class="company">
                                <h3>company infomation:-</h3>
                                <p>500 lorem ipsum dolor sit,</p>
                                <p>22-56-2-9 sit amet,lorem,</p>
                                <p>USA</p>
                                <p>phone:(00) 222 666 44</p>
                                <p>fax:(000)000 00 00 0</p>
                                <p>Email:info@mycompany.com</p>
                                <p>follow on:facebook,twitter,instagram.</p>
                            </div>
            <div class=row>
                <div class=forms>
                <div class="col-lg-9 col-lg-offset-3 col-md-6 col-md-offset-3">
               
                        <h2>CONTACT US</h2>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                               name: <input class="form-control" lable="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                               Email: <input type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true"><?php echo $_GET['m1']; ?>
                            </div>
                            <div class="form-group">
                                message:<input type="data" class="form-control"  pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" name="message" required = "true">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">submit</button>
                        
                         </div>
                    </div>
                </div>
                <footer>
    <div class="container">
        <center>
            <p>Copyright &copy; the mobile shopee. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
        </center>
    </div>
</footer>
                
           

    

                


       
        <?php include "includes/footer.php"; ?>
    </body>
</html>