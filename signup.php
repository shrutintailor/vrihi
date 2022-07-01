<!DOCTYPE html>
<html>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/sign-up-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:55:08 GMT -->
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
      <title>VRIHI - Sign-Up</title>
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
                  <h1 class="section-title">Sign up</h1>
                  <div class="mt-3">
                     <div class="page-breadcrumbs"><a class="content-link" href="index.php">Home</a><span class="mx-2">\</span><span>Sign up</span></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section">
         <div class="section-head">
            <div class="section-icon"><span class="svg-fill-light-green svg-content" data-svg="assets/images/svg/title-grape.svg"></span></div>
            <div class="section-head-content">
               <h2 class="section-title">Sign Up</h2>
               <p class="section-text">Join our big family.</p>
            </div>
         </div>
         <div class="container">
            <div class="row"></div>
            <div class="row">
               <div class="col-sm-12 col-md-10 col-lg-7 mx-auto">
                  <form name="signup" id="signup" method="POST" action="signupCode.php">
                     <div class="row grid">
                        <div class="col-sm-6">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <label class="required">First name</label>
                              <div class="input-group"><input class="form-control" name="fname" id="fname" type="text" placeholder="First name"></div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <label class="required">Last name</label>
                              <div class="input-group"><input class="form-control" name="lname" id="lname" type="text" placeholder="Last name"></div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <label class="required">Birth Date</label>
                              <div class="input-group"><input class="form-control" name="date" id="date" type="date"></div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <label class="required">Your Email</label>
                              <div class="input-group"><input class="form-control" name="email" id="email" type="email" placeholder="Email"></div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <label class="required">Password</label>
                              <div class="input-group"><input class="form-control" name="pass" id="pass" type="password" placeholder="Password"></div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <label class="required">Confirm password</label>
                              <div class="input-group"><input class="form-control" name="cnpass" id="cnpass" type="password" placeholder="Confirm password"></div>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <label class="required">Address</label>
                              <div class="input-group"><input class="form-control" name="add1" id="add1" type="text" placeholder="Address"></div>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <label class="required">Address 2</label>
                              <div class="input-group"><input class="form-control" name="add2" id="add2" type="text" placeholder="Address 2"></div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <label class="required">Town / City</label>
                              <div class="input-group"><input class="form-control" name="city" id="city" type="text" placeholder="Town / City"></div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <label class="required">Postcode / Zip</label>
                              <div class="input-group"><input class="form-control" name="zip" id="zip" type="number" placeholder="Postcode / Zip"></div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <label class="required">State</label>
                              <div class="input-group"><input class="form-control" name="state" id="state" type="text" placeholder="State"></div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <label class="required">Phone</label>
                              <div class="input-group"><input class="form-control" name="phone" id="phone" type="number" placeholder="Phone"></div>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <div class="form-check"><input class="form-check-input" type="checkbox" id="terms" name="terms" value="yes" required="true"><span class="form-check-icon"></span><label class="form-check-label" for="terms-and-conditions">I've read &amp; accept the <a href="#" target="_blank">terms &amp; conditions</a></label></div>
                           </div>
                        </div>
                        <div class="col-auto mx-auto">
                          <?php
                          if(isset($_REQUEST['err']) && $_REQUEST['err']==1)
                          {
                              ?>
                        <div class="err">
                        
                                  <p style="color:red;">This email is already registered, try another*</p>
                            
                       </div>
                       <br>
                       <?php
                          }
                          else if(isset($_REQUEST['err']) && $_REQUEST['err']==2)
                          {
                              ?>
                        <div class="err">
                        
                                  <p style="color:red;">This phone number is already registered, try another*</p>
                            
                       </div>
                       <br>
                       <?php
                          }

                        ?>
                          <button class="btn-wide mb-0 btn btn-theme" type="submit">sign up</button></div>
                        <div class="col-12 text-center">Already have an account?&nbsp;<a href="signin.php">Sign in</a></div>
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
            $( "#signup" ).validate( {
                rules: {
                    fname: "required",
                    lname: "required",
                    date: "required",
                    state: "required",
                     email:
                    {
                      required: true,
                      email: true
                    },                   
                   zip:
                    {
                      required: true,
                      digits: true,
                      minlength: 6,
                      maxlength: 6
                    },
                    add1: "required",
                    add2: "required",
                    city: "required",
                   phone: {
                     required: true,
                     digits: true,
                      maxlength: 10
                   },
                    pass: 
                    {
                     required: true,
                     maxlength: 8
                    },
                    cnpass:
                    {
                      required: true,
                      equalTo: "#pass"
                    },
                },
                messages: {
                    
                    fname: "Please enter first name *",
                    lname: "Please enter last name *",
                    uname: "Please Enter valid username *",
                    state: "Please enter state *",
                    date: "Please select date *",
                    email:
                    {
                      required: "Please Enter E-mail *",
                      email: "Please Enter Valid E-mail *"
                    },
                    
                    zip:
                    {
                      required: "Please Enter Pincode *",
                      digits: "Please Enter Only Digits *",
                      minlength: "Please Enter Only 6 Digits *",
                      maxlength: "Please Enter Only 6 Digits *"
                    },
                    add1: "Please Enter Address1 *",
                    add2: "Please Enter Address2 *",
                    city: "Please Enter city *",
                    phone: {
                     required: "Please enter number *",
                     digits: "olny digits are allowed *",
                      maxlength: "max 10 digits allowed *"
                    },
                    pass:
                    {
                     required: "Please Enter Password *",
                     maxlength: "maximum 8 characters allowed for password*"
                    },
                    cnpass:
                    {
                      required: "Please Enter Confirm Password *",
                      equalTo: "Both Password Not Match *"
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
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/shuffle/shuffle.min.js"></script><script src="assets/waypoints/jquery.waypoints.min.js"></script><script src="assets/slick/slick.min.js"></script><script src="assets/js-cookie/js.cookie.js" type="text/javascript"></script><script src="assets/js/gmap/dark.js"></script><script src="assets/js/script.js"></script><script async defer="defer" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDBAbNXaCDOzujLCykXUvTylfbL1wUcaM&amp;callback=initMap"></script>
   </body>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/sign-up-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:55:08 GMT -->
</html>