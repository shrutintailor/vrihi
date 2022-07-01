<!DOCTYPE html>
<html>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/user-orders-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:55:09 GMT -->
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
      <title>VRIHI - Orders</title>
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
                  <h1 class="section-title">Orders</h1>
                  <div class="mt-3">
                     <div class="page-breadcrumbs"><a class="content-link" href="index.php">Home</a><span class="mx-2">\</span><span>Orders</span></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="section mb-0 container text-center">
         <nav class="line-navbar">
            <ul class="nav">
               <li class="nav-item"><a class="nav-link" href="user_dashboard.php">Dashboard</a></li>
               <li class="nav-item"><a class="nav-link" href="user_profile.php">Profile</a></li>
               <li class="nav-item"><a class="nav-link active" href="user_orders.php">Orders</a></li>
               <li class="nav-item"><a class="nav-link" href="user_security.php">Security</a></li>
            </ul>
            <div class="separator-line wide mirror"></div>
         </nav>
      </div>
      <section class="mt-5 section">
         <div class="container">
            <div class="order-line-head-entity d-none d-md-block">
               <div class="entity-line-head">
                  <div class="entity-order-number">Order</div>
                  <div class="entity-title">Products</div>
                  <div class="entity-date">Date</div>
                  <div class="entity-total">Total</div>
                  <div class="entity-status">Status</div>
               </div>
            </div>
            <div class="entity-accordion-group">
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

                 $conn = mysqli_connect('localhost', 'root', '','dbvrihi');  
                            if (! $conn) {  
                              die("Connection failed" . mysqli_connect_error());  
                            }  
                            else {  
                               mysqli_select_db($conn, 'pagination');  
                            }  
                         //define total number of results you want per page  
                         $results_per_page = 4;  
                       
                         //find the total number of results stored in the database  
                         $query = "select *from order_item where user_id=$uid and order_product_id!=0";  
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
                         $query = "SELECT *FROM order_item where user_id=$uid and order_product_id!=0 LIMIT " . $page_first_result . ',' . $results_per_page;  
                         $result = mysqli_query($conn, $query);  

                          //display the retrieved result on the webpage  
                         while ($data = mysqli_fetch_array($result)) 
                         {  

               ?>
               <div class="order-line-entity dash-separated-entity entity-hover-only-shadow-block entity-expandable" id="order-923776A" data-theme-accordion="orders-list">
                  <div class="entity-line-head entity-expand-head">
                     <div class="entity-expand">
                        <div class="entity-active-rotate"><i class="fas fa-angle-double-down fa-fw"></i></div>
                     </div>
                     <div class="entity-number"><?php echo $data['order_product_id']?></div>
                     <div class="entity-break d-sm-none"></div>
                     <?php

                        $pdata = $link->rawQueryOne("select * from product where product_id=?",array($data['product_id']));
                     ?>
                     <div class="entity-title"><?php echo $pdata['product_name']?></div>
                     <div class="entity-break d-md-none"></div>
                     <?php

                        $odata = $link->rawQueryOne("select * from order_product where order_product_id=?",array($data['order_product_id']));
                     ?>
                     <div class="entity-date"><?php echo $odata['order_date']?></div>
                     
                     <div class="entity-total"><?php echo $data['total']?></div>
                     <div class="entity-status">
                        
                        <?php 

                           $status = $odata['status_id'];

                           if($status == 1)
                           {
                              echo "In Process";
                           }
                           else if($status == 2)
                           {
                              echo "Shipping";
                           }  
                           else if($status == 3)
                           {
                              echo "Delivered";
                           }     

                        ?>
                           
                        </div>
                  </div>
                  <div class="entity-expanded-content">
                     <div class="separator-dashed"></div>
                     <div class="entity-line-items">
                        <div class="line-entity">
                           <div class="entity-line-image"><a class="entity-preview-show-up entity-preview" href="shop_product.php?product_id=<?php echo $data['product_id']?>"><span class="embed-responsive embed-responsive-4by3"><img class="embed-responsive-item" src="admin-side/images/product_img/<?php echo $pdata['product_img']?>" alt=""></span><span class="with-back entity-preview-content"><span class="h3 m-auto text-theme text-center"><i class="fas fa-search"></i></span><span class="overflow-back bg-body-back opacity-70"></span></span></a></div>
                           <div class="entity-title"><a class="content-link" href="shop_product.php?product_id=<?php echo $data['product_id']?>"><?php echo $pdata['product_name']?></a></div>
                           <div class="entity-break d-md-none"></div>
                           <div class="entity-price"><?php echo $data['price']?></div>
                           <div class="entity-quantity">X<?php echo $data['qty']?></div>
                           <div class="entity-total"><?php echo $data['total']?></div>
                        </div>
                     </div>
                     <div class="separator-dashed"></div>
                     <div class="entity-content-details">
                        <div class="entity-content-title">Order information</div>
                        <div class="row">
                           <div class="col-md-6 col-lg-4">
                              <ul class="main-list entity-list">

                                 <li><span class="entity-list-title">Receiver:</span><span class="entity-list-value"><?php echo $odata['order_fullName']?></span></li>
                                 <li><span class="entity-list-title">Addresss:</span><span class="entity-list-value"></span></li>
                                 <li><span class="entity-list-title"></span><span class="entity-list-value"><?php echo $odata['order_address']?></span></li>
                              </ul>
                           </div>
                           <div class="mt-4 mt-lg-0 col-md-6 col-lg-4">
                              <ul class="flex-list entity-list">
                                 <li class="entity-detail-subtotal"><span class="entity-list-title">Sub total:</span><span class="entity-list-value"><?php echo $data['total']?></span></li>
                                 <li class="entity-detail-subtotal"><span class="entity-list-title">Shipping:</span><span class="entity-list-value">FREE</span></li>
                                 <li class="separator-line my-3"></li>
                                 <li class="entity-detail-total"><span class="entity-list-title">Total:</span><span class="entity-list-value"><?php echo $data['total']?></span></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php
                  }
               ?>
            </div>
         </div>
         <div class="section-footer">
            <div class="paginator">
                        <?php 

                        for($page = 1; $page<= $number_of_page; $page++) 
                        {  
                           ?>
                            
                             <a href = "user_orders.php?page=<?php echo $page ?>"><?php echo $page ?>&nbsp;&nbsp;</a> 

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
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/user-orders-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:55:09 GMT -->
</html>