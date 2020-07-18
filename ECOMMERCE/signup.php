<?php
require("includes/common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | the mobile shopee</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
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

        <?php include 'includes/header.php'; ?>
        <div id="content">
            <div class="container-fluid decor_bg" id="signup-script">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                           
                            <div class="panel-heading">
                                <h4>SIGNUP</h4>
                                
                            </div>
                            
                            <div class="panel-body">
                                
                                <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true"><?php echo $_GET['m1']; ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true"><?php echo $_GET['m2']; ?>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary"><a href="products.php"></a>SIGNUP</button>
                        </form>
                            
                    </div>
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

        <?php include 'includes/footer.php'; ?>
    </body>
</html>
