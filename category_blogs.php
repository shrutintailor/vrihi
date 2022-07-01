<!DOCTYPE html>
<html>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/blog-blocks-alt-sidebar-right.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:52:19 GMT -->
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
      <title>VRIHI - Blogs</title>
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
                  <h1 class="section-title">Blog</h1>
                  <div class="mt-3">
                     <div class="page-breadcrumbs"><a class="content-link" href="index.php">Home</a><span class="mx-2">\</span><span><a class="content-link" href="blog_home.php">Blog</a></span></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="container">
         <div class="sidebar-container">
            <div class="content">
               <section class="section">
                  <div class="container">
                     <div class="grid row">
                        <?php

                        $cat_name = $_REQUEST['blog_category'];
                        $qry = $link->rawQuery("select * from blogs where is_hiden=0 and blog_category=?",array($cat_name));

                        if($link->count>0)
                        {
                           foreach($qry as $data)
                           {
                        ?>
                        <div class="col-12 col-md-6 col-xl-4 d-flex">
                           <article class="entity-block entity-hover-shadow entity-image-on-top text-center">
                              <a class="entity-preview-show-up entity-preview" href="blog_article.php?blog_id=<?php echo $data['blog_id']; ?>"><span class="embed-responsive embed-responsive-6by4"><img class="embed-responsive-item" src="admin-side/images/blogs_img/<?php echo $data['blog_image']; ?>" alt=""></span><span class="with-back entity-preview-content"><span class="overflow-back bg-body-back opacity-70"></span><span class="m-auto h1 text-theme text-center"><i class="fas fa-search"></i></span></span></a>
                              <div class="entity-content">
                                 <h4 class="entity-title"><a class="content-link" href="blog_article.php?blog_id=<?php echo $data['blog_id']; ?>"><?php echo $data['blog_title'] ?></a></h4>
                                 <div class="entity-date text-theme mb-3"><?php echo $data['blog_date'] ?></div>
                                 <p>Author: <?php echo $data['blog_author'] ?></p><br>
                                 <div class="mt-auto entity-action-btns"><a class="btn btn-theme" href="blog_article.php?blog_id=<?php echo $data['blog_id']; ?>">read blog</a></div>
                              </div>
                           </article>
                        </div>
                        <?php

                           }
                        }
                        else
                        {
                           ?>
                              <p> No blogs available as for now... </p>
                           <?php
                        }
                        
                        ?>
                     </div>
                  </div>
                  <div class="section-footer">
                     
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
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/blog-blocks-alt-sidebar-right.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:52:19 GMT -->
</html>