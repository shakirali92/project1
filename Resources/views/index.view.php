<?= include_once(APP_DIR.'/Resources/views/partials/head.php')?>
	<div class="banner">
	<!-- start slider -->
       <div id="fwslider">
         <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
               <img src="images/slider1.jpg" class="img-responsive" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h1 class="title">Run Over<br>Everything</h1>
                        <!-- /Text title -->
                        <div class="button"><a href="#">See Details</a></div>
                    </div>
                </div>
               <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
               <img src="images/slider2.jpg" class="img-responsive" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h1 class="title">Run Over<br>Everything</h1>
                       	<div class="button"><a href="#">See Details</a></div>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
       </div>
       <!--/slider -->
      </div>
	  <div class="main">
		<div class="content-top">
			<h2>COMPANY NAME</h2>
			<p>hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
			<div class="close_but"><i class="close1"> </i></div>
				<ul id="flexiselDemo3">
				<li><a href="/shop"><img src="images/board1.jpg"/></a></li>
				<li><a href="/shop"><img src="images/board2.jpg" /></a></li>
				<li><a href="/shop"><img src="images/board3.jpg" /></a></li>
				<li><a href="/shop"><img src="images/board4.jpg" /></a></li>
				<li><a href="/shop"><img src="images/board5.jpg" /></a></li>
			</ul>
		<h3>SnowBoard Extreme Series</h3>
			<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
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
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
	<div class="content-bottom">
		<div class="container">
			<div class="row content_bottom-text">
			  <div class="col-md-7">
				<h3>Company Name<br>sologon	</h3>
				<p class="m_1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio.</p>
				<p class="m_2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio.</p>
			  </div>
			</div>
		</div>
	</div>
	<div class="container">
	<div class="features">
			<h3 class="m_3">OUR PRODUCTS</h3>
			<div class="close_but"><i class="close1"> </i></div>
				<div class="row">
					<div class="container">
						<div class="row shop_box-top">
							<div class="col-md-3 shop_box"><a href="single.html">
								<img src="images/pic5.jpg" class="img-responsive" alt=""/>
								<span class="new-box">
									<span class="new-label">New</span>
								</span>
								<span class="sale-box">
									<span class="sale-label">Sale!</span>
								</span>
								<div class="shop_desc">
									<h3><a href="#">aliquam volutp</a></h3>
									<p>Lorem ipsum consectetuer adipiscing </p>
									<span class="reducedfrom">$66.00</span>
									<span class="actual">$12.00</span><br>
									<ul class="buttons">
										<li class="cart"><a href="#">Add To Cart</a></li>
										<li class="shop_btn"><a href="#">Read More</a></li>
										<div class="clear"> </div>
									</ul>
								</div>
							</a></div>
							<div class="col-md-3 shop_box"><a href="single.html">
								<img src="images/pic6.jpg" class="img-responsive" alt=""/>
								<span class="new-box">
									<span class="new-label">New</span>
								</span>
								<div class="shop_desc">
									<h3><a href="#">aliquam volutp</a></h3>
									<p>Lorem ipsum consectetuer adipiscing </p>
									<span class="actual">$12.00</span><br>
									<ul class="buttons">
										<li class="cart"><a href="#">Add To Cart</a></li>
										<li class="shop_btn"><a href="#">Read More</a></li>
										<div class="clear"> </div>
									</ul>
								</div>
							</a></div>
							<div class="col-md-3 shop_box"><a href="single.html">
								<img src="images/pic7.jpg" class="img-responsive" alt=""/>
								<span class="new-box">
									<span class="new-label">New</span>
								</span>
								<span class="sale-box">
									<span class="sale-label">Sale!</span>
								</span>
								<div class="shop_desc">
									<h3><a href="#">aliquam volutp</a></h3>
									<p>Lorem ipsum consectetuer adipiscing </p>
									<span class="reducedfrom">$66.00</span>
									<span class="actual">$12.00</span><br>
									<ul class="buttons">
										<li class="cart"><a href="#">Add To Cart</a></li>
										<li class="shop_btn"><a href="#">Read More</a></li>
										<div class="clear"> </div>
									</ul>
								</div>
							</a></div>
							<div class="col-md-3 shop_box"><a href="single.html">
								<img src="images/pic7.jpg" class="img-responsive" alt=""/>
								<span class="new-box">
									<span class="new-label">New</span>
								</span>
								<span class="sale-box">
									<span class="sale-label">Sale!</span>
								</span>
								<div class="shop_desc">
									<h3><a href="#">aliquam volutp</a></h3>
									<p>Lorem ipsum consectetuer adipiscing </p>
									<span class="reducedfrom">$66.00</span>
									<span class="actual">$12.00</span><br>
									<ul class="buttons">
										<li class="cart"><a href="#">Add To Cart</a></li>
										<li class="shop_btn"><a href="#">Read More</a></li>
										<div class="clear"> </div>
									</ul>
								</div>
							</a></div>
							<div class="row"><a calss="btn btn-primary" href="/shop">View All</a><div> 
						</div>
					</div>	
				</div>	
			</div>
		</div>
	</div>
</div>
<?= include_once(APP_DIR.'/Resources/views/partials/footer.php')?>