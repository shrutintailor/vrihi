<!DOCTYPE html>
<html>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/forgot-password-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:55:08 GMT -->
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
      <title>VRIHI - Forgot-Password</title>
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
            <div class="overflow-back cover-image mw-100" data-background="assets/images/content/x/antioxidant-beverage-blended-1328887.jpg"></div>
            <div class="overflow-back bg-crimson opacity-70"></div>
         </div>
         <div class="content-offs-stick my-5 container">
            <div class="section-solid">
               <div class="z-index-4 position-relative">
                  <h1 class="section-title">Forgot password</h1>
                  <div class="mt-3">
                     <div class="page-breadcrumbs"><a class="content-link" href="index.php">Home</a><span class="mx-2">\</span><span>Forgot password</span></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section">
         <div class="section-head">
            <div class="section-icon"><span class="svg-fill-bittersweet svg-content" data-svg="assets/images/svg/title-watermelon.svg"></span></div>
            <div class="section-head-content">
               <h2 class="section-title">Forgot Password?</h2>
               <p class="section-text">To receive a new password, enter your email address below.</p>
            </div>
         </div>
         <div class="container">
            <div class="row"></div>
            <div class="row">
               <div class="col-sm-10 col-md-8 col-lg-5 mx-auto">
                  <form name="fpass" id="fpass">
                     <div class="row grid">
                        <div class="col-12">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <div class="input-group">

                                 <input class="form-control" name="email" id="email" placeholder="Email">

                              </div>
                           </div>
                        </div>
                        <div class="col-auto mx-auto"><button class="btn-wide mb-0 btn btn-theme" type="submit">send</button></div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
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
            $( "#fpass" ).validate( {
                rules: {
                    email:
                    {
                      required: true,
                      email: true,
                    },
                },
                messages: {
                    
                    email:
                    {
                      required: "Please enter your registered email*",
                      email: "Please enter valid email*",
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
      <script src="assets/bootstrap/js/bootstrap.min.js"></script><script src="assets/shuffle/shuffle.min.js"></script><script src="assets/waypoints/jquery.waypoints.min.js"></script><script src="assets/slick/slick.min.js"></script><script src="assets/js-cookie/js.cookie.js" type="text/javascript"></script><script src="assets/js/gmap/dark.js"></script><script src="assets/js/script.js"></script><script async defer="defer" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDBAbNXaCDOzujLCykXUvTylfbL1wUcaM&amp;callback=initMap"></script>
   </body>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/forgot-password-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:55:08 GMT -->
</html>