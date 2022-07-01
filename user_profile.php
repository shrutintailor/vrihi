<!DOCTYPE html>
<html>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/user-profile-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:55:08 GMT -->
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
      <title>VRIHI - Profile</title>
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
                  <h1 class="section-title">Profile</h1>
                  <div class="mt-3">
                     <div class="page-breadcrumbs"><a class="content-link" href="index.php">Home</a><span class="mx-2">\</span><span>Profile</span></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="section mb-0 container text-center">
         <nav class="line-navbar">
            <ul class="nav">
               <li class="nav-item"><a class="nav-link" href="user_dashboard.php">Dashboard</a></li>
               <li class="nav-item"><a class="nav-link active" href="user_profile.php">Profile</a></li>
               <li class="nav-item"><a class="nav-link" href="user_orders.php">Orders</a></li>
               <li class="nav-item"><a class="nav-link" href="user_security.php">Security</a></li>
            </ul>
            <div class="separator-line wide mirror"></div>
         </nav>
      </div>
      <section class="mt-0 section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 col-md-10 col-lg-7 mx-auto">
                  <form name="Profile" id="Profile" method="POST" enctype="multipart/form-data" action="update_user.php">
                     <h2 class="section-title text-center my-5">Personal information</h2>
                     <div class="row grid">
                        <div class="col-sm-6">
                           <div class="input-view-flat input-gray-shadow form-group">
                            <?php

                               if(isset($_SESSION['user_id']) && $_SESSION['user_id']!=null)
                               {
                                  $sflag=1;
                                  $uid=$_SESSION['user_id'];
                               }
                               else
                               {
                                  $sflag=0;
                                  $uid=session_id();
                               }

                               $query = $link->rawQueryOne("select * from users where user_id=?",array($uid));

                            ?>
                              <label class="required">First name</label>
                              <div class="input-group"><input class="form-control" name="firstName" id="firstName" type="text" placeholder="First name" value="<?php echo $query['first_name']?>"></div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <label class="required">Last name</label>
                              <div class="input-group"><input class="form-control" name="lastName" id="lastName" type="text" placeholder="Last name" value="<?php echo $query['last_name']?>"></div>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <label class="required">Your Email</label>
                              <div class="input-group"><input class="form-control" name="email" id="email" type="email" placeholder="Email" value="<?php echo $query['user_email']?>"></div>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="input-view-flat input-gray-shadow form-group-preview">
                              
                              <div class="my-auto form-group">
                                 <label>Upload new profile picture</label>
                                 <div class="input-group-file">
                                    <input class="form-control-file" name="avatar" id="avatar" type="file">
                                    <div class="input-group"><input class="form-control" name="avatarPlaceholder" id="avatarPlaceholder" type="text" placeholder="No file choosen"></div>
                                    <a class="form-control-file-btn btn btn-theme" href="#">choose file</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <h2 class="section-title text-center my-5">Billing address</h2>
                     <div class="row grid">
                        <div class="col-12">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <label class="required">Address</label>
                              <div class="input-group"><input class="form-control" name="address" id="address" type="text" placeholder="Your address" value="<?php echo $query['user_address1']?>"></div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <label class="required">Town / City</label>
                              <div class="input-group"><input class="form-control" name="city" id="city" type="text" placeholder="Your city" value="<?php echo $query['user_city']?>"></div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <label class="required">Postcode / Zip</label>
                              <div class="input-group"><input class="form-control" name="zip" id="zip" type="number" placeholder="Zip/Pin Code" value="<?php echo $query['user_pincode']?>"></div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <label class="required">State</label>
                              <div class="input-group"><input class="form-control" name="state" id="state" type="text" placeholder="Your state" value="<?php echo $query['user_state']?>"></div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="input-view-flat input-gray-shadow form-group">
                              <label class="required">Phone</label>
                              <div class="input-group"><input class="form-control" name="phone" id="phone" type="number" placeholder="Your phone/contact number" value="<?php echo $query['user_contact']?>"></div>
                           </div>
                        </div>
                     </div>
                     <div class="row grid mt-0">
                        <div class="col-auto mx-auto"><button class="btn-wide mb-0 btn btn-theme" type="submit">update</button></div>
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
            $( "#Profile" ).validate( {
                rules: {

                    firstName: "required",
                    lastName: "required",
                    login: "required",
                    email:
                    {
                      required: true,
                      email: true,
                    },
                    address: "required",
                    city: "required",
                    zip: "required",
                    state: "required",
                    phone:
                    {
                     required: true,
                     maxlength: 10,
                     minlength: 10,
                    }
                },
                messages: {
                    
                    firstName: 
                    {
                     required: "Please enter your first name*",
                    },
                    lastName: 
                    {
                     required: "Please enter your last name*",
                    },
                    login: 
                    {
                     required: "Please enter your user name*",
                    },
                    email:
                    {
                      required: "Please enter your registered email*",
                      email: "Please enter valid email*",
                    },
                    address:
                    {
                      required: "Please enter your address*",
                    },
                    city:
                    {
                      required: "Please enter your city*",
                    },
                    zip:
                    {
                      required: "Please enter your Zip/Pin Code*",
                    },
                    state:
                    {
                      required: "Please enter your state*",
                    },
                    phone:
                    {
                     required: "Please enter your contact number*",
                     maxlength: "Please enter valid contact number of 10 digits*",
                     minlength: "Please enter valid contact number of 10 digits*",
                    }     
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
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/user-profile-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:55:08 GMT -->
</html>