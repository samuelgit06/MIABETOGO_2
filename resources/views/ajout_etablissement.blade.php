<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MIABETOGO</title>

    <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style-starter.css">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
	<!-- google font -->
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

  <link rel="stylesheet" href="css/style-starter.css">
  <!--Js query-->
  <script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

  </head>
  <body >
<!--w3l-header-->

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
						<a class="nav-link" href="{{ URL:: to ('/')}}">Home</a>
					</li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="{{ URL:: to ('/services')}}">Services</a>
					</li>
					
				</ul>
				<a href="{{ URL:: to ('/login')}}" class="ml-3 book btn btn-secondary btn-style">Connecter vous</a>
			</div>
		</div>
	</nav>
</header>

<section class="w3l-breadcrumb">
  <div class="breadcrum-bg py-sm-6 py-4">
      <div class="container py-lg-3">
          <h2>Ajouter votre etablissement pour vous faire connaitre </h2>
      </div>
  </div>
</section>


<section>
  <div class="product-section mt-140 mb-120" style="margin-top:-20em">
		<div class="container">
			<div class="row">
                <div class="container pt-lg-7 pb-lg-9" >
                    <div class="product-filters">
                        <ul>
                            <li data-filter="">Hotel</li>
                            <li data-filter=".berry">Restaurant</li>
                            <li data-filter=".lemon">Service de tourisme</li>
                            <li data-filter=".lemon2">Service de location</li>
                        </ul>
                    </div>
                </div>
              </div>
            </section>
      

  <section  class="w3l-availability-form " id="booking">            
          <div class="row product-lists">
              <div class="col-lg-17 col-md-21 text-center  lemon3">
                <div class="single-product-item" >
                  <div class="product-image">
                        <div class="w3l-availability-form-main py-5"> 
                          <div class="container pt-lg-7 pb-lg-9">
                              <div class="forms-top">
                                  <div class="form-right">
                                      <div class="form-inner-cont">
                                      <form action="#" method="#" class="signin-form">
                                                      <center><h5>Nom de l'hotel</h5></center>
                                                        <div class="row book-form">
                                                            <div class="form-input col-md-4 col-sm-6 mt-3">
                                                                <!--<label> Nom de l'hotel</label>-->
                                                                <input type="text" name="Nom" placeholder="Nom" required="true" />
                                                            </div>
                                                        </div>
                                                   <!-- </form>
                                                  <form action="#" method="#" class="signin-form">-->
                                                    <br>
                                                    <center><h5>Description</h5></center>
                                                    <br>
                                                      <div class="row book-form">
                                                          <div class="form-input col-md-4 col-sm-6 mt-3">
                                                              <!--<label> Description</label>-->
                                                              <input type="text" name="Description" placeholder="Description" required />
                                                          </div>
                                                      </div>
                                               <!--   </form>
                                                <form action="#" method="#" class="signin-form">-->
                                                  <br>
                                                  <center><h5>Ajouter vos adresses</h5></center>
                                                  <br>
                                                    <div class="row book-form">
                                                      <div class="form-input col-md-4 col-sm-6 mt-3">
                                                        <label> Adresse Mail </label><br>
                                                         <input type="text" name="mail" placeholder="Mail" required />
                                                     </div>
                                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                                            <label> Adresse </label>
                                                            <input type="text" name="Addresse" placeholder="Adresse/localisation" required />
                                                        </div>
                                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                                          <label> Numero de telephone</label>
                                                          <input type="number" name="numero" placeholder="Numero de Teléphone" required />
                                                      </div> 
                                                      
                                                    </div>
                                                <!--  </form>
                                                <form action="#" method="#" class="signin-form">-->
                                                  <br>
                                                  <center><h5>Budget</h5></center>
                                                  <br>
                                                    <div class="row book-form">
                                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                                            <label> Prix maximun </label>
                                                            <input type="text" name="prx_min" placeholder="Max Price" required />
                                                        </div>
                                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                                          <label> prix minimum </label>
                                                          <input type="text" name="prix_max" placeholder="Min Price" required />
                                                      </div> 
                                                    </div>
                                             <!--   </form>
                                                <form action="#" method="#" class="signin-form">-->
                                                  <!--<br>
                                                  <center><h5>Ajouter une chambre </h5></center>
                                                  <br>
                                                    <div class="row book-form">
                                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                                            <label>Nombre de lit </label>
                                                            <input type="number" name="nombre_lit" placeholder="nombre lit" required="true"/>
                                                        </div>
                                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                                          <label> Autre caracteristiques </label>
                                                          <input type="text" name="caracteristiques" placeholder="caracteristiques " required />
                                                      </div> 
                                                    </div>
                                               </form>
                                                <form action="#" method="#" class="signin-form">-->
                                                  <br>
                                                  <center><h5>Ajouter des images</h5></center>
                                                  <br>
                                                    <div class="row book-form">
                                                        <div class="form-input col-4">
                                                            <input type="file" name="" placeholder="" required />
                                                        </div>
                                                    </div>
                                        </form>
                                                  </div>
                                              </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                  </div>
                </div>
  </section>
  <section class="w3l-availability-form " id="booking">         
            <div class="row product-lists">
              <div class="col-lg-17 col-md-21 text-center berry">
                <div class="single-product-item" style="margin-top:-20em" >
                  <div class="product-image" >
                        <div class="w3l-availability-form-main py-5">
                        <div class="container pt-lg-7 pb-lg-9">
                          <div class="forms-top">
                            <div class="form-right">
                              <div class="form-inner-cont">
                                      <form action="#" method="#" class="signin-form">
                                    <!--  <center><h5></h5></center>
                                      <br>
                                        <div class="row book-form">
                                          <div class="form-input col-md-4 col-sm-6 mt-3">
                      
                                            <input type="text" name="Nom" placeholder="Nom" required="true" />
                                          </div>
                                        </div>
                                      </form>
                                    <form action="#" method="#" class="signin-form">
                                      <br>-->
                                      <center><h5>Description</h5></center>
                                      <br>
                                      <div class="row book-form">
                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                          <!--  <label> Description</label>-->
                                          <input type="text" name="Description" placeholder="Description" required />
                                        </div>
                                      </div>
                                    </form>
                                    <form action="#" method="#" class="signin-form">
                                      <br>
                                      <center><h5>Ajouter vos adresses</h5></center>
                                      <br>
                                      <div class="row book-form">
                                      <!-- <div class="form-input col-md-4 col-sm-6 mt-3">
                                        <label> Adresse Mail </label><br>
                                         <input type="text" name="mail" placeholder="Mail" required />
                                       </div>-->
                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                          <label> Adresse </label>
                                          <input type="text" name="Addresse" placeholder="Adresse/localisation" required />
                                        </div>
                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                          <label> Numero de telephone</label>
                                          <input type="number" name="numero" placeholder="Numero de Teléphone" required />
                                        </div> 
                                        
                                      </div>
                                      </form>
                                    <form action="#" method="#" class="signin-form">
                                    <br>
                                    <center><h5>Budget</h5></center>
                                    <br>
                                      <div class="row book-form">
                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                          <label> Prix maximun </label>
                                          <input type="text" name="prx_min" placeholder="Max Price" required />
                                        </div>
                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                        <label> prix minimum </label>
                                        <input type="text" name="prix_max" placeholder="Min Price" required />
                                      </div> 
                                      </div>
                                    </form>
                                    <form action="#" method="#" class="signin-form">
                                    <br>
                                    <center><h5>Ajouter des images</h5></center>
                                    <br>
                                      <div class="row book-form">
                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                          <input type="file" name="prx_min" placeholder="Max Price" required />
                                        </div>
                                      </div>
                                    </form>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
  </section>
  <section class="w3l-availability-form " id="booking">
              <div class="row product-lists">
              <div class="col-lg-17 col-md-21 text-center lemon">
                <div class="single-product-item" style="margin-top:-10em">
                  <div class="product-image">
                        <div class="w3l-availability-form-main py-5">
                        <div class="container pt-lg-3 pb-lg-5">
                          <div class="forms-top">
                            <div class="form-right">
                              <div  class="form-input col-md-4 col-sm-6 mt-3">
                                <form action="#" method="#" class="signin-form">
                                      <center><h5>Nom du service de tourisme </h5></center>
                                        <div class="row book-form">
                                          <div class="form-input col-md-4 col-sm-6 mt-3">
                                           <!-- <label> Nom de l'hotel</label>-->
                                            <input type="text" name="Nom" placeholder="Nom" required="true" />
                                          </div>
                                        </div>
                                        <hr>
                                      <center><h5>Description</h5></center>
                                      <br>
                                      <div class="row book-form">
                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                          <!--<label> Description</label>-->
                                          <input type="text" name="Description" placeholder="Description" required />
                                        </div>
                                      </div>
                                      <hr>
                                      <center><h5>Ajouter vos adresses</h5></center>
                                      <br>
                                      <div class="row book-form">
                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                        <label> Adresse Mail </label><br>
                                         <input type="text" name="mail" placeholder="Mail" required />
                                       </div>
                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                          <label> Adresse </label>
                                          <input type="text" name="Addresse" placeholder="Adresse/localisation" required />
                                        </div>
                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                          <label> Numero de telephone</label>
                                          <input type="number" name="numero" placeholder="Numero de Teléphone" required />
                                        </div> 
                                      </div>
                                      <hr>
                                    <center><h5>Budget</h5></center>
                                    <br>
                                      <div class="row book-form">
                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                          <label> Prix maximun </label>
                                          <input type="text" name="prx_min" placeholder="Max Price" required />
                                        </div>
                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                        <label> prix minimum </label>
                                        <input type="text" name="prix_max" placeholder="Min Price" required />
                                      </div> 
                                      </div>
                                    <hr>
                                    <center><h5>Ajouter des images</h5></center>
                                    <br>
                                      <div class="row book-form">
                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                          <input type="file" name="prx_min" placeholder="Max Price" required />
                                        </div>
                                      </div>
                                      <br>
                                      <div>
                                     <center><h5>Ajouter des lieux </h5></center>
                                                  <br>
                                                    <div class="row book-form">
                                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                                            <label>Nom du lieux  </label>
                                                            <input type="number" name="nombre_lit" placeholder="nombre lit" required="true"/>
                                                        </div>
                                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                                          <label> localisation</label>
                                                          <input type="text" name="caracteristiques" placeholder="caracteristiques " required />
                                                      </div> 
                                                 </div>
                                                 <center><h5>Ajouter des images</h5></center>
                                    <br>
                                      <div class="row book-form">
                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                          <input type="file" name="prx_min" placeholder="Max Price" required />
                                        </div>
                                      </div>
                                      </div>
                                    </form>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                  </div>
                </div>
  </section>         

  <section class="w3l-availability-form " id="booking">
            <div class="row product-lists" style="align-content: center">
              <div class="col-lg-17 col-md-21 text-center  lemon2">
                <div class="single-product-item" style="margin-top:-10em"8 >
                  <div class="product-image">
                        <div class="w3l-availability-form-main py-5">
                          <div class="container pt-lg-3 pb-lg-5">
                              <div class="forms-top">
                                  <div class="form-right">
                                      <div class="form-inner-cont">
                                                <form action="#" method="#" class="signin-form">
                                                      <br>
                                                      <center><h5>Nom du service de votre service de location voiture  </h5></center>
                                                      <br>
                                                        <div class="row book-form">
                                                            <div class="form-input col-md-4 col-sm-6 mt-3">
                                                               <!-- <label> Nom de l'hotel</label>-->
                                                                <input type="text" name="Nom" placeholder="Nom" required="true" />
                                                            </div>
                                                        </div>
                                                   <hr>
                                                    <center><h5>Description</h5></center>
                                                    <br>
                                                      <div class="row book-form">
                                                          <div class="form-input col-md-4 col-sm-6 mt-3">
                                                              <!--<label> Description</label>-->
                                                              <input type="text" name="Description" placeholder="Description" required />
                                                          </div>
                                                      </div>
                                                  <hr>
                                                    <center><h5>Ajouter vos adresses</h5></center>
                                                    <br>
                                                      <div class="row book-form">
                                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                                          <label> Adresse Mail </label><br>
                                                           <input type="text" name="mail" placeholder="Mail" required />
                                                       </div>
                                                          <div class="form-input col-md-4 col-sm-6 mt-3">
                                                              <label> Adresse </label>
                                                              <input type="text" name="Addresse" placeholder="Adresse/localisation" required />
                                                          </div>
                                                          <div class="form-input col-md-4 col-sm-6 mt-3">
                                                            <label> Numero de telephone</label>
                                                            <input type="number" name="numero" placeholder="Numero de Teléphone" required />
                                                        </div> 
                                                        
                                                      </div>
                                                   <hr>
                                                  <center><h5>Budget</h5></center>
                                                  <br>
                                                    <div class="row book-form">
                                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                                            <label> Prix maximun </label>
                                                            <input type="text" name="prx_min" placeholder="Max Price" required />
                                                        </div>
                                                        <div class="form-input col-md-4 col-sm-6 mt-3">
                                                          <label> prix minimum </label>
                                                          <input type="text" name="prix_max" placeholder="Min Price" required />
                                                      </div> 
                                                    </div>
                                            
                                                  </div>
                                              </div>
                                          <hr>
                                            <center><h5>Ajouter des images</h5></center>
                                            <br>
                                              <div class="row book-form">
                                                  <div class="form-input col-md-4 col-sm-6 mt-3">
                                                      <input type="file" name="prx_min" placeholder="Max Price" required />
                                                  </div>
                                              </div>
