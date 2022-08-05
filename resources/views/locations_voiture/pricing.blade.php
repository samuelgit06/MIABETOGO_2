<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MIABETOGO</title>

    <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/css/animate.css">
    
    <link rel="stylesheet" href="css/css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/css/magnific-popup.css">

    <link rel="stylesheet" href="css/css/aos.css">

    <link rel="stylesheet" href="css/css/ionicons.min.css">

    <link rel="stylesheet" href="css/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/css/flaticon.css">
    <link rel="stylesheet" href="css/css/icomoon.css">
    <link rel="stylesheet" href="css/css/style.css">
  </head>
  <body>
	<header class="w3l-header-nav">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h4>MIABETOGO</h4>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
	
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="{{ URL:: to ('/index')}}">Home</a>
						</li>-->
						<li class="nav-item @@about__active">
							<a class="nav-link" href="{{ URL:: to ('/about')}}">About</a>
						</li>
						<li class="nav-item @@services__active">
							<a class="nav-link" href="{{ URL:: to ('/services')}}">Services</a>
						</li>
						<li class="nav-item @@contact__active">
							<a class="nav-link"href="{{ URL:: to ('/contact')}}">Contact</a>
						</li>
					</ul>
					<a href="{{ URL:: to ('/login')}}" class="ml-3 book btn btn-secondary btn-style">conncter vous</a>
					<a href="#booking" class="ml-3 book btn btn-secondary btn-style">ajouter un etablissement</a>
				</div>
			</div>
		</nav>
		<!--//nav-->
	</header>
    
  <!--  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pricing <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Pricing</h1>
          </div>
        </div>
      </div>
    </section>-->

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="car-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th class="bg-primary heading">Per Hour Rate</th>
						        <th class="bg-dark heading">Per Day Rate</th>
						        <th class="bg-black heading">Leasing</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(images/car-1.jpg);"></div></td>
						        <td class="product-name">
						        	<h3>Cheverolet SUV Car</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span>
							        		<span class="per">/per hour</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
						        	</div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per day</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
						        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per month</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						      </tr><!-- END TR-->

						      <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(images/car-2.jpg);"></div></td>
						        <td class="product-name">
						        	<h3>Cheverolet SUV Car</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span>
							        		<span class="per">/per hour</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per day</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per month</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						      </tr><!-- END TR-->

						      <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(images/car-3.jpg);"></div></td>
						        <td class="product-name">
						        	<h3>Cheverolet SUV Car</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span>
							        		<span class="per">/per hour</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per day</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per month</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						      </tr><!-- END TR-->

						      <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(images/car-4.jpg);"></div></td>
						        <td class="product-name">
						        	<h3>Cheverolet SUV Car</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span>
							        		<span class="per">/per hour</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per day</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per month</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						      </tr><!-- END TR-->


						      <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(images/car-5.jpg);"></div></td>
						        <td class="product-name">
						        	<h3>Cheverolet SUV Car</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span>
							        		<span class="per">/per hour</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per day</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per month</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						      </tr><!-- END TR-->


						      <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(images/car-6.jpg);"></div></td>
						        <td class="product-name">
						        	<h3>Cheverolet SUV Car</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span>
							        		<span class="per">/per hour</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per day</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per month</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						      </tr><!-- END TR-->
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
			</div>
		</section>


		<section class="w3l-footer-29-main">
			<div class="footer-29 py-5">
			  <div class="container py-lg-4">
				<div class="row footer-top-29">
				  <div class="col-lg-3 col-md-6 col-sm-8 footer-list-29 footer-1">
					<h6 class="footer-title-29">Contact Us</h6>
					<ul>
					  <li>
						<p><span class="fa fa-map-marker"></span> Luxury hotel, #32841 block, #221DRS Rental & Paid rooms
						  business, UK.</p>
					  </li>
					  <li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span> +(21)-255-999-8888</a></li>
					  <li><a href="mailto:hotels@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span>
						  hotels@mail.com</a></li>
					</ul>
				  </div>
				  <div class="col-lg-2 col-md-6 col-sm-4 footer-list-29 footer-2 mt-sm-0 mt-5">
		  
					<ul>
					  <h6 class="footer-title-29">Useful Links</h6>
					  <li><a href="{{ URL:: to ('/index')}}">Home</a></li>
					  <li><a href="{{ URL:: to ('/about')}}">About hotels</a></li>
					  <li><a href="#blogposts"> Blog posts</a></li>
					  <li><a href="{{ URL:: to ('/conatct')}}">Contact us</a></li>
					</ul>
				  </div>
				  <div class="col-lg-3 col-md-6 col-sm-5 footer-list-29 footer-3 mt-lg-0 mt-5">
					  <h6 class="footer-title-29">Latest from blog</h6>
					  <div class="footer-post mb-4">
						<a href="#url">Work Passionately</a>
						<p class="small"><span class="fa fa-clock-o"></span> March 9, 2020</p>
					  </div>
					  <div class="footer-post">
						<a href="#url">Work Passionately without any hesitation</a>
						<p class="small"><span class="fa fa-clock-o"></span> March 9, 2020</p>
					  </div>
					  
				  </div>
				  <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
					<h6 class="footer-title-29">Newsletter </h6>
					<p>Enter your email and receive the latest news from us.
					 We'll never share your email address</p>
		  
					<form action="#" class="subscribe" method="post">
					  <input type="email" name="email" placeholder="Your Email Address" required="">
					  <button><span class="fa fa-envelope-o"></span></button>
					</form>
				  </div>
				</div>
			  </div>
			</div>
		  </section>
		  
		  <section class="w3l-footer-29-main w3l-copyright">
			<div class="container">
			  <div class="row bottom-copies">
				<p class="col-lg-8 copy-footer-29">© 2020 Hotels. All rights reserved | Designed by <a
					href="https://w3layouts.com">W3layouts</a></p>
		  
				<div class="col-lg-4 main-social-footer-29">
				  <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
				  <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
				  <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
				  <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
				</div>
		  
			  </div>
			</div>
		  
		   <!-- move top -->
		   <button onclick="topFunction()" id="movetop" title="Go to top">
			&#10548;
		  </button>
		  <script>
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function () {
			  scrollFunction()
			};
		  
			function scrollFunction() {
			  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("movetop").style.display = "block";
			  } else {
				document.getElementById("movetop").style.display = "none";
			  }
			}
		  
			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
			  document.body.scrollTop = 0;
			  document.documentElement.scrollTop = 0;
			}
		  </script>
		  <!-- /move top -->
		  </section>
		  
		  <!-- Template JavaScript -->
		  <script src="js/jquery-3.3.1.min.js"></script>
		  
		  <script src="js/owl.carousel.js"></script>
		  <!-- script for banner slider-->
		  <script>
			$(document).ready(function () {
			  $('.owl-one').owlCarousel({
				loop: true,
				margin: 0,
				nav: false,
				responsiveClass: true,
				autoplay: false,
				autoplayTimeout: 5000,
				autoplaySpeed: 1000,
				autoplayHoverPause: false,
				responsive: {
				  0: {
					items: 1,
					nav: false
				  },
				  480: {
					items: 1,
					nav: false
				  },
				  667: {
					items: 1,
					nav: true
				  },
				  1000: {
					items: 1,
					nav: true
				  }
				}
			  })
			})
		  </script>
		  <!-- //script -->
		  
		  <!-- script for owlcarousel -->
		  <script>
			$(document).ready(function () {
			  $('.owl-testimonial').owlCarousel({
				loop: true,
				margin: 0,
				nav: true,
				responsiveClass: true,
				autoplay: false,
				autoplayTimeout: 5000,
				autoplaySpeed: 1000,
				autoplayHoverPause: false,
				responsive: {
				  0: {
					items: 1,
					nav: false
				  },
				  480: {
					items: 1,
					nav: false
				  },
				  667: {
					items: 1,
					nav: true
				  },
				  1000: {
					items: 1,
					nav: true
				  }
				}
			  })
			})
		  </script>
		  <!-- //script for owlcarousel -->
		  <script src="js/jquery.magnific-popup.min.js"></script>
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
		  
			  $('.popup-with-move-anim').magnificPopup({
				type: 'inline',
		  
				fixedContentPos: false,
				fixedBgPos: true,
		  
				overflowY: 'auto',
		  
				closeBtnInside: true,
				preloader: false,
		  
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-slide-bottom'
			  });
			});
		  </script>
		  
		  
		  <!-- disable body scroll which navbar is in active -->
		  <script>
		  $(function () {
			$('.navbar-toggler').click(function () {
			  $('body').toggleClass('noscroll');
			})
		  });
		  </script>
		  <!-- disable body scroll which navbar is in active -->
		  
		  <script src="js/bootstrap.min.js"></script>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>