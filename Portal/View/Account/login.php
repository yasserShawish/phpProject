<?php
include '../../../BLL/RedirectTo.php';
session_start();
if (isset($_SESSION['username'])) {
    RedirectTo::page('../Home/index.php');
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Surfhouse Bootstarp Website Template | Login :: w3layouts</title>
        <link href="../../Content/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../../Content/js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <link href="../../Content/css/style.css" rel='stylesheet' type='text/css' />
        <link href="../../Content/css/component.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--webfont-->
        <link href='http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <script src="../../Content/js/jquery.easydropdown.js"></script>
        <!-- Add fancyBox main JS and CSS files -->
        <script src="../../Content/js/jquery.magnific-popup.js" type="text/javascript"></script>
        <link href="../../Content/css/magnific-popup.css" rel="stylesheet" type="text/css">
        <script>
            $(document).ready(function () {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });
            });
        </script>
        <!----details-product-slider--->
    </head>
    <body>
        <div class="single">
            <div class="container">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.php"><img src="../../Content/images/logo.png" alt=""/></a>
                    </div>
                    <div class="header_right">
                        <ul class="social">
                            <li><a href=""> <i class="fb"> </i> </a></li>
                            <li><a href=""><i class="tw"> </i> </a></li>
                            <li><a href=""><i class="utube"> </i> </a></li>
                            <li><a href=""><i class="pin"> </i> </a></li>
                            <li><a href=""><i class="instagram"> </i> </a></li>
                        </ul>
                        <div class="lang_list">
                            <select tabindex="4" class="dropdown">
                                <option value="" class="label" value="">En</option>
                                <option value="1">English</option>
                                <option value="2">French</option>
                                <option value="3">German</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>  
                <div class="apparel_box">
                   <?php include '../Account/loginFragment.php'; ?> 
                    
                </div>
            </div>
        </div>
        <div class="main">
            <div class="content_box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="menu_box">
                                <h3 class="menu_head">Menu</h3>
                                <ul class="nav">
                                    <li><a href="apparel.php">About</a></li>
                                    <li><a href="apparel.php">Apparel</a></li>
                                    <li><a href="apparel.php">Surf Apparel</a></li>
                                    <li><a href="apparel.php">Windsurf</a></li>
                                    <li><a href="apparel.php">Kitesurf</a></li>
                                    <li><a href="apparel.php">Accessories</a></li>
                                    <li><a href="apparel.php">Sale</a></li>
                                    <li><a href="apparel.php">Brands</a></li>
                                    <li><a href="apparel.php">Blog</a></li>
                                    <li><a href="apparel.php">Gadgets</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="dreamcrub">
                                <ul class="breadcrumbs">
                                    <li class="home">
                                        <a href="index.php" title="Go to Home Page">Home</a>&nbsp;
                                        <span>&gt;</span>
                                    </li>
                                    <li class="home">&nbsp;
                                        &nbsp;Account
                                        <span>&gt;</span>&nbsp;
                                    </li>
                                    <li class="women">
                                        Login
                                    </li>
                                </ul>
                                <ul class="previous">
                                    <li><a >Back to Previous Page</a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="account_grid">
                                <div class="col-md-6 login-left">
                                    <h3>NEW CUSTOMERS</h3>
                                    <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                    <a class="acount-btn" href="register.php">Create an Account</a>
                                </div>
                                <div class="col-md-6 login-right">
                                    <h3>REGISTERED CUSTOMERS</h3>
                                    <p>If you have an account with us, please log in.</p>
                                    <form action="../../Controller/LoginController.php" method="post">
                                        <div>
                                            <span>User Name<label>*</label></span>
                                            <input type="text" name="username"> 
                                        </div>
                                        <div>
                                            <span>Password<label>*</label></span>
                                            <input type="password" name="password"> 
                                        </div>

                                        <?php if (isset($_SESSION['LoginMessage']) And ! empty($_SESSION['LoginMessage'])) { ?>
                                            <div class="alert alert-danger">
                                                <?php echo $_SESSION['LoginMessage']; ?>
                                            </div>                                       
                                        <?php } ?>
                                        <a class="forgot" href="#">Forgot Your Password?</a>
                                        <input type="submit" name="submit" value="Login"/>				  
                                    </form>
                                </div>	
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="brands">
                <ul class="brand_icons">
                    <li><img src='../../Content/images/icon1.jpg' class="img-responsive" alt=""/></li>
                    <li><img src='../../Content/images/icon2.jpg' class="img-responsive" alt=""/></li>
                    <li><img src='../../Content/images/icon3.jpg' class="img-responsive" alt=""/></li>
                    <li><img src='../../Content/images/icon4.jpg' class="img-responsive" alt=""/></li>
                    <li><img src='../../Content/images/icon5.jpg' class="img-responsive" alt=""/></li>
                    <li><img src='../../Content/images/icon6.jpg' class="img-responsive" alt=""/></li>
                    <li class="last"><img src='../../Content/images/icon7.jpg' class="img-responsive" alt=""/></li>
                </ul>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="footer-grid">
                    <h3>Category</h3>
                    <ul class="list1">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Eshop</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">New Collections</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-grid">
                    <h3>Our Account</h3>
                    <ul class="list1">
                        <li><a href="#">Your Account</a></li>
                        <li><a href="#">Personal information</a></li>
                        <li><a href="#">Addresses</a></li>
                        <li><a href="#">Discount</a></li>
                        <li><a href="#">Orders history</a></li>
                        <li><a href="#">Addresses</a></li>
                        <li><a href="#">Search Terms</a></li>
                    </ul>
                </div>
                <div class="footer-grid">
                    <h3>Our Support</h3>
                    <ul class="list1">
                        <li><a href="#">Site Map</a></li>
                        <li><a href="#">Search Terms</a></li>
                        <li><a href="#">Advanced Search</a></li>
                        <li><a href="#">Mobile</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Mobile</a></li>
                        <li><a href="#">Addresses</a></li>
                    </ul>
                </div>
                <div class="footer-grid">
                    <h3>Newsletter</h3>
                    <p class="footer_desc">Nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
                    <div class="search_footer">
                        <input type="text" class="text" value="Insert Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Insert Email';
                                }">
                        <input type="submit" value="Submit">
                    </div>
                    <img src="../../Content/images/payment.png" class="img-responsive" alt=""/>
                </div>
                <div class="footer-grid footer-grid_last">
                    <h3>About Us</h3>
                    <p class="footer_desc">Diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,.</p>
                    <p class="f_text">Phone:  &nbsp;&nbsp;&nbsp;00-250-2131</p>
                    <p class="email">Email: &nbsp;&nbsp;&nbsp;<span>info(at)Surfhouse.com</span></p>	
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="copy">
                    <p>&copy; 2014 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
                </div>
            </div>
        </div>
    </body>
</html>		