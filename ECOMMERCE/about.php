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
        <title>Signup | the mobile shopee</title>
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
            <table>
                <tbody>
                    <tr><th><h3>who are we</h3></th> <th><h3>our history</h3></th>    <th><h3>opporunity</h3></th></tr>
                    <tr><td><img src="img/about-img.jpg" alternate=""></td><td><p><a>1996</a></p>
                     <p>the comapnt wqs founded in 1998 spured by what velos called "intiating framework".which describes his efforts as an intiate
                     to particaipate in the internet business boom during the time</p>
                     <p><a>2002</a></p>
                     <p>In jan 2002,E-store has received a funding of $12 million from venture partner and indo-us venture patners</p>
                     <p><a>2008</a></p>
                     <p>In july 2008 the company raised a futher $45 million from bessemers venture partners along with existing investors venture partners and 
                     indo-us venture partners</p></td>
                     <td></td><td><p>1.jr/sr web developer<br><br> 2.business apprentice<br><br>3.manager at backend operations<br><br></p></td>
                     <tr><td>E-store is an american electronic commerce company with headquaters in washington.it is the largest internet based retailler in the USA.
                    E-store started as an online blog.but soon diversified.selling mobile phones.E-store also started as an online blog.
                    but soon diversified.selling mobile phone .estore also sells certain low end products like USB cables and other E-store has separate retail 
                    website for united states</td></tr>


                </tbody>
            </table>
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