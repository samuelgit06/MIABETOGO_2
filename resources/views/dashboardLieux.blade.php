<x-app-layout>
    <!--<x-slot name="header">
        <h4 class="font-semibold text-xl text-gray-800 leading-tight" style="font-family: font-size:26px; text-align:center;">
            
        </h4>
    </x-slot>-->

    <div class="py-12">        
            <!doctype html>
                    <html lang="fr">
                      <head>
                        <!-- Required meta tags -->
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    
                        <title >MIABETOGO</title>
                    
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
                    <section  style=" margin-top:-10em">
                        <div class="product-section mt-150 mb-150">
                              <div class="container">
                      
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="product-filters">
                                              <ul>
                                                  <li   data-filter=".lemon3" class="active">Ajouter un lieux que vous aviez visité </li>
                                               <!--   <li  data-filter=".berry">Maison</li>
                                                  <li  data-filter=".berry2">Appartement</li>
                                                  <li data-filter=".lemon">Service de tourisme</li>
                                                  <li data-filter=".lemon2">Service de location</li>-->
                                              </ul>
                                          </div>
                                      </div>
                                    </div>
                         </section>
                        <section  style="margin-left: 170px; margin-top:-15em">            
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
                                                                          
                                                                      <form action="{{ route('LieuxController.store') }}" method="POST" class="signin-form"  enctype="multipart/form-data">
                                                                        @csrf
                                                                        <br>
                                                                        <div class="container">
                                                                          <div class="row">                                                                          
                                                                            <div class="form-input col-md-6 ">
                                                                            <h5 for="label-form-group" class="pull-left"><u><b>Choissisez  la region </b></u></h5>
                                                                            <p><br><br><select class="selectpicker" name="region" required>
                                                                           <option selected disabled></option>
                                                                                <option value="Region Maritime" >Region Maritime </option>
                                                                                <option value="Region des plateaux" >Region des plateaux</option>
                                                                                <option value="Region Centrale" >Region Centrale</option>
                                                                                <option value="Region de la Kara ">Region de la Kara</option>
                                                                                <option value="Region des savanes">Region des savanes</option>
                                                                            </select></p>
                                                                          </div>

                                                                          <div class="form-input col-md-6 ">
                                                                            <h5 for="label-form-group" class="pull-left"><u><b>Nom du lieux</b></u></h5>
                                                                            <p><br><br><input type="text" name="Nom" placeholder="Nom" required/>
                                                                          </div>

                                                                        </div>
                                                                        </div>
                                                                          <br>
                                                                          <br>
                                                                          <center><h5 for="label-form-group" ><u><b>Description</b></u></h5></center>
                                                                          <br>
                                                                            <div class="row book-form mb-3">
                                                                                  <textarea name="Desc_Lieux"  placeholder="Decrivez le leix que vous aviez visiter vos appreciation et remarque "cols="1" rows="5" class="form-control" required></textarea>
                                                                                </div>
                                                                            </div>
                                                                        <br>
                                                                        <center><h5 for="label-form-group" ><u><b>Ajouter l' addresse du lieux (le nom de la ville ou de la localité )</b></u></h5></center>
                                                                        <br>
                                                                          <div class="row book-form">
                                                                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                                                              <div class="form-input col-md-4 col-sm-6 mt-3">
                                                                                <center><h5 for="label-form-group" ><u><b>Addresse</b></u></h5></center>
                                                                                <br>
                                                                                  <input type="text" name="local_eta" placeholder="Adresse/localisation" />
                                                                              </div>
                                                                            <br>
                                                                          </div>
                                                                        <br>
                                                                        <center><h5 for="label-form-group" ><u><b>Y'a t'il un montant pour acceder a ce lieux ?</b></u></h5></center>
                                                                        <br>
                                                                       
                                                                          <div class="row book-form">
                                                                            <div class="form-input col-md-4 col-sm-6 mt-3">
                                                                              <center><h5 for="label-form-group" ><u><b>Prix par personne </b></u></h5></center>
                                                                              <input type="number" id="prix" name="prix" placeholder="Montant" />
                                                                          </div> 
                                                                             
                                                                          </div>
                                                                        <br>
                                                                        <br>
                                                                        <div>
                                                                          <label> ajouter un image </label>
                                                                          <input type="file" name="file" placeholder="images"  id="formFile" required />
                                                                        </div>
                                                                        <br>
                                                                    <div>
                                                                      <button style="align-content: center" class="ml-3 book btn btn-secondary btn-style">Enregistrer</button>
                                                                    </div>
                                                                    </div>
                                                    </div>
                                                    <br>
                                                    <p> les zones de saisies comportant (*) ne sont pas obligatoire </p>
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
                        

</x-app-layout>
