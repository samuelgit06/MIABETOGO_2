@extends('layouts.apps')
@section('content')
<!doctype html>
<html lang="fr">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title >MIABETOGO</title>
    <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">
   <!-- Css Styles -->
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
   <link rel="stylesheet" href="css/nice-select.css" type="text/css">
   <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
   <link rel="stylesheet" href="css/style.css" type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main2.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
  </head>
  <body>
<section>
    <h5 class="font-semibold text-xl text-gray-800 leading-tight" style="font-family:  font-size:26px; text-align:center;">
      visiter les beaux lieux au TOGO grace au services de tourismes !
    </h5>
  </section>
  <br>
  <br>

  <section class="recipe-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="recipe-item">
                    <a href="{{ URL:: to ('/tourisme')}}"><img src="images/mowokitours_20220510_p_2835024246573947552_2_2835024236407070286.jpg" alt=""></a>
                    <div class="ri-text">
                        <br><a href="{{ URL:: to ('/tourisme')}}">
                            <h4>Le mont agou</h4>
                            </a>
                        <p>le mont Agou est le plus haut sommet du TOGO,culminant a 986 metres d'altitude, il se situe entre Amoussoukope et Kpalime </p>
                        
                      
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-lg-4 col-sm-6">
                <div class="recipe-item">
                    <a href="{{ URL:: to ('/tourisme')}}"><img src="images/sarakawa.jpg" alt=""></a>
                    <div class="ri-text">
                        <br>
                        <a href="{{ URL:: to ('/tourisme')}}">
                            <h4>La réserve de faune du Sarakawa</h4>
                        </a>
                        <p>Cette réserve  récemment ouverte au public ,es safaris découverte sont organisés à la rencontre de la faune sauvage africaine.On peut entre autre y apercevoir des zèbres, des Cobs, des bubales et bien d'autres espèces animales encore.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="recipe-item">
                    <a href="{{ URL:: to ('/tourisme')}}"><img src="images/igbames.jpg" alt=""></a>
                    <div class="ri-text">
                        <br>
                        <a href="{{ URL:: to ('/tourisme')}}">
                            <h4>Marche d'igname village de bassar  </h4>
                        </a>
                        <p> 
                          Dominée par des montagnes arides, sillonnée de rivières, la région de Bassar offre de splendides panoramas sur une zone de savanes arborées.il est organisé chqaue premier samedi de mois de septembre la fête des ignames, "D'pontr/N'dack" ,qui marque en pays Bassar le début d'une nouvelle année.</p>                
                          </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="recipe-item">
                    <a href="{{ URL:: to ('/tourisme')}}"><img src="images/timberma.jpg" alt=""></a>
                    <div class="ri-text">
                        
                        <a href="{{ URL:: to ('/tourisme')}}">
                            <h4>Les tamberma</h4>
                        </a>
                        <p>"Les Tambermas, dont le nom signifie " les vrais architectes de la terre ", originaires de Dinaba au Burkina-Faso, sont chasseurs, agriculteurs, éleveurs qui vivent dans la région de la Kara</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="recipe-item">
                    <a href="{{ URL:: to ('/tourisme')}}"><img src="images/case.jpg" alt=""></a>
                    <div class="ri-text">
                      <a href=" {{ URL:: to ('/tourisme')}}">
                        <h4>les tata tamberma</h4>
                      </a>  
                        <p>Le pays Tamberma est caractérisé par ses habitations de terre. Il s'agit de grosses constructions cylindriques appelées tatas.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="recipe-item">
                    <a href="{{ URL:: to ('/tourisme')}}"><img src="images/Aledjo.jpg" alt=""></a>
                    <div class="ri-text"><a href="{{ URL:: to ('/tourisme')}}"> 
                            <h4>Faille d'aledjo</h4>
                            </a>
                        <p>La faille d'Aledjo est une curiosité géologique en plein sur la nationale 1. Entre deux rochers, tailladés comme d'un gigantesque coup de machette, on a fait passer une route à voie unique, utilisée dans le sens descendant.</p>
                    </div>
                </div>
            </div>
           
      
</section>	
                        </section>
                        <br>
                        <br>
                        <br>
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
                                      <li><a {{ URL:: to ('/news')}}">Contact us</a></li>-->
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
                          
                          
                          <section class="w3l-footer-29-main w3l-copyright">
                            <div class="container">
                              <div class="row bottom-copies">
                          
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
                          <!-- Scripts -->
                            <script src="assets/js/jquery.min.js"></script>
                            <script src="assets/js/jquery.poptrox.min.js"></script>
                            <script src="assets/js/browser.min.js"></script>
                            <script src="assets/js/breakpoints.min.js"></script>
                            <script src="assets/js/util.js"></script>
                            <script src="assets/js/main.js"></script>
  
                      </body>
    
                      </html>
                          
 @endsection