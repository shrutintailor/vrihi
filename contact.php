<!DOCTYPE html>
<html>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/contact-us-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:50:53 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->


   <?php

    session_start();

   include'includes/connection.php';
?>

   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
      <title>VRIHI - Contact</title>
      <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="assets/animate.css/animate.min.css" rel="stylesheet" type="text/css">
      <link href="assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="assets/slick/slick.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&amp;display=swap" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet" type="text/css">
      <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css">
   </head>
   <body class="body">
      <div class="page-loader cube-loader">
         <div class="loader-wrap">
            <div class="loader-1 loader-element"></div>
            <div class="loader-2 loader-element"></div>
            <div class="loader-4 loader-element"></div>
            <div class="loader-3 loader-element"></div>
         </div>
      </div>
      
      <?php
        include'includes/header.php';
      ?>
      
      <section class="after-head top-block-page with-back white-curve-after section-white-text">
         <div class="overflow-back">
            <div class="overflow-back cover-image mw-100" data-background="assets/images/content/1920x1080/antioxidant-carrot-diet-33307.jpg"></div>
            <div class="overflow-back bg-body-back opacity-70"></div>
         </div>
         <div class="content-offs-stick my-5 container">
            <div class="section-solid">
               <div class="z-index-4 position-relative">
                  <h1 class="section-title">Contact us</h1>
                  <div class="mt-3">
                     <div class="page-breadcrumbs"><a class="content-link" href="index.php">Home</a><span class="mx-2">\</span><span>Contact us</span></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section">
         <div class="section-head">
            <div class="section-icon"><span class="svg-fill-jazzberry-jam svg-content" data-svg="assets/images/svg/title-rasberry.svg"></span></div>
            <div class="section-head-content">
               <h2 class="section-title">Have something to say?</h2>
               <p class="section-text">Here is the place</p>
            </div>
         </div>
         <div class="container">
            <form autocomplete="off" name="contact" id="contact" method="POST" action="concode.php">
               <div class="row grid justify-content-center">
                  <div class="col-12 col-sm-6 col-lg-5 col-xl-4">
                     <div class="input-view-flat input-gray-shadow form-group">
                        <label class="required">Your Name</label>
                        <div class="input-group"><input class="form-control" name="name" type="text" placeholder="Name"></div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-5 col-xl-4">
                     <div class="input-view-flat input-gray-shadow form-group">
                        <label class="required">Your Email</label>
                        <div class="input-group"><input class="form-control" name="email" type="email" placeholder="Email"></div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-10 col-xl-8">
                     <div class="input-view-flat input-gray-shadow form-group">
                        <label class="required">Your Message</label>
                        <div class="input-group"><textarea class="form-control" name="message" placeholder="Message"></textarea></div>
                     </div>
                  </div>
                  <div class="col-12 text-center"><button class="btn-wide mb-0 btn btn-theme" type="submit">send message</button></div>
               </div>
            </form>
         </div>
      </section>
      
      <div class="container">
            <div class="row"></div>
            <div class="entity">
               <div class="cols-lg row">
                  <div class="col-12 col-xl">
                     <div class="frame-block p-2">
                        <div class="gmap">
                           <div>
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.3321526707864!2d72.8010657142472!3d21.139175889377174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04df5707fbf79%3A0xa28cdf7e4650cb2c!2sAccrete%20InfoTech%20%7C%20Web%20development%20in%20Surat%20%7C%20Mobile%20Application%20development%20in%20Surat!5e0!3m2!1sen!2sin!4v1621581959804!5m2!1sen!2sin" width="1100" height="330" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="section-map-container container">
            <div class="text-center grid row">
               <div class="col-md-4">
                  <h4 class="entity-title">Address</h4>
                  <p class="mb-0 entity-subtext">Sidestate NSW 4132, Australia</p>
               </div>
               <div class="col-md-4">
                  <h4 class="entity-title">Email</h4>
                  <p class="mb-0 entity-subtext"><a href="mailto:info@amigosthemes.com">info@amigosthemes.com</a></p>
               </div>
               <div class="col-md-4">
                  <h4 class="entity-title">Support</h4>
                  <p class="mb-0 entity-subtext">(+88) 018 4113 6251</p>
               </div>
            </div>
         </div>
      
      <?php
         include'includes/cart.php';
      ?>
      
      <?php
        include'includes/footer.php';
      ?>
      
      <script src="assets/jquery/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery.validate.js"></script>
      <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
      <script>
      //Form Validation
        $( document ).ready( function () {
            $( "#contact" ).validate( {
                rules: {

                    name: "required",
                    email:
                    {
                      required: true,
                      email: true,
                    },
                    message: "required",
                },
                messages: {
                    
                    name: 
                    {
                     required: "Please enter your name*",
                    },
                    email:
                    {
                      required: "Please enter your registered email*",
                      email: "Please enter valid email*",
                    },
                    message:
                    {
                      required: "Please enter your message*",
                    },
   
                },
                errorElement: "em",
                errorPlacement: function ( error, element ) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass( "invalid-feedback" );

                    if ( element.prop( "type" ) === "checkbox" ) {
                        error.insertAfter( element.next("br") );
                    } else {
                        error.insertAfter( element );
                    }
                },
                highlight: function ( element, errorClass, validClass ) {
                    $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
                },
                unhighlight: function (element, errorClass, validClass) {
                    $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
                }
            } );

        } );
      </script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script><script src="assets/shuffle/shuffle.min.js"></script><script src="assets/waypoints/jquery.waypoints.min.js"></script><script src="assets/slick/slick.min.js"></script><script src="assets/js-cookie/js.cookie.js" type="text/javascript"></script><script src="assets/js/gmap/dark.js"></script><script src="assets/js/script.js"></script>
   </body>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/contact-us-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:50:53 GMT -->
</html>