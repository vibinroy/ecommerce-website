<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Life Style Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->
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


        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>the mobile shopee</h1>
                            <p>you chose we do it</p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
           
     <footer>
        <div class="container">
             <center>
                <p>Copyright &copy; the mobile shopee. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
            </center>
        </div>
    </footer>
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>