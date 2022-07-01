<!DOCTYPE html>
<html>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/user-dashboard-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:55:08 GMT -->
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
      <title>VRIHI - Dashboard</title>
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
                  <h1 class="section-title">Dashboard</h1>
                  <div class="mt-3">
                     <div class="page-breadcrumbs"><a class="content-link" href="index.php">Home</a><span class="mx-2">\</span><span>Dashboard</span></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="section mb-0 container text-center">
         <nav class="line-navbar">
            <ul class="nav">
               <li class="nav-item"><a class="nav-link active" href="user_dashboard.php">Dashboard</a></li>
               <li class="nav-item"><a class="nav-link" href="user_profile.php">Profile</a></li>
               <li class="nav-item"><a class="nav-link" href="user_orders.php">Orders</a></li>
               <li class="nav-item"><a class="nav-link" href="user_security.php">Security</a></li>
            </ul>
            <div class="separator-line wide mirror"></div>
         </nav>
      </div>
      <section class="mt-5 entity section">
         <div class="container">
            <div class="grid align-items-center row">
               <div class="col-auto">
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
                  <div class="d-inline-block mb-0 entity-image"><img class="mw-100" src="images/user_images/<?php echo $query['user_img']; ?>" style="height: 100px; width: 100px;" alt=""></div>
               </div>
               <div class="col-auto col-lg">
                  <h5 class="mb-0 entity-title"><?php echo $query['first_name']." ".$query['last_name']?></h5>
                  <p class="mb-0 entity-text"><?php echo $query['user_city']?>, <?php echo $query['user_state']?></p>
               </div>
               <div class="col-sm-6 col-lg-4">
                  <div class="entity-detail-side-icon"><span class="entity-detail-icon text-theme"><i class="far fa-envelope fa-fw"></i></span><?php echo $query['user_email']?></div>
                  <div class="entity-detail-side-icon"><span class="entity-detail-icon text-theme"><i class="fas fa-phone-volume fa-fw"></i></span>+91 <?php echo $query['user_contact']?></div>
               </div>
               <div class="col-sm-6 col-lg-4">
                  <div class="entity-detail-side-icon"><span class="entity-detail-icon text-theme"><i class="fas fa-map-marker-alt fa-fw"></i></span><?php echo $query['user_address1']?>,<br><?php echo $query['user_city']?>, <?php echo $query['user_state']?>, <?php echo $query['user_pincode']?></div>
               </div>
            </div>
         </div>
      </section>
      
         <div align="center">
            <a class="btn btn-theme" href="signOut.php">Sign Out</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-theme" href="deleteUsr.php">Delete Account</a>
         </div>

      
      <?php
         include'includes/cart.php';
      ?>
       
      <?php
        include'includes/footer.php';
      ?>

      <script src="assets/jquery/jquery-3.3.1.min.js"></script><script src="assets/bootstrap/js/bootstrap.min.js"></script><script src="assets/shuffle/shuffle.min.js"></script><script src="assets/waypoints/jquery.waypoints.min.js"></script><script src="assets/slick/slick.min.js"></script><script src="assets/js-cookie/js.cookie.js" type="text/javascript"></script><script src="assets/js/gmap/dark.js"></script><script src="assets/js/script.js"></script><script async defer="defer" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDBAbNXaCDOzujLCykXUvTylfbL1wUcaM&amp;callback=initMap"></script>
   </body>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/user-dashboard-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:55:08 GMT -->
</html>