<hr>
                                              
                                    </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
</section>
                  
                  
                

<section>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
 <a href="#" class="ml-3 book btn btn-secondary btn-style">enregistrer</a>
</button>
</section>


<section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="col-lg-2 col-md-6 col-sm-4 footer-list-29 footer-2 mt-sm-0 mt-5">
            <ul>
              <h6 class="footer-title-29">Useful Links</h6>
              <li><a href="{{ URL:: to ('/index')}}">Home</a></li>
              <li><a href="{{ URL:: to ('/services')}}">Services</a></li>
              <li><a href="{{ URL:: to ('/reservation')}}">Reservation</a></li>
             <!-- <li><a href="#blogposts"> Blog posts</a></li>
              <li><a {{ URL:: to ('/news')}}">Contact us</a></li>-->
            </ul>
          </div>
         <!-- <div class="col-lg-3 col-md-6 col-sm-5 footer-list-29 footer-3 mt-lg-0 mt-5">
              <h6 class="footer-title-29">Latest from blog</h6>
              <div class="footer-post mb-4">
                <a href="#url">Work Passionately</a>
                <p class="small"><span class="fa fa-clock-o"></span> March 9, 2020</p>
              </div>
              <div class="footer-post">
                <a href="#url">Work Passionately without any hesitation</a>
                <p class="small"><span class="fa fa-clock-o"></span> March 9, 2020</p>
              </div>
              
          </div>-->
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Nouvelles  </h6>
            <p>Entrer votre mail pour recevoir des nouvelles </p>
  
            <form action="#" class="subscribe" method="post">
              <input type="email" name="email" placeholder="Your Email Address" required="">
              <button><span class="fa fa-envelope-o"></span></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  -<section class="w3l-footer-29-main w3l-copyright">
    <div class="container">
      <div class="row bottom-copies">
      <!--  <p class="col-lg-8 copy-footer-29">© 2020 Hotels. All rights reserved | Designed by <a
            href="https://w3layouts.com">W3layouts</a></p>-->
  
            <!--<div class="col-lg-4 main-social-footer-29">
          <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
          <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
          <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
          <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
        </div>-->
  
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
  <script>function masquer_div(id)
    {
      if (document.getElementById(id).style.display == 'none')
      {
           document.getElementById(id).style.display = 'block';
      }
      else
      {
           document.getElementById(id).style.display = 'none';
      }
    }</script>
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
  
  </body>
  
  </html>