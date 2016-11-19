<?php
require("../../Model/PostModel.php");
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Surfhouse Bootstarp Website Template | Register :: w3layouts</title>
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
            <div class="container">
                    <?php
                        if(isset($_SESSION['searchResult']) && !empty($_SESSION['searchResult'])){
                            $variableSearch = $_SESSION['searchResult'];
                                echo '<h3 class="m_1">Search Result</h3>';
                            foreach ($variableSearch as $key => $value){
                                  echo '<div class="col_1_of_3 span_1_of_4"> 
                                    <div class="view view-first">
                                        <a href="../Transaction/single.php">
                                            <div class="inner_content clearfix">
                                                <div class="product_image">
                                                    <img src="../../Content/images/pic1.jpg" class="img-responsive" alt=""/>
                                                    <div class="mask">
                                                        <div class="info">Quick View</div>
                                                    </div>
                                                    <div class="product_container">
                                                        <div class="cart-left">
                                                        <p class="title"><p>'.$value->title.'</p></div>
                                                        <div class="price">'.$value->price.'</div></br>
                                                        <div style="float:left;">'.$value->discripstion.'</div>
                                                        <div class="clearfix"></div>
                                                    </div>		
                                                </div>
                                                <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                                            </div>
                                        </a>
                                    </div></div>';
                            }
                        }else{
                            echo '<br/>';
                            echo '<h2 style="color:red">there is nothing in our data</h2>';
                        }
                        ?>
                <div class="register">
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
                        <input type="submit" value="submit" >
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