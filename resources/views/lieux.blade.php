@extends('layouts.lieux')
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
   <!--<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">-->
   <link rel="stylesheet" href="css/style.css" type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main2.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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
  <body>
    <section>
      
      <h5 class="font-semibold text-xl text-gray-800 leading-tight" style="font-family:  font-size:26px; text-align:center;">
        le togo est divis?? en cinq region administrative 
      </h5>
    </section>
    <section  style=" margin-top:-7em">
      <div class="product-section mt-150 mb-150">
            <div class="container">
    
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-filters">
                            <ul>
                                <li   data-filter=".lemon3" class="active" > martime</li>
                                <li  data-filter=".berry">Region des plateaux</li>
                                <li  data-filter=".berry2">Region des savanes</li>
                                <li data-filter=".lemon">Region de la Kara</li>
                                <li data-filter=".lemon2"> Region centrale</li>
                            </ul>
                        </div>
                    </div>
                  </div>
       </section>
    <!-- <section>
       <section>
        <section  style="margin-left: 170px ">            
          <div class="row product-lists">
              <div class="col-lg-17 col-md-21 text-center  lemon3">
                <div class="single-product-item"  style="align-items: center">
                  <div class="product-image" >
                    <section class="hotel"  >
                      <section class="w3l-availability-form">
                        <div class="w3l-availability-form-main py-5"> 
                          <div class="container pt-lg-7 pb-lg-9">
                              <div class="forms-top">
                                  <div class="form-right">
                                      <div class="form-inner-cont">
                                        <br><div class="container">
                                          <div class="row">     
                                                {{-- <form action="action="{{ route('regionMa') }}" " method="GET" class="signin-form"  enctype="multipart/form-data"> --}}
                                                 
                                                  
                                                </form>
                                              </div>
                                                 
                                            </div>
                                      </div>
                                  </div>
                            </section>
                              </section>
                              </div>
                          </div>
                        </div>
                      </section>
       </section>
       <section>
        <section  style="margin-left: 170px;  ">            
          <div class="row product-lists">
              <div class="col-lg-17 col-md-21 text-center  berry">
                <div class="single-product-item"  style="align-items: center">
                  <div class="product-image" >
                    <section class="hotel"  >
                      <section class="w3l-availability-form">
                        <div class="w3l-availability-form-main py-5"> 
                          <div class="container pt-lg-7 pb-lg-9">
                              <div class="forms-top">
                                  <div class="form-right">
                                      <div class="form-inner-cont">
                                                    
                                                {{-- <form action="{{ route('LieuxController.regionPla') }}" method="GET" class="signin-form"  enctype="multipart/form-data"> --}}
                                                 
                                              </form>
                                                  </div>
                                                 
                                                </div>
                                      </div>
                                  </div>
                            </section>
                              </section>
                              </div>
                          </div>
                        </div>
                      </section>
       </section>
       <section>
        <section  style="margin-left: 170px; margin-top:-9em">            
          <div class="row product-lists">
              <div class="col-lg-17 col-md-21 text-center  berry2">
                <div class="single-product-item"  style="align-items: center">
                  <div class="product-image" >
                    <section class="hotel"  >
                      <section class="w3l-availability-form">
                        <div class="w3l-availability-form-main py-5"> 
                          <div class="container pt-lg-7 pb-lg-9">
                              <div class="forms-top">
                                  <div class="form-right">
                                      <div class="form-inner-cont">
                                                    
                                              <form>
                                             
                                              </form>
                                                  </div>
                                                 
                                                </div>
                                      </div>
                                  </div>
                            </section>
                              </section>
                              </div>
                          </div>
                        </div>
                      </section>
       </section>
       <section>
        <section  style="margin-left: 170px;margin-top:-9em ">            
          <div class="row product-lists">
              <div class="col-lg-17 col-md-21 text-center  lemon">
                <div class="single-product-item"  style="align-items: center">
                  <div class="product-image" >
                    <section class="hotel"  >
                      <section class="w3l-availability-form">
                        <div class="w3l-availability-form-main py-5"> 
                          <div class="container pt-lg-7 pb-lg-9">
                              <div class="forms-top">
                                  <div class="form-right">
                                      <div class="form-inner-cont">
                                                    
                                                <form action="" method="GET" class="signin-form"  enctype="multipart/form-data">
                                                  
                                              </form>
                                                  </div>
                                                 
                                                </div>
                                      </div>
                                  </div>
                            </section>
                              </section>
                              </div>
                          </div>
                        </div>
                      </section>
       </section>
       <section>
        <section  style="margin-left: 170px; margin-top:-9em">            
          <div class="row product-lists">
              <div class="col-lg-17 col-md-21 text-center  lemon2">
                <div class="single-product-item"  style="align-items: center">
                  <div class="product-image" >
                    <section class="hotel"  >
                      <section class="w3l-availability-form">
                        <div class="w3l-availability-form-main py-5"> 
                          <div class="container pt-lg-7 pb-lg-9">
                              <div class="forms-top">
                                  <div class="form-right">
                                      <div class="form-inner-cont">
                                                    
                                                <form action="" method="GET" class="signin-form"  enctype="multipart/form-data">
                                                  
                                              </form>
                                                  </div>
                                                 
                                                </div>
                                      </div>
                                  </div>
                            </section>
                              </section>
                              </div>
                          </div>
                        </div>
                      </section>
       </section>
       <section>
        <section  style="margin-left: 170px; margin-top:-9em">            
          <div class="row product-lists">
              <div class="col-lg-17 col-md-21 text-center  lemon2">
                <div class="single-product-item"  style="align-items: center">
                  <div class="product-image" >
                    <section class="hotel"  >
                      <section class="w3l-availability-form">
                        <div class="w3l-availability-form-main py-5"> 
                          <div class="container pt-lg-7 pb-lg-9">
                              <div class="forms-top">
                                  <div class="form-right">
                                      <div class="form-inner-cont">
                                                    
                                                <form action="" method="GET" class="signin-form"  enctype="multipart/form-data">
                                                  
                                              </form>
                                                  </div>
                                                 
                                                </div>
                                      </div>
                                  </div>
                            </section>
                              </section>
                              </div>
                          </div>
                        </div>
                      </section>
       </section>
      </section>-->
     
