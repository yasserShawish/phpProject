<!DOCTYPE HTML>
<html>
<head>
<title>Surfhouse Bootstarp Website Template | Single :: w3layouts</title>
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
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script src="../../Content/js/jquery.easydropdown.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script src="../../Content/js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="../../Content/css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
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
<!-- Include the Etalage files -->
<link rel="stylesheet" href="../../Content/css/etalage.css">
<script src="../../Content/js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<!----//details-product-slider--->	
<script src="../../Content/js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>	
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
			   	    <div class="category">
			   	    	<h3 class="menu_head">Category Options</h3>
			   	    	<ul class="category_nav">
					   	  	<li><a href="#">Men</a></li>
					   	  	<li><a href="#">Women</a></li>
					   	  	<li><a href="#">Kids</a></li>
					   	  	<li><a href="#">Wetsuits</a></li>
					   	  	<li><a href="#">Outerwear</a></li>
					   	</ul>
			   	    </div>
			   	    <div class="category">
			   	    	<h3 class="menu_head">Brand Options</h3>
			   	    	<ul class="category_nav">
					   	  	<li><a href="#">Billabong</a></li>
					   	  	<li><a href="#">Element</a></li>
					   	  	<li><a href="#">o'neill</a></li>
					   	  	<li><a href="#">Oakley</a></li>
					   	  	<li><a href="#">Reef</a></li>
					   	  	<li><a href="#">Quiksilver</a></li>
					   	  	<li><a href="#">Ripcurl</a></li>
					   	  	<li><a href="#">Jackss</a></li>
					   	</ul>
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
				     <div class="side_banner">
					   <div class="banner_img"><img src="../../Content/images/pic9.jpg" class="img-responsive" alt=""/></div>
					   <div class="banner_holder">
						  <h3>Now <br> is <br> Open!</h3>
					   </div>
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
                        Apparel&nbsp;
                        <span>&gt;</span>&nbsp;
                    </li>
                    <li class="home">&nbsp;
                        &nbsp;Women
                        <span>&gt;</span>&nbsp;
                    </li>
                    <li class="women">
                       Peekey Cropped
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="singel_right">
			     <div class="labout span_1_of_a1">
				<!-- start product_slider -->
				     <ul id="etalage">
							<li>
								<a href="optionallink.php">
									<img class="etalage_thumb_image" src="../../Content/images/s1.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="../../Content/images/smal.jpg" class="img-responsive" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="../../Content/images/s2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="../../Content/images/smal1.jpg" class="img-responsive" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="../../Content/images/s3.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="../../Content/images/smal2.jpg" class="img-responsive" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="../../Content/images/s3.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="../../Content/images/smal3.jpg" class="img-responsive" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="../../Content/images/s1.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="../../Content/images/smal.jpg" class="img-responsive" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="../../Content/images/s2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="../../Content/images/smal1.jpg" class="img-responsive" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="../../Content/images/s3.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="../../Content/images/smal2.jpg" class="img-responsive" />
							</li>
						</ul>
					<!-- end product_slider -->
			  </div>
			  <div class="cont1 span_2_of_a1">
				<h1>Peeky Cropped</h1>
				<ul class="rating">
				   <li><a class="product-rate" href="#"> <label> </label></a> <span> </span></li>
				   <li><a href="#">1 Review(s) Add Review</a></li>
				   <div class="clearfix"></div>
			    </ul>
			    <div class="price_single">
				  <span class="reducedfrom">$140.00</span>
				  <span class="actual">$120.00</span><a href="#">click for offer</a>
				</div>
				<h2 class="quick">Quick Overview:</h2>
				<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
			    <ul class="size">
					<h3>Size</h3>
					<li><a href="#">25</a></li>
					<li><a href="#">26</a></li>
					<li><a href="#">27</a></li>
					<li><a href="#">28</a></li>
					<li><a href="#">29</a></li>
					<li><a href="#">30</a></li>
					<li><a href="#">31</a></li>
					<li><a href="#">32</a></li>
					<li><a href="#">33</a></li>
				</ul>
				<ul class="size">
					<h3>Length</h3>
					<li><a href="#">32</a></li>
					<li><a href="#">34</a></li>
				</ul>
				<ul class="product-qty">
				   <span>Quantity:</span>
				   <select>
					 <option>1</option>
					 <option>2</option>
					 <option>3</option>
					 <option>4</option>
					 <option>5</option>
					 <option>6</option>
				   </select>
			    </ul>
			    <div class="btn_form">
				   <form>
					 <input type="submit" value="Add to Cart" title="">
				  </form>
				</div>
			</div>
			<div class="clearfix"></div>
		   </div>
		   <div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Product Description</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Additional Information</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Reviews</span></li>
							  <div class="clear"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="facts">
									  <ul class="tab_list">
									  	<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</a></li>
									  	<li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatione</a></li>
									  	<li><a href="#">claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica</a></li>
									  	<li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</a></li>
									  </ul>           
							        </div>
							     </div>	
							      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">
									  <ul class="tab_list">
									    <li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatione</a></li>
									  	<li><a href="#">claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica</a></li>
									  	<li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</a></li>
									  </ul>           
							        </div>
							     </div>	
							      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<ul class="tab_list">
									  	<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</a></li>
									  	<li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatione</a></li>
									  	<li><a href="#">claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores leg</a></li>
									  	<li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</a></li>
									  </ul>      
							     </div>	
							 </div>
					      </div>
					 </div>	
					 <h3 class="like">You Might Also Like</h3>        			
				     <ul id="flexiselDemo3">
						<li><img src="../../Content/images/pic11.jpg" /><div class="grid-flex"><a href="#">Syenergy 2mm</a><p>Rs 850</p></div></li>
						<li><img src="../../Content/images/pic10.jpg" /><div class="grid-flex"><a href="#">Surf Yoke</a><p>Rs 1050</p></div></li>
						<li><img src="../../Content/images/pic9.jpg" /><div class="grid-flex"><a href="#">Salty Daiz</a><p>Rs 990</p></div></li>
						<li><img src="../../Content/images/pic8.jpg" /><div class="grid-flex"><a href="#">Cheeky Zane</a><p>Rs 850</p></div></li>
						<li><img src="../../Content/images/pic7.jpg" /><div class="grid-flex"><a href="#">Synergy</a><p>Rs 870</p></div></li>
				     </ul>
				    <script type="text/javascript">
					 $(window).load(function() {
						$("#flexiselDemo3").flexisel({
							visibleItems: 3,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
					    	responsiveBreakpoints: { 
					    		portrait: { 
					    			changePoint:480,
					    			visibleItems: 1
					    		}, 
					    		landscape: { 
					    			changePoint:640,
					    			visibleItems: 2
					    		},
					    		tablet: { 
					    			changePoint:768,
					    			visibleItems: 3
					    		}
					    	}
					    });
					    
					});
				   </script>
				   <script type="text/javascript" src="../../Content/js/jquery.flexisel.js"></script>
				   <h3 class="recent">Recently Viewed</h3>
				   <ul id="flexiselDemo1">
						<li><img src="../../Content/images/pic1.jpg" /><div class="grid-flex"><a href="#">Syenergy 2mm</a><p>Rs 850</p></div></li>
						<li><img src="../../Content/images/pic2.jpg" /><div class="grid-flex"><a href="#">Surf Yoke</a><p>Rs 1050</p></div></li>
						<li><img src="../../Content/images/pic3.jpg" /><div class="grid-flex"><a href="#">Salty Daiz</a><p>Rs 990</p></div></li>
						<li><img src="../../Content/images/pic4.jpg" /><div class="grid-flex"><a href="#">Cheeky Zane</a><p>Rs 850</p></div></li>
						<li><img src="../../Content/images/pic5.jpg" /><div class="grid-flex"><a href="#">Synergy</a><p>Rs 870</p></div></li>
				     </ul>
				    <script type="text/javascript">
					 $(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 3,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
					    	responsiveBreakpoints: { 
					    		portrait: { 
					    			changePoint:480,
					    			visibleItems: 1
					    		}, 
					    		landscape: { 
					    			changePoint:640,
					    			visibleItems: 2
					    		},
					    		tablet: { 
					    			changePoint:768,
					    			visibleItems: 3
					    		}
					    	}
					    });
					    
					});
				   </script>
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
			          <input type="text" class="text" value="Insert Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
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