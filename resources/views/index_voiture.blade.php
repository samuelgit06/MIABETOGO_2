@extends('layouts.apps')
@section('content')
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MIABETOGO</title>
    <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="css/style-starter.css">
  </head>
  <body>
<!--w3l-header-->
<header class="w3l-header-nav">
	<!--/nav-->
	<!--<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
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
					<li class="nav-item @@about__active">
						<a class="nav-link" href="{{ URL:: to ('/services')}}">Gallerie</a>
					</li>
				</ul>
				<a href="{{ URL:: to ('/login')}}" class="ml-3 book btn btn-secondary btn-style">conncter vous</a>
                <a href="{{ URL:: to ('/ajout_etablissement')}}" class="ml-3 book btn btn-secondary btn-style">ajouter un etablissement</a>
			</div>
		</div>
	</nav>
	//nav-->
</header>

<section class="w3l-availability-form" id="booking">
    <div class="w3l-availability-form-main py-5">
        <div class="container pt-lg-1 pb-lg-1">
            <div class="forms-top">
                <div class="form-right">
                    <div class="form-inner-cont">
                     <center>   <h3 class="title-small">verifier les disponibiltés des lieux ou séjouner </h3></center>
                     <hr> 
                     <form action="" method="POST" class="signin-form">
                      @csrf

                        </div>
                          <br>
                          <center><h5>Nom de l'etablissement </h5></center>
                          <br>
                            <div class="row book-form ">
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                    <input type="text" name="Nom" placeholder="Nom" />
                                </div>
                            </div>
                        <br>
                      </div>
                      <center><h5>Adresse</h5></center>
                      <br>
                        <div class="row book-form">
                         
                            <div class="form-input col-md-4 col-sm-6 mt-3">
                                <label> Adresse </label>
                                <input type="text" name="local_eta" placeholder="Adresse/localisation" required />
                            </div>
                         
                          
                        </div>
                      <br>
                      <center><h5>Budget</h5></center>
                      <br>
                      <div class="row book-form">
                        <div class="form-input col-md-4 col-sm-6 mt-3">
                          <label> prix minimum </label>
                          <input type="number"  onchange="MaFonction()" id="prix_min" name="prix_min" placeholder="prix minimum"   required />
                      </div> 
                          <div class="form-input col-md-4 col-sm-6 mt-3">
                              <label> Prix maximun </label>
                              <input type="number" id ="prix_max" name="prix_max" placeholder="prix maximum" required />
                          </div>
                         
                      </div>
                      <br>
                      <br>
                      
                  <div>
                    <button style="align-content: center" class="ml-3 book btn btn-secondary btn-style">chercher</button>
                  </div>
               
                  </div>
                  </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
  <section class="w3l-breadcrumb">
    <table style="margin: auto">
      <tr>
   <td> <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div></td>
   <td> <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div><td>
   <td> <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div><td>
    <td><div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div></td>
  </tr>
    </table>
<section>
    

<section class="w3l-footer-29-main">
  <div class="footer-29 py-5">
    <div class="container py-lg-4">
      <div class="row footer-top-29">
        <div class="col-lg-3 col-md-6 col-sm-8 footer-list-29 footer-1">
        </div>
        <div class="col-lg-2 col-md-6 col-sm-4 footer-list-29 footer-2 mt-sm-0 mt-5">

          <ul>
            <h6 class="footer-title-29">Useful Links</h6>
            <li><a href="{{ URL:: to ('/index')}}">Home</a></li>
            <li><a href="{{ URL:: to ('/services')}}">Services</a></li>
            <li><a href="{{ URL:: to ('/reservation')}}">Reservation</a></li>
          </ul>
        </div>
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
     <!-- <p class="col-lg-8 copy-footer-29">© 2020 Hotels. All rights reserved | Designed by <a
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
  var min=document.getElementById("prix_min");
  var max=document.getElementById("prix_max");
  function MaFonction(){
  max.setAttribute("min",min.value)
  }
</script>
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

</body>

</html>
@endsection