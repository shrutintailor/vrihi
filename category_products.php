<!DOCTYPE html>
<html>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/shop-alt-3-cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:55:07 GMT -->
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
      <title>VRIHI - CategoryProducts</title>
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
                  <?php

                     $category_id = $_REQUEST['category_id'];

                     $sql = $link->rawQueryOne('select * from category where category_id=?',array($category_id));
                  ?>
                  <h1 class="section-title"><?php echo $sql['category_name']; ?></h1>
                  <div class="mt-3">
                     <div class="page-breadcrumbs"><a class="content-link" href="index.php">Home</a><span class="mx-2">\</span><span>Shop</span></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section">
         <div class="container">
            <div class="grid row">

               
                  <?php

                        $conn = mysqli_connect('localhost', 'root', '','dbvrihi');  
                            if (! $conn) {  
                              die("Connection failed" . mysqli_connect_error());  
                            }  
                            else {  
                               mysqli_select_db($conn, 'pagination');  
                            }  
                         //define total number of results you want per page  
                         $results_per_page = 6;  
                       
                         //find the total number of results stored in the database
                         $category_id = $_REQUEST['category_id'];  
                         $query = "select * from product where product_active=1 and category_id=$category_id";  
                         $result = mysqli_query($conn, $query);  
                         $number_of_result = mysqli_num_rows($result);  
                       
                         //determine the total number of pages available  
                         $number_of_page = ceil ($number_of_result / $results_per_page);  
                       
                         //determine which page number visitor is currently on  
                         if (!isset ($_GET['page']) ) {  
                             $page = 1;  
                         } else {  
                             $page = $_GET['page'];  
                         }  
                       
                         //determine the sql LIMIT starting number for the results on the displaying page  
                         $page_first_result = ($page-1) * $results_per_page;  
                       
                         //retrieve the selected results from database   
                         $query = "SELECT *FROM product where product_active=1 and category_id=$category_id LIMIT " . $page_first_result . ',' . $results_per_page;  
                         $result = mysqli_query($conn, $query);  

                          //display the retrieved result on the webpage  
                         while ($data = mysqli_fetch_array($result)) 
                         {  
                                    
                        ?>

                  <div class="col-12 col-md-6 col-xl-4 d-flex">
                  <article class="entity-block entity-hover-shadow">
                     <a class="entity-preview-show-up entity-preview" href="shop_product.php?product_id=<?php echo $data['product_id']; ?>"><span class="embed-responsive embed-responsive-4by3"><img class="embed-responsive-item" src="admin-side/images/product_img/<?php echo $data['product_img']; ?>" alt=""></span><span class="with-back entity-preview-content"><span class="overflow-back bg-body-back opacity-70"></span><span class="m-auto h1 text-theme text-center"><i class="far fa-eye"></i></span></span></a>
                     <div class="fill-color-line" data-role="fill-line">
                        <div class="opacity-30 fill-line-segment bg-theme" data-role="fill-line-segment" data-min-width="10" data-preffered-width="50" data-max-width="80"></div>
                        <div class="opacity-60 fill-line-segment bg-theme" data-role="fill-line-segment" data-min-width="10" data-preffered-width="50" data-max-width="80"></div>
                        <div class="fill-line-segment bg-theme" data-role="fill-line-segment" data-min-width="10" data-preffered-width="50" data-max-width="80"></div>
                     </div>
                     <div class="entity-content">
                        <h4 class="entity-title"><a class="content-link" href="shop_product.php?product_id=<?php echo $data['product_id']; ?>"><?php echo $data['product_name']; ?></a></h4>
                        <p class="entity-text"><?php echo $data['product_sd']; ?></p>
                        <div class="entity-bottom-line">
                           <?php

                              $price_sql = $link->rawQueryOne("select * from product_inventory where product_id=?",array($data['product_id']));

                              if($link->count>0)
                              {
                           ?>
                           <div class="entity-price"><span class="currency"><i class="fas fa-rupee-sign"></i></span><?php echo $price_sql['product_inventory_price']; ?><span class="price-unit"></span></div>
                           <?php

                              }
                              else
                              {
                                 ?>
`                          <div class="entity-price"><span class="currency"><i class="fas fa-rupee-sign"></i>                          </span>0.00/ kg<span class="price-unit"></span></div>
                                 <?php
                              }
                           ?>
                           <div class="entity-action-btns"><a class="btn-sm btn btn-theme" href="shop_product.php?product_id=<?php echo $data['product_id']; ?>">view product</a></div>
                        </div>
                     </div>
                  </article>
               </div>
                  <?php
                     }
                  ?>

               </div>
            </div>
         </div>
         <div class="section-footer">
            <div class="paginator">
               <?php 

                        for($page = 1; $page<= $number_of_page; $page++) 
                        {  
                           ?>
                            
                             <a href = "category_products.php?page=<?php echo $page ?>&&category_id=<?php echo $category_id ?>"><?php echo $page ?>&nbsp;&nbsp;</a> 

                             <?php
                         }  
                         ?>
            </div>             
         </div>
      </section>
      
      <?php
         include'includes/cart.php';
      ?>

      <?php
        include'includes/footer.php';
      ?>

      <script src="assets/jquery/jquery-3.3.1.min.js"></script><script src="assets/bootstrap/js/bootstrap.min.js"></script><script src="assets/shuffle/shuffle.min.js"></script><script src="assets/waypoints/jquery.waypoints.min.js"></script><script src="assets/slick/slick.min.js"></script><script src="assets/js-cookie/js.cookie.js" type="text/javascript"></script><script src="assets/js/gmap/dark.js"></script><script src="assets/js/script.js"></script><script async defer="defer" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDBAbNXaCDOzujLCykXUvTylfbL1wUcaM&amp;callback=initMap"></script>
   </body>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/shop-alt-3-cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:55:07 GMT -->
</html>