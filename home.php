<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bora Hotel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

	<!-- Stylesheets -->
	<!-- Dropdown Menu -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Owl Slider -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="css/flaticon.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="admin sign-up.php">Bora.</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a class="active" href="home.html">Home</a></li>
							<li>
								<a href="#" class="fh5co-sub-ddown">Rooms</a>
								<ul class="fh5co-sub-menu">
								 	<li><a href="#">Standard Room</a></li>
								 	<li><a href="#">Deluxe Room</a></li>
									<li>
										<a href="#" class="fh5co-sub-ddown">Suites</a>
										<ul class="fh5co-sub-menu">
											<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Business Suites</a></li>
											<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Premium Suites</a></li>
											<li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Presidential Suites</a></li>
										</ul>
									</li>
									<li><a href="#">Executive Room</a></li> 
								</ul>
							</li>
							<li><a href="services.html">Services</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	</div>
	<!-- end:fh5co-header -->
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/un3.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>Bora Hotel</span></p>
		   						<h2>Reserve Room for Family Vacation</h2>
			   					<p>
			   						<a href="Sign_up.html" class="btn btn-primary btn-lg">Book Now</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/un2.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>Bora Hotel</span></p>
		   						<h2>Make Your Vacation Comfortable</h2>
			   					<p>
			   						<a href="Sign_up.html" class="btn btn-primary btn-lg">Book Now</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/un5.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>Bora Hotel</span></p>
		   						<h2>A Best Place To Enjoy Your Life</h2>
			   					<p>
			   						<a href="Sign_up.html" class="btn btn-primary btn-lg">Book Now</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	
		  	</ul>
	  	</div>
	</aside>
	<div class="wrap">
    <div class="container">
        <div class="row">
            <div id="availability">
                <form action="check_availability.php" method="POST">
                    <div class="a-col">
                        <section>
                            <select class="cs-select cs-skin-border" name="roomType">
                                <option value="" disabled selected>Select Room</option>
                                <option value="Standard Room">Standard Room</option>
                                <option value="Deluxe Room">Deluxe Room</option>
                                <option value="Executive Room">Executive Room</option>
                                <optgroup label="Suites">
                                    <option value="Business Suite">Business Suite</option>
                                    <option value="Premium Suite">Premium Suite</option>
                                    <option value="Presidential Suite">Presidential Suite</option>
                                </optgroup>
                            </select>
                        </section>
                    </div>
                    <div class="a-col alternate">
                        <div class="input-field">
                            <label for="date-start">Check In</label>
                            <input type="text" class="form-control" name="checkInDate" id="date-start" />
                        </div>
                    </div>
                    <div class="a-col alternate">
                        <div class="input-field">
                            <label for="date-end">Check Out</label>
                            <input type="text" class="form-control" name="checkOutDate" id="date-end" />
                        </div>
                    </div>
                    <div class="a-col action">
                        <button type="submit">
                            <span>Check</span>
                            Availability
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
	
	<div id="fh5co-counter-section" class="fh5co-counters">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="20356" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">User Access</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="15501" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Hotels</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="8200" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Transactions</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="8763" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Rating &amp; Review</span>
				</div>
			</div>
		</div>
	</div>

	   
              <!-- Featured Rooms Section-->

	<div id="featured-hotel" class="fh5co-bg-color">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Featured Rooms</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="feature-full-1col">
					<div class="image" style="background-image: url(images/Standard.jpg);">
						<div class="descrip text-center">
							<p><small>For as low as</small><span>$150/night</span></p>
						</div>
					</div>
					<div class="desc">
						<h3>Standard Rooms</h3>
						<p>
							Experience comfort in our Standard Rooms – a haven of relaxation with thoughtful amenities. Book your stay at Bora Hotel  for a delightful retreat. Unwind and enjoy your time in our hotel. Welcome to affordable luxury!
						</p>
						<p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image" style="background-image: url(images/Executive.jpg);">
							<div class="descrip text-center">
								<p><small>For as low as</small><span>$320/night</span></p>
							</div>
						</div>
						<div class="desc">
							<h3>Executive Rooms</h3>
							<p>
								"Experience refined luxury in our Executive Rooms, designed for discerning travelers. Indulge in spacious layouts and modern amenities. Exclusive access to our executive lounge enhances your stay. Book now for an elevated experience at Bora Hotel. 
							 </p>
							<p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image" style="background-image: url(images/Deluxe.jpg);">
							<div class="descrip text-center">
								<p><small>For as low as</small><span>$250/night</span></p>
							</div>
						</div>
						<div class="desc">
							<h3>Deluxe Rooms</h3>
							<p>
								Discover comfort and style in our Deluxe Rooms – a perfect blend of elegance and modern amenities. Your retreat awaits with thoughtfully designed spaces. Book your stay at Bora Hotel for a delightful experience. Unwind in style!</p>
							<p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div id="featured-hotel" class="fh5co-bg-color">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Featured Suites</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="feature-full-1col">
					<div class="image" style="background-image: url(images/business\ suite.jpg);">
						<div class="descrip text-center">
							<p><small>For as low as</small><span>$5000/night</span></p>
						</div>
					</div>
					<div class="desc">
						<h3>Presidential Suites</h3>
						<p>
							Indulge in opulence with our Presidential Suite – a sanctuary of luxury and sophistication. Immerse yourself in unparalleled comfort and personalized service. Elevate your stay at Bora Hotel to extraordinary heights. Welcome to a world of refined indulgence. </p>
						<p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image" style="background-image: url(images/premium\ suite.jpg);">
							<div class="descrip text-center">
								<p><small>For as low as</small><span>$600/night</span></p>
							</div>
						</div>
						<div class="desc">
							<h3>Premium Suites</h3>
							<p>
								Discover luxury in our Premium Suites – an oasis of elegance and comfort. Unwind in style with exclusive amenities at Bora Hotel. Elevate your stay for a memorable experience. Welcome to a world of refined indulgence.</p>
							<p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image" style="background-image: url(images/presidential\ suite.jpg);">
							<div class="descrip text-center">
								<p><small>For as low as</small><span>$1000/night</span></p>
							</div>
						</div>
						<div class="desc">
							<h3>Business Suites</h3>
							<p>
								Experience productivity and luxury in our Business Suites – where modern amenities meet sophisticated comfort. Elevate your stay with tailored services at Bora Hotel. Unwind after a day of work in style. Welcome to a seamless blend of business and leisure. </p>
							<p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
    
           <!-- Facilities section -->

	<div id="hotel-facilities">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Hotel Facilities</h2>
					</div>
				</div>
			</div>

			<div id="tabs">
				<nav class="tabs-nav">
					<a href="#" class="active" data-tab="tab1">
						<i class="flaticon-restaurant icon"></i>
						<span>Restaurant</span>
					</a>
					<a href="#" data-tab="tab2">
						<i class="flaticon-cup icon"></i>
						<span>Bar</span>
					</a>
					<a href="#" data-tab="tab3">
					
						<i class="flaticon-car icon"></i>
						<span>Pick-up</span>
					</a>
					<a href="#" data-tab="tab4">
						
						<i class="flaticon-swimming icon"></i>
						<span>Swimming Pool</span>
					</a>
					<a href="#" data-tab="tab5">
						
						<i class="flaticon-massage icon"></i>
						<span>Spa</span>
					</a>
					<a href="#" data-tab="tab6">
						
						<i class="flaticon-bicycle icon"></i>
						<span>Gym</span>
					</a>
				</nav>
				<div class="tab-content-container">
					<div class="tab-content active show" data-tab-content="tab1">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="images/restaurant.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Restaurant</h3>
									<p>Delight your palate at Bora's restaurant. Indulge in exquisite flavors and culinary artistry. Our menu, a symphony of taste and innovation, promises a dining experience that transcends the ordinary. Welcome to a world where every dish tells a story, and every bite is a celebration of exceptional cuisine.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 12:00 AM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab2">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="images/bar.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Bars</h3>
								    <p>
										Immerse yourself in the chic ambiance of Bora's bar. Sip on expertly crafted cocktails and indulge in an atmosphere that exudes sophistication. Our mixologists, true artisans of libation, invite you to savor the perfect blend of flavors. Whether you're unwinding with colleagues or celebrating with friends, our bar promises an experience where every pour is a masterpiece and every moment is a toast to refined indulgence.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 12:00 AM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab3">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="images/pick-up3.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Pick Up</h3>
									<p>
										Experience seamless travel with Bora's pick-up service. From the moment you arrive, our reliable and comfortable transportation ensures a stress-free journey. Sit back and relax as we elevate your arrival experience. Welcome to a stay where convenience meets comfort, right from the very first moment.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 11:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab4">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="images/pool.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Swimming Pool</h3>
									<p>
										Dive into tranquility at Bora's swimming pool. Our inviting oasis is a sanctuary of relaxation, surrounded by serene landscapes. Whether you're seeking a refreshing swim or a peaceful moment by the water, our pool is a haven of calm. Immerse yourself in the perfect blend of luxury and leisure, where every moment is a retreat into serenity.
									</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab5">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="images/spa.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Spa</h3>
									<p>
										Embark on a journey of rejuvenation at Bora's spa. Our sanctuary of tranquility invites you to unwind and revive your senses. Indulge in expertly crafted treatments that blend relaxation and revitalization. From skilled therapists to serene surroundings, every element is tailored to ensure a spa experience like no other. Welcome to a haven where relaxation meets luxury, and every visit is a celebration of well-being.
									</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab6">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="images/Gym.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Gym</h3>
									<p>
										Elevate your fitness journey at Bora's gym. Immerse yourself in a world of wellness and strength. Our state-of-the-art facilities and expert trainers ensure a dynamic and invigorating workout experience. Whether you're a fitness enthusiast or just starting, our gym is designed to meet your every need. Welcome to a space where dedication meets results, and every workout is a step towards a healthier you.
									</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	   <!--Testimonies section -->

	<div id="testimonial">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Happy Customer Says...</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="testimony">
						<blockquote>
							&ldquo;If you’re looking for a top quality hotel look no further. We were upgraded free of charge to the Premium Suite, thanks so much&rdquo;
						</blockquote>
						<p class="author"><cite>Gathure</cite></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testimony">
						<blockquote>
							&ldquo;Me and my wife had a delightful weekend get away here, the staff were so friendly and attentive. Highly Recommended&rdquo;
						</blockquote>
						<p class="author"><cite>Chege</cite></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testimony">
						<blockquote>
							&ldquo;If you’re looking for a top quality hotel look no further. We were upgraded free of charge to the Premium Suite, thanks so much&rdquo;
						</blockquote>
						<p class="author"><cite>Dennis</cite></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	      

         <!--Footer section --> 

	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p><small>&copy; 2024 Dennis Chege. <br> All Rights Reserved. <br>
						Designed by <a href="#" target="_blank">Dennis Chege</a> <br> Demo Images: <a href="#" target="_blank">Unsplash & Pinterest</a></small></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<h3>Company</h3>
							<ul class="link">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Customer Care</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3>Our Facilities</h3>
							<ul class="link">
								<li><a href="#">Resturant</a></li>
								<li><a href="#">Bars</a></li>
								<li><a href="#">Pick-up</a></li>
								<li><a href="#">Swimming Pool</a></li>
								<li><a href="#">Spa</a></li>
								<li><a href="#">Gym</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<h3>Subscribe</h3>
							<p>Stay up to date with our latest offers, promotions, and news.</p>
							<form action="subscribe.php" id="form-subscribe">
								<div class="form-field">
									<input type="email" placeholder="Email Address" id="email">
									<input type="submit" id="submit" value="Send">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<ul class="social-icons">
						<li>
							<a href="#"><i class="icon-twitter-with-circle"></i></a>
							<a href="#"><i class="icon-facebook-with-circle"></i></a>
							<a href="#"><i class="icon-instagram-with-circle"></i></a>
							<a href="#"><i class="icon-linkedin-with-circle"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->
	
	<!-- Javascripts -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown Menu -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Slider -->
	<!-- // <script src="js/owl.carousel.min.js"></script> -->
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<script src="js/custom.js"></script>

</body>
</html>