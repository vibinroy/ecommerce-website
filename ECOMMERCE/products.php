<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products |the mobile shopee</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <div class="container-fluid" id="content">
           
            <hr>
            <div class="header">
                <nav class="navbar navbar-default navbar-fixed-top">
                     <div class="container">
                         <div class="navbar-header">
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav navbar-fixed-top">
                                    <a href="products.php"  class="estore">E-STORE</a>
                                    <a href="logout.php" class="about"><span class="glyphicon glyphicon-log-in"></span> logout</a>
                                    <a href="settings.php" class="signin"><span class="glyphicon glyphicon-user"></span>setting</a>
                                    <a href="cart.php" class="signout"><span class="glyphicon glyphicon-shopping-cart"></span>cart</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/one-plus-7T.jpg"  width="50" alt="">
                        <div class="caption">
                        <h3>one-plus-7T </h3>
                                         <p>Battery : 3800mAH
                                         Camera : 48MP +8MP + 16MP | 16MP Front Camera
                                         RAM : 8GB 
                                        ROM : 128GB   
                                        Price : 35,999/-
                                        </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/one-plus-7T-pro.jpg" width="70" alt="">
                        <div class="caption">
                        <h3>One Plus 7T Pro</h3>
                            <p>Battery : 4085mAH
                                Camera : 16MP + 20MP | 16MP Front Camera
                                RAM : 8GB 
                                ROM : 256GB   
                                Price : 47,999/-
                                </P>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/iphone-xr.jpg" width="50" alt="">
                        <div class="caption">
                        <h3>iPhone XR</h3>
                            <p>
                            Battery : 4085mAH
                            Camera : 16MP + 20MP | 16MP Front Camera
                            RAM : 8GB 
                            ROM : 256GB   
                            Price : 53,999/-
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/iphone-xs-max.jpg" width="37" alt="">
                        <div class="caption">
                        <h3> iPhone XS-Max</h3>
                            <p>Battery : 3400mAH
                                Camera : 32MP + 20MP | 16MP Front Camera
                                RAM : 8GB 
                                ROM : 256GB   
                                Price : 99,999/-
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/iphone-7.jpg" width="38" alt="">
                        <div class="caption">
                        <h3>iPhone 7 </h3>
                            <p>Battery : 3400mAH
                            Camera : 12MP  | 16MP Front Camera
                            RAM : 8GB 
                            ROM : 256GB   
                            Price : 29,999/-
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/iphone-8.jpg" width="40" alt="">
                        <div class="caption">
                        <h3>iPhone 8</h3>
                            <p>Battery : 3400mAH
                                Camera : 20MP  | 16MP Front Camera
                                RAM : 8GB 
                                ROM : 128GB   
                                Price : 41,999/-
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/mi-redmi-k20-pro.jpeg" width="30" alt="">
                        <div class="caption">
                        <h3>Redmi K20 Pro</h3>
                            <p>Battery : 4000mAH
                                Camera : 48MP + 13MP + 8MP | 20MP Front Camera
                                RAM : 8GB 
                                ROM : 128GB   
                                Price : 29,999/-
                                </P>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/mi-note-8.jpg" width="65" alt="">
                        <div class="caption">
                        <h3> Redmi Note 8</h3>
                            <p> Battery : 4000mAH
                                Camera : 48MP + 13MP + 8MP | 20MP Front Camera
                                RAM : 6GB 
                                ROM : 64GB   
                                Price : 9,999/-
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="shirts">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/samsung-galaxy-s10.jpeg" width="28" alt="">
                        <div class="caption">
                        <h3> Samsung Galaxy S10 Plus</h3>
                            <p>Battery : 4000mAH
                                Camera : 48MP + 13MP + 8MP | 20MP Front Camera
                                RAM : 12GB 
                                ROM : 1024GB   
                                Price : 1,29,999/-
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/samsung-galaxy-s20-ultra.jpeg" width="33" alt="">
                        <div class="caption">
                        <h3>Samsung Galaxy S20 Ultra</h3>
                            <p>Battery : 4200mAH
                                Camera : 48MP + 13MP + 8MP | 20MP Front Camera
                                RAM : 12GB 
                                ROM : 128GB   
                                Price : 97,999/-
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/samsung-galaxy-s-9.jpeg" width="50" alt="">
                        <div class="caption">
                        <h3>Samsung Galaxy S9</h3>
                            <p>Battery : 4200mAH
                                Camera : 24MP + 8MP | 20MP Front Camera
                                RAM : 6GB 
                                ROM : 128GB   
                                Price : 30,999/-
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/samsung-galaxy-a51.jpeg" width="40" alt="">
                        <div class="caption">
                        <h3>Samsung Galaxy A51 </h3>
                            <p>Battery : 4200mAH
                                Camera : 12MP + 8MP | 20MP Front Camera
                                RAM : 6GB 
                                ROM : 128GB   
                                Price : 25,250/-
                            </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
        </div>
    <footer>
        <div class="container">
          <center>
             <p>Copyright &copy; the mobile shopee. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
         </center>
         </div>
    </footer>

        <?php include("includes/footer.php"); ?>
    </body>

</html>
