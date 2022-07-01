<!DOCTYPE html>
<html>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/article-alt-sidebar-right.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:52:19 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />


   <?php

      session_start();

   include'includes/connection.php';
?>
   <!-- /Added by HTTrack -->
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
      <title>VRIHI - Blog Article</title>
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
                  <?php

                     $blog_id = $_REQUEST['blog_id'];
                     $sql = $link->rawQueryOne("select * from blogs where blog_id=?",array($blog_id));

                     ?>
                  <h1 class="section-title"><?php echo $sql['blog_title']; ?></h1>
                  <div class="mt-3">
                     <div class="page-breadcrumbs"><a class="content-link" href="index.php">Home</a><span class="mx-2">\</span><a class="content-link" href="blog_home.php">Blog</a><span class="mx-2">\</span><span>Article</span></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="container">
         <div class="sidebar-container">
            <div class="content">
               <section class="section">
                  <div class="entity">
                     <div class="entity-image"><img class="w-100 mw-100" src="admin-side/images/blogs_img/<?php echo $sql['blog_image']; ?>" alt=""></div>
                     <div class="entity-info-list">
                        <div class="row">
                           <div class="col-12 col-md-auto">
                              <div class="entity-date"><?php echo $sql['blog_date']; ?></div>
                           </div>
                           <div class="ccol-12 col-md-auto">
                              <div class="entity-categories"><?php echo $sql['blog_category']; ?></div>
                           </div>
                           <div class="col-12 col-md-auto">
                              <div class="entity-categories">Author: <?php echo $sql['blog_author']; ?></div>
                           </div>
                           <div class="col-12 col-md-auto">
                              <div class="entity-categories"><?php echo $sql['author_email']; ?></div>
                           </div>
                        </div>
                     </div>
                     <div class="entity-body">
                        <p>
                           <?php echo $sql['blog_description']; ?>
                        </p>
                        
                     </div>
                     <div class="entity-footer">
                        <div class="separator-line mb-3"></div>
                        <div class="entity-action-icons">
                           <div class="entity-actions-title">Share:</div>
                           <a class="content-link" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i> </a><a class="content-link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i> </a><a class="content-link" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i> </a><a class="content-link" href="#"><i class="fab fa-pinterest" aria-hidden="true"></i> </a><a class="content-link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <div class="sidebar section order-lg-last">
               <section class="section-sidebar">
                  <div class="mb-4 section-head">
                     <h3 class="section-title h4"><span>Similar posts</span></h3>
                  </div>
                  <div class="grid row">
                     <?php

                        $cat_name = $sql['blog_category'];
                        $qry = $link->rawQuery("select * from blogs where is_hiden=0 and blog_category=?",array($cat_name));

                        if($link->count>0)
                        {
                           foreach($qry as $data)
                           {
                        ?>
                     <div class="col-md-6 col-lg-12">
                        <article class="entity">
                           <div class="grid-sm row">
                              <div class="col-sm-5"><a class="entity-preview-show-up entity-preview" href="blog_article.php?blog_id=<?php echo $data['blog_id']; ?>"><span class="embed-responsive embed-responsive-6by4"><img class="embed-responsive-item" src="admin-side/images/blogs_img/<?php echo $data['blog_image']; ?>" alt=""></span><span class="with-back entity-preview-content"><span class="h3 m-auto text-theme text-center"><i class="fas fa-search"></i></span><span class="overflow-back bg-body-back opacity-70"></span></span></a></div>
                              <div class="col">
                                 <h4 class="h5 mb-2 entity-title"><a class="content-link" href="blog_article.php?blog_id=<?php echo $data['blog_id']; ?>"><?php echo $data['blog_title']; ?></a></h4>
                                 <div class="entity-date"><?php echo $data['blog_date']; ?></div>
                              </div>
                           </div>
                        </article>
                     </div>
                     <?php

                           }
                        }
                        else
                        {
                           echo "No Similar Posts Available*";
                        }
                        
                        ?>
                     
                  </div>
               </section>
            </div>
         </div>
      </div>
      
      <?php
         include'includes/cart.php';
      ?>
      
      <?php
        include'includes/footer.php';
      ?>

      <script src="assets/jquery/jquery-3.3.1.min.js"></script><script src="assets/bootstrap/js/bootstrap.min.js"></script><script src="assets/shuffle/shuffle.min.js"></script><script src="assets/waypoints/jquery.waypoints.min.js"></script><script src="assets/slick/slick.min.js"></script><script src="assets/js-cookie/js.cookie.js" type="text/javascript"></script><script src="assets/js/gmap/dark.js"></script><script src="assets/js/script.js"></script><script async defer="defer" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDBAbNXaCDOzujLCykXUvTylfbL1wUcaM&amp;callback=initMap"></script>
   </body>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/article-alt-sidebar-right.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:52:19 GMT -->
</html>