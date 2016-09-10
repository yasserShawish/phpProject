<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>   
        <title>E-Commerce</title>
        <link href="../../Content/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../../Content/js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <link href="../../Content/css/style.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--webfont-->
        <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
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

        <?php if (!isset($_SESSION['username'])) { ?>
            <style>

             div .banner_right{margin-top: 0em;}

            </style>
            <?php
        }
        ?>

    </head>
    <body>
        <div class="header">	
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
                <div class="index-banner">
                    <div class="wmuSlider example1">
                        <div class="wmuSliderWrapper">
                            <article style="position: absolute; width: 100%; opacity: 0;"> 
                                <div class="banner-wrap">
                                    <div class="bannertop_box">			   		 		

                                        <?php include '../Account/loginFragment.php'; ?>                                         

                                        <div class="welcome_box">
                                            <!--<h2>Welcome to Surfhouse</h2>-->
                                            <p>The onliy online store you will ever need for all your windsurfing and kitesurfing and SUP nedds</p>
                                        </div>
                                    </div>
                                    <div class="banner_right" >
                                        <h1>Feugait<br> 2014</h1>
                                        <p>Super easy going freeride boards based on the X-Cite Ride shape concept with additional cpntrol and super easy jibing.</p>
                                        <a href="#" class="banner_btn">Buy Now</a>
                                    </div>
                                    <div class='clearfix'></div>
                                </div>
                            </article>
                            <article style="position: relative; width: 100%; opacity: 1;"> 
                                <div class="banner-wrap">
                                    <div class="bannertop_box">
                                        <?php include '../Account/loginFragment.php'; ?>
                                        <div class="welcome_box">
                                            <h2>Welcome to Surfhouse</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euism</p>
                                        </div>
                                    </div>
                                    <div class="banner_right">
                                        <h1>Mutation<br> 2014</h1>
                                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                                        <a href="#" class="banner_btn">Buy Now</a>
                                    </div>
                                    <div class='clearfix'></div>
                                </div>
                            </article>
                            <article style="position: absolute; width: 100%; opacity: 0;">
                                <div class="banner-wrap">
                                    <div class="bannertop_box">
                                        <?php include '../Account/loginFragment.php'; ?>
                                        <div class="welcome_box">
                                            <h2>Welcome to Surfhouse</h2>
                                            <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                        </div>
                                    </div>
                                    <div class="banner_right">
                                        <h1>Jp Funride<br> 2014</h1>
                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera.</p>
                                        <a href="#" class="banner_btn">Buy Now</a>
                                    </div>
                                    <div class='clearfix'></div>
                                </div>
                            </article>
                        </div>
                        <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a>
                        <ul class="wmuSliderPagination">
                            <li><a href="#" class="">0</a></li>
                            <li><a href="#" class="">1</a></li>
                            <li><a href="#" class="wmuActive">2</a></li>
                        </ul>
                    </div>
                    <script src="../../Content/js/jquery.wmuSlider.js"></script> 
                    <script>
              $('.example1').wmuSlider();
                    </script> 	           	      
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
                            <div class="side_banner">
                                <div class="banner_img"><img src="../../Content/images/pic9.jpg" class="img-responsive" alt=""/></div>
                                <div class="banner_holder">
                                    <h3>Now <br> is <br> Open!</h3>
                                </div>
                            </div>
                            <div class="tags">
                                <h4 class="tag_head">Tags Widget</h4>
                                <ul class="tags_links">
                                    <li><a href="#">Kitesurf</a></li>
                                    <li><a href="#">Super</a></li>
                                    <li><a href="#">Duper</a></li>
                                    <li><a href="#">Theme</a></li>
                                    <li><a href="#">Men</a></li>
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Equipment</a></li>
                                    <li><a href="#">Best</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Men</a></li>
                                    <li><a href="#">Apparel</a></li>
                                    <li><a href="#">Super</a></li>
                                    <li><a href="#">Duper</a></li>
                                    <li><a href="#">Theme</a></li>
                                    <li><a href="#">Responsiv</a></li>
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Equipment</a></li>
                                </ul>
                                <a href="#" class="link1">View all tags</a>
                            </div>
                            <div class="tags">
                                <h4 class="tag_head">Articles Experts</h4>
                                <ul class="article_links">
                                    <li><a href="#">Eleifend option congue nihil</a></li>
                                    <li><a href="#">Investigationes demonst</a></li>
                                    <li><a href="#">Qui sequitur mutationem</a></li>
                                    <li><a href="#">videntur parum clar sollemnes</a></li>
                                    <li><a href="#">ullamcorper suscipit lobortis</a></li>
                                    <li><a href="#">commodo consequat. Duis autem</a></li>
                                    <li><a href="#">Investigationes demonst</a></li>
                                    <li><a href="#">ullamcorper suscipit lobortis</a></li>
                                    <li><a href="#">Qui sequitur mutationem</a></li>
                                    <li><a href="#">videntur parum clar sollemnes</a></li>
                                    <li><a href="#">ullamcorper suscipit lobortis</a></li>
                                </ul>
                                <a href="#" class="link1">View all</a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h3 class="m_1">New Products</h3>
                            <div class="content_grid">
                                <div class="col_1_of_3 span_1_of_3"> 
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
                                                            <p class="title">Lorem Ipsum 2014</p>
                                                        </div>
                                                        <div class="price">$99.00</div>
                                                        <div class="clearfix"></div>
                                                    </div>		
                                                </div>
                                                <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col_1_of_3 span_1_of_3"> 
                                    <div class="view view-first">
                                        <a href="single.php">
                                            <div class="inner_content clearfix">
                                                <div class="product_image">
                                                    <img src="../../Content/images/pic2.jpg" class="img-responsive" alt=""/>
                                                    <div class="mask">
                                                        <div class="info">Quick View</div>
                                                    </div>
                                                    <div class="product_container">
                                                        <div class="cart-left">
                                                            <p class="title">Lorem Ipsum 2014</p>
                                                        </div>
                                                        <div class="price">$99.00</div>
                                                        <div class="clearfix"></div>
                                                    </div>		
                                                </div>
                                                <div class="sale-box1"><span class="on_sale1 title_shop">New</span></div>	
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col_1_of_3 span_1_of_3"> 
                                    <div class="view view-first">
                                        <a href="single.php">
                                            <div class="inner_content clearfix">
                                                <div class="product_image">
                                                    <img src="../../Content/images/pic3.jpg" class="img-responsive" alt=""/>
                                                    <div class="mask">
                                                        <div class="info">Quick View</div>
                                                    </div>
                                                    <div class="product_container">
                                                        <div class="cart-left">
                                                            <p class="title">Lorem Ipsum 2014</p>
                                                        </div>
                                                        <div class="price">$99.00</div>
                                                        <div class="clearfix"></div>
                                                    </div>		
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="content_grid">
                                <div class="col_1_of_3 span_1_of_3"> 
                                    <div class="view view-first">
                                        <a href="single.php">
                                            <div class="inner_content clearfix">
                                                <div class="product_image">
                                                    <img src="../../Content/images/pic4.jpg" class="img-responsive" alt=""/>
                                                    <div class="mask">
                                                        <div class="info">Quick View</div>
                                                    </div>
                                                    <div class="product_container">
                                                        <div class="cart-left">
                                                            <p class="title">Lorem Ipsum 2014</p>
                                                        </div>
                                                        <div class="price">$99.00</div>
                                                        <div class="clearfix"></div>
                                                    </div>		
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col_1_of_3 span_1_of_3"> 
                                    <div class="view view-first">
                                        <a href="single.php">
                                            <div class="inner_content clearfix">
                                                <div class="product_image">
                                                    <img src="../../Content/images/pic5.jpg" class="img-responsive" alt=""/>
                                                    <div class="mask">
                                                        <div class="info">Quick View</div>
                                                    </div>
                                                    <div class="product_container">
                                                        <div class="cart-left">
                                                            <p class="title">Lorem Ipsum 2014</p>
                                                        </div>
                                                        <div class="price">$99.00</div>
                                                        <div class="clearfix"></div>
                                                    </div>		
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col_1_of_3 span_1_of_3"> 
                                    <div class="view view-first">
                                        <a href="single.php">
                                            <div class="inner_content clearfix">
                                                <div class="product_image">
                                                    <img src="../../Content/images/pic6.jpg" class="img-responsive" alt=""/>
                                                    <div class="mask">
                                                        <div class="info">Quick View</div>
                                                    </div>
                                                    <div class="product_container">
                                                        <div class="cart-left">
                                                            <p class="title">Lorem Ipsum 2014</p>
                                                        </div>
                                                        <div class="price">$99.00</div>
                                                        <div class="clearfix"></div>
                                                    </div>		
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <h3 class="m_2">Top Products</h3>
                            <div class="content_grid">
                                <div class="col_1_of_3 span_1_of_3"> 
                                    <div class="view view-first">
                                        <a href="single.php">
                                            <div class="inner_content clearfix">
                                                <div class="product_image">
                                                    <img src="../../Content/images/pic7.jpg" class="img-responsive" alt=""/>
                                                    <div class="mask">
                                                        <div class="info">Quick View</div>
                                                    </div>
                                                    <div class="product_container">
                                                        <div class="cart-left">
                                                            <p class="title">Lorem Ipsum 2014</p>
                                                        </div>
                                                        <div class="price">$99.00</div>
                                                        <div class="clearfix"></div>
                                                    </div>		
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col_1_of_3 span_1_of_3"> 
                                    <div class="view view-first">
                                        <a href="single.php">
                                            <div class="inner_content clearfix">
                                                <div class="product_image">
                                                    <img src="../../Content/images/pic8.jpg" class="img-responsive" alt=""/>
                                                    <div class="mask">
                                                        <div class="info">Quick View</div>
                                                    </div>
                                                    <div class="product_container">
                                                        <div class="cart-left">
                                                            <p class="title">Lorem Ipsum 2014</p>
                                                        </div>
                                                        <div class="price">$99.00</div>
                                                        <div class="clearfix"></div>
                                                    </div>		
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col_1_of_3 span_1_of_3"> 
                                    <div class="view view-first">
                                        <a href="single.php">
                                            <div class="inner_content clearfix">
                                                <div class="product_image">
                                                    <img src="../../Content/images/pic13.jpg" class="img-responsive" alt=""/>
                                                    <div class="mask">
                                                        <div class="info">Quick View</div>
                                                    </div>
                                                    <div class="product_container">
                                                        <div class="cart-left">
                                                            <p class="title">Lorem Ipsum 2014</p>
                                                        </div>
                                                        <div class="price">$99.00</div>
                                                        <div class="clearfix"></div>
                                                    </div>		
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <h3 class="m_2">Sale Products</h3>
                            <div class="content_grid">
                                <div class="col_1_of_3 span_1_of_3"> 
                                    <div class="view view-first">
                                        <a href="single.php">
                                            <div class="inner_content clearfix">
                                                <div class="product_image">
                                                    <img src="../../Content/images/pic10.jpg" class="img-responsive" alt=""/>
                                                    <div class="mask">
                                                        <div class="info">Quick View</div>
                                                    </div>
                                                    <div class="product_container">
                                                        <div class="cart-left">
                                                            <p class="title">Lorem Ipsum 2014</p>
                                                        </div>
                                                        <div class="price">$99.00</div>
                                                        <div class="clearfix"></div>
                                                    </div>		
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col_1_of_3 span_1_of_3"> 
                                    <div class="view view-first">
                                        <a href="single.php">
                                            <div class="inner_content clearfix">
                                                <div class="product_image">
                                                    <img src="../../Content/images/pic11.jpg" class="img-responsive" alt=""/>
                                                    <div class="mask">
                                                        <div class="info">Quick View</div>
                                                    </div>
                                                    <div class="product_container">
                                                        <div class="cart-left">
                                                            <p class="title">Lorem Ipsum 2014</p>
                                                        </div>
                                                        <div class="price">$99.00</div>
                                                        <div class="clearfix"></div>
                                                    </div>		
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col_1_of_3 span_1_of_3"> 
                                    <div class="view view-first">
                                        <a href="single.php">
                                            <div class="inner_content clearfix">
                                                <div class="product_image">
                                                    <img src="../../Content/images/pic12.jpg" class="img-responsive" alt=""/>
                                                    <div class="mask">
                                                        <div class="info">Quick View</div>
                                                    </div>
                                                    <div class="product_container">
                                                        <div class="cart-left">
                                                            <p class="title">Lorem Ipsum 2014</p>
                                                        </div>
                                                        <div class="price">$99.00</div>
                                                        <div class="clearfix"></div>
                                                    </div>		
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
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
                                              this.value = 'Insert Email';}">
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