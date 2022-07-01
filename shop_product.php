<!DOCTYPE html>
<html>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/shop-alt-product-sidebar-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:55:07 GMT -->
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
      <title>VRIHI - Shop Product</title>
      <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="assets/animate.css/animate.min.css" rel="stylesheet" type="text/css">
      <link href="assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="assets/slick/slick.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&amp;display=swap" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet" type="text/css">
      <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css">

      <link rel="stylesheet" href="owlcarousel/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/dist/assets/owl.theme.default.min.css">

      <style>

/* The grid: Four equal columns that floats next to each other */
.gcolumn {
  float: left;
  width: 25;
  padding: 10px;
}

/* Style the images inside the grid */
.gcolumn img {
  opacity: 0.8; 
  cursor: pointer; 
}

.gcolumn img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.grow:after {
  content: "";
  display: table;
  clear: both;
}


#owl-demo .item img{
  display: block;
  width: 100px;
  margin: 4 auto;
  height: auto;
}
</style>

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
                  <?php

                              $product_id = $_REQUEST['product_id'];

                              $sql = $link->rawQueryOne("select * from product where product_id=?",array($product_id));


                           ?>
                  <h1 class="section-title"><?php echo $sql['product_name']; ?></h1>
                  <div class="mt-3">
                     <div class="page-breadcrumbs"><a class="content-link" href="index.php">Home</a><span class="mx-2">\</span><a class="content-link" href="category_products.php">Shop</a><span class="mx-2">\</span><span>Product</span></div>
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
                     <div class="grid col-auto px-0 row">
                        <div class="col-md-6">
                           <div class="position-relative entity-image">
                              <img id="expandedImg" class="w-100" src="admin-side/images/product_img/<?php echo $sql['product_img']; ?>" alt="" style="height: 450px; width:100px;">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <h2 class="mb-2 entity-title"><?php echo $sql['product_name']; ?></h2>
                           <div class="user-rating mb-1"><span class="rating-item"><i class="fas fa-star"></i></span> <span class="rating-item"><i class="fas fa-star"></i></span> <span class="rating-item"><i class="fas fa-star"></i></span> <span class="rating-item"><i class="fas fa-star"></i></span> <span class="rating-item"><i class="fas fa-star"></i></span></div>
                           <?php

                              $product_id = $_REQUEST['product_id'];

                              $price_sql = $link->rawQueryOne("select * from product_inventory where product_id=?",array($product_id));

                              if($link->count>0)
                              {
                           ?>
                           <div class="mb-3 entity-price"><span class="entity-price-current"><i class="fas fa-rupee-sign"></i><?php echo $price_sql['product_inventory_price']; ?></span></div>
                           <?php
                              }
                              else
                              {
                           ?>

                           <div class="mb-3 entity-price"><span class="entity-price-current"><i class="fas fa-rupee-sign"></i>0.00</span></div>

                           <?php
                              }
                           ?>
                           <div class="entity-action-btns">
                              <form autocomplete="off" method="GET" action="addtocart.php">
                                 <div class="row grid">
                                    <div class="col-auto">
                                       <div class="input-view-flat input-gray-shadow input-spin input-group"><input class="form-control" min="1" name="qty" type="number" id="qty" value="1"><span class="input-actions"><span class="input-decrement"><i class="fas fa-minus"></i></span><span class="input-increment"><i class="fas fa-plus"></i></span></span></div>
                                    </div>

                                    <input class="form-control" name="product_id" type="text" id="product_id" value="<?php echo $product_id; ?>" hidden>

                                    <input class="form-control" name="price" type="text" id="price" value="<?php echo $price_sql['product_inventory_price']; ?>" hidden>

                                    <input class="form-control" name="category_id" type="text" id="category_id" value="<?php echo $sql['category_id']; ?>" hidden>

                                    <div class="col-auto"><button class="btn-sm btn btn-theme" type="submit">add to cart</button></div>
                                 </div>
                              </form>
                           </div>
                           <ul class="mt-4 entity-list">
                              <li><span class="entity-list-title">Categories:</span><span class="entity-list-value"><span class="entity-categories">
                              <?php

                                 $cat_sql = $link->rawQueryOne("select * from category where category_id=?",array($sql['category_id']));
                              ?>
                                 <a href="category_products.php?category_id=<?php echo $sql['category_id']; ?>"><?php echo $cat_sql['category_name']; ?></a>
                              </span></span></li>
                           </ul>   
                        </div>
                     </div>
                     <br>
                     <?php

                              $product_id = $_REQUEST['product_id'];

                              $pg = $link->rawQuery("select * from product_gallery where product_id=?",array($product_id));

                              if($link->count > 0)
                              {
                           ?>
                              <div class="col-md-6">
                                    <div class="row">
                                   <div id="owl-demo" class="owl-carousel owl-theme">
                                    <div class="item">
                                       
                                        <img src="admin-side/images/product_img/<?php echo $sql['product_img']; ?>" alt="" style="height: 100px; width:100;" onclick="myFunction(this);">
                                    </div>   
                           <?php
                                 foreach($pg as $pgdata)
                                 {
                           ?>
                                   <div class="item"> 
                                     <img src="admin-side/images/product_gallery_image/<?php echo $pgdata['product_gallery_image']; ?>" alt="" style="height: 100px; width:100;" onclick="myFunction(this);">
                                    
                                   </div>
                           <?php
                                 }
                           ?>
                                 </div>
                                 </div>
                              </div>
                           <?php
                              }
                           ?>        

                     <div class="mb-4 entity-body">
                        <p><?php echo $sql['product_ld']; ?></p>
                     </div>
                     <ul class="font-weight-semibold entity-details-list">
                        <li><?php echo $sql['product_sd']; ?></li>
                     </ul>
                     <div class="entity-footer">
                        <div class="separator-line mb-3"></div>
                        <div class="entity-action-icons">
                           <div class="entity-actions-title">Share:</div>
                           <a class="content-link" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i> </a><a class="content-link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i> </a><a class="content-link" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i> </a><a class="content-link" href="#"><i class="fab fa-pinterest" aria-hidden="true"></i> </a><a class="content-link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="section-block">
                     <div class="section-head left">
                        <div class="section-head-content">
                           <h2 class="section-title">Comments</h2>
                        </div>
                     </div>
                     
                     <?php
                              $product_id=$_REQUEST['product_id'];
                              $r_data = $link->rawQuery("select * from review where product_id=?",array($product_id));
                                 if($link->count > 0)
                                    {
                                       foreach($r_data as $data)
                                          {
                       ?>
                     <div class="entity-block entity-hover-shadow">
                        <div class="pb-4 entity-content">
                           <div class="side-image entity-header">
                            <?php

                              $uimg = $link->rawQueryOne("select * from users where user_id=?",array($data['user_id']));
                            ?>
                              <div class="entity-image"><img class="mw-100" src="images/user_images/<?php echo $uimg['user_img']?>" alt=""></div>
                              <h5 class="mb-2 entity-title"><?php echo $data['user_name']; ?></h5>
                              <div class="entity-date"><span class="text-theme"><i class="fas fa-calendar-alt"></i></span>&nbsp;&nbsp;&nbsp;<?php echo $data['date']; ?></div>
                           </div>
                           <p class="entity-text"><?php echo $data['message']; ?></p>
                           <!-- <div class="entity-footer">
                              <div class="entity-actions"><a href="#"><i class="fas fa-reply"></i>&nbsp;&nbsp;reply</a><a href="#"><i class="fas fa-quote-left"></i>&nbsp;&nbsp;quote</a></div>
                           </div> -->
                        </div>
                     </div>
                     <?php
                           }
                        }
                     ?>

                  <div class="section-block">
                     <div class="section-head left">
                        <div class="section-head-content">

                           <h2 class="section-title">Add Comment</h2>
                        </div>
                     </div>
                      <?php

                              $product_id=$_REQUEST['product_id'];
                                 
                       ?>
                     <form autocomplete="off" method="post" name="comment" id="comment" action="reviewcode.php?product_id=<?php echo $product_id; ?>">

                        <div class="row grid">
                           <div class="col-12 ">
                              <div class="input-view-flat input-gray-shadow form-group">
                                 <label class="required">Your Name</label>
                                 <div class="input-group"><input class="form-control" id="name" name="name" type="text" placeholder="Name" value=""></div>
                              </div>
                           </div>
                        
                           <div class="col-12">
                              <div class="input-view-flat input-gray-shadow form-group">
                                 <label class="required">Your Message</label>
                                 <div class="input-group"><textarea class="form-control" id="mess" name="mess" placeholder="Message" value="<?php echo $data['blog_category']; ?>"></textarea></div>
                              </div>
                           </div>
                           <div class="col-12"><button class="btn-wide mb-0 btn btn-theme" type="submit">add comments</button>
                           </div>
                        </div>
                     </form>
                     
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

      <script>
         function myFunction(imgs) {
           var expandImg = document.getElementById("expandedImg");
           expandImg.src = imgs.src;
           expandImg.parentElement.style.display = "block";
         }

         $(document).ready(function() {
 
           $("#owl-demo").owlCarousel({
          
           });
          
         });

         $( '#owl-demo' ).owlCarousel({
          items: 4,
          nav: true,
          dots: false,
          mouseDrag: true,
          responsiveClass: true,
          responsive: {
              0:{
                items: 1
              },
              480:{
                items: 3
              },
              769:{
                items: 4
              }
          }
      });

      </script>
<script src="owlcarousel/dist/owl.carousel.min.js"></script>
   </body>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/shop-alt-product-sidebar-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:55:07 GMT -->
</html>