<section style="margin-top:-10em">
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
                            <h4>La r??serve de faune du Sarakawa</h4>
                        </a>
                        <p>Cette r??serve  r??cemment ouverte au public ,es safaris d??couverte sont organis??s ?? la rencontre de la faune sauvage africaine.On peut entre autre y apercevoir des z??bres, des Cobs, des bubales et bien d'autres esp??ces animales encore.</p>
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
                          Domin??e par des montagnes arides, sillonn??e de rivi??res, la r??gion de Bassar offre de splendides panoramas sur une zone de savanes arbor??es.il est organis?? chqaue premier samedi de mois de septembre la f??te des ignames, "D'pontr/N'dack" ,qui marque en pays Bassar le d??but d'une nouvelle ann??e.</p>                
                          </div>
                </div>
            </div>
          </section>
          <br>
          <br>
          <section  style=" margin-top:0em">
            <form action="{{ route('Requetetourisme.index') }}" method="GET">
              @csrf
            <div class="product-section mt-50 mb-10">
                  <div class="container">
                      <div>
                          <div >
                              <div class="product-filters">
                               <center>   <ul>
                                <div>
                                  <button style="align-content: center" class=" btn btn-primary">chercher des services de tourisme disponible </button>
                                </div>
                                  </ul></center>
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
            </form>
             </div>
             </section>
          
            <section class="recipe-section spad">
              <div class="container">
                <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="recipe-item">
                    <a href="{{ URL:: to ('/tourisme')}}"><img src="images/timberma.jpg" alt=""></a>
                    <div class="ri-text">
                        
                        <a href="{{ URL:: to ('/tourisme')}}">
                            <h4>Les tamberma</h4>
                        </a>
                        <p>"Les Tambermas, dont le nom signifie " les vrais architectes de la terre ", originaires de Dinaba au Burkina-Faso, sont chasseurs, agriculteurs, ??leveurs qui vivent dans la r??gion de la Kara</p>
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
                        <p>Le pays Tamberma est caract??ris?? par ses habitations de terre. Il s'agit de grosses constructions cylindriques appel??es tatas.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="recipe-item">
                    <a href="{{ URL:: to ('/tourisme')}}"><img src="images/Aledjo.jpg" alt=""></a>
                    <div class="ri-text"><a href="{{ URL:: to ('/tourisme')}}"> 
                            <h4>Faille d'aledjo</h4>
                            </a>
                        <p>La faille d'Aledjo est une curiosit?? g??ologique en plein sur la nationale 1. Entre deux rochers, taillad??s comme d'un gigantesque coup de machette, on a fait passer une route ?? voie unique, utilis??e dans le sens descendant.</p>
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