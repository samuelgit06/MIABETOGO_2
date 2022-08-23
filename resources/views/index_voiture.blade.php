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

@if (empty($eta))
pas de logement disponible 
@else
@endif

<section class="w3l-breadcrumb">
  <div class="breadcrum-bg py-sm-5 py-4">
      <div class="container py-lg-3">
          <h2>Les meilleurs services de tourisme </h2>
      </div>
    </div>
    <br><div class="container">
      <div class="row">
  
        @foreach ($eta as $etablissement  ) 
          <div class="col-lg-4 col-sm-2" style="background-color:ghostwhite;">
            <div class="recipe-item">
                <p><img src="images/{{$etablissement->images}}" alt="image"></p>
                <div style="text-align:left; color:black;" class="form-group"><br>
                    
                    <br><a>
                        <h3 style="color:rgb(255, 106, 0); font-weight:550; text-style:justify;">{{$etablissement->Nom}}</h3>
                    </a>
                    <p style="font-family: arial; font-size:16px; color:black;">{{$etablissement->Desc_eta}}</p>
                    <p style="font-family: roboto; font-size:16px;"><u>Telephone</u> : {{$etablissement->num_etablissment}}</p>
                    <p style="font-family: roboto; font-size:16px;"><u>Prix Maximum</u> : {{$etablissement->prix_max}}</p>
                    <p style="font-family: roboto; font-size:16px;"><u>Prix Minimum</u> : {{$etablissement->prix_min}}</p>
                    <p {{$etablissement->lien_web_eta}} class="card-link">vister le site web </p><br>         
                  <br></div>
                  <i class="star" data-note="1">&#9733;</i>
                <i class="star" data-note="2">&#9733;</i>
                <i class="star" data-note="3">&#9733;</i>
                <i class="star" data-note="4">&#9733;</i>
                <i class="star" data-note="5">&#9733;</i>
                <i class="note">Note:</i>
            </div>
        </div><br>
        @endforeach


</section>

  <body>
</header>
<hr>
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
              <li><a href="{{ URL:: to ('/services')}}">Galleries</a></li>
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
    <!--etoile-->
    <script>
      const stars = document.querySelectorAll('.star');
      let check = false;
      stars.forEach(star => {
          star.addEventListener('mouseover', selectStars);
          star.addEventListener('mouseleave', unselectStars);
          star.addEventListener('click', activeSelect);
      })
  
      function selectStars(e) {
          const data = e.target;
          const etoiles = priviousSiblings(data);
          if (!check) {
              etoiles.forEach(etoile => {
                  etoile.classList.add('hover');
              })
          }
  
      }
  
      function unselectStars(e) {
          const data = e.target;
          const etoiles = priviousSiblings(data);
          if (!check) {
              etoiles.forEach(etoile => {
                  etoile.classList.remove('hover');
              })
          }
      }
  
      function activeSelect(e) {
          if (!check) {
              check = true;
              document.querySelector('.note').innerHTML = 'Note ' + e.target.dataset.note;
          }
      }
  
      function priviousSiblings(data) {
          let values = [data];
          while (data = data.previousSibling) {
              if (data.nodeName === 'I') {
                  values.push(data);
              }
          }
          return values;
      }
  </script>
  
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
  
  </body>
  
  </html>
  @endsection