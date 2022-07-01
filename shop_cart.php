<!DOCTYPE html>
<html>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/shop-alt-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:55:08 GMT -->
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
      <title>VRIHI - Cart</title>
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
                  <h1 class="section-title">Shop Cart</h1>
                  <div class="mt-3">
                     <div class="page-breadcrumbs"><a class="content-link" href="index.php">Home</a><span class="mx-2">\</span><a class="content-link" href="shop.php">Shop</a><span class="mx-2">\</span><span>Cart</span></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="mb-0 section">
            <form method="post" class="container" name="cart_form" action="insert_order_item.php" id="cart_form">
            <div class="cart-items">
               <div class="cart-header">
                  <h2 class="cart-title">Products in Your Cart</h2>
                  <div class="cart-item-title">Product</div>
                  <div class="cart-item-price">Price</div>
                  <div class="cart-item-quantity">Quantity</div>
                  <div class="cart-item-total">Total</div>
                  <div class="cart-item-remove"></div>
               </div>
               
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

               $query = $link->rawQuery("select * from cart where user_id=? and order_id=0",array($uid));

               if ($link->count > 0) 
               {
                  foreach($query as $data)
                  {

               ?>
               <input type="hidden" id="cart_id[]" name="cart_id[]" value="<?php echo $data['cart_id'];?>">
               <input type="hidden" id="product_id[]" name="product_id[]" value="<?php echo $data['product_id'];?>">
               <input type="hidden" id="user_id[]" name="user_id[]" value="<?php echo $uid;?>">
               <input type="hidden" id="price[]" name="price[]" value="<?php echo $data['price'];?>">
               <input type="hidden" id="qty[]" name="qty[]" value="<?php echo $data['qty'];?>">
               <div class="cart-item-entity">
                  <div class="cart-item-image"><a class="entity-preview-show-up entity-preview" href="shop_product.php?product_id=<?php echo $data['product_id']; ?>"><span class="embed-responsive embed-responsive-4by3">

                     <?php

                        $img = $link->rawQueryOne("select * from product where product_id=?",array($data['product_id']));
                     ?>

                     <img class="embed-responsive-item" src="admin-side/images/product_img/<?php echo $img['product_img'] ?>" alt=""></span><span class="with-back entity-preview-content"><span class="h3 m-auto text-theme text-center"><i class="fas fa-search"></i></span><span class="overflow-back bg-body-back opacity-70"></span></span></a></div>
                  <div class="cart-item-title"><a class="content-link" href="shop-product-sidebar-right.html"><?php echo $img['product_name']?></a></div>
                  <div class="cart-item-price"><i class="fas fa-rupee-sign"></i></span><?php echo $data['price']?></div>
                  
                  <div class="cart-item-quantity"><div class="input-view-flat input-gray-shadow input-spin input-group"><input id="qty-<?php echo $data['cart_id']; ?>" class="form-control" min="1" name="text" type="text" value="<?php echo $data['qty']; ?>"><span class="input-actions"><span onclick="minus(<?php echo $data['cart_id']; ?>);" class="input-decrement"><i class="fas fa-minus"></i></span><span onclick="plus(<?php echo $data['cart_id']; ?>);" class="input-increment"><i class="fas fa-plus"></i></span></span></div></div>

                  <div class="cart-item-total"><span class="cart-item-total-text">Item total:</span><?php echo $data['price']*$data['qty']; ?></div>
                  <div class="cart-item-remove"><a href="rm_item.php?cart_id=<?php echo $data['cart_id']; ?>"><span class="cart-item-remove-text">remove from cart</span><i class="fas fa-times"></i></a></div>
               </div>
               
               <?php
                  }
               }
               ?>

                  <div class="separator-line"></div>
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

                        $query2 = $link->rawQuery("select * from cart where user_id=?",array($uid));

                        if ($link->count > 0) 
                        {
                           $total=0;
                           foreach($query as $data2)
                           {
                              $total += $data2['price']*$data2['qty'];
                           }
                        
                        ?>

               
               <div class="cart-footer">
                  <div class="grid-sm row">
                     <div class="col-sm-6 col-md-4 col-lg-3"><a class="btn btn-theme-bordered" href="clear_cart.php">clear shopping cart</a></div>
                  </div>
               </div>
            </div>
         
            <div class="section-block">
               <div class="cols-xl row">
                  <div class="col-lg-6 mr-auto">
                     <div class="cart-form">
                     
         <div class="row grid"><div class="col-auto col-sm-auto"><div class="cart-block"><ul class="cart-totals list-titled"><li><span class="list-item-title">Sub Total</span><span class="list-item-value"><?php echo $total; ?></span></li><li><span class="list-item-title">Shipping</span><span class="list-item-value">FREE</span></li><li class="separator-line"></li><li class="cart-total"><span class="list-item-title">Total</span><span class="list-item-value"><?php echo $total; ?></span></li></ul><input type="submit" class="w-100 btn btn-theme" value="proceed to checkout"></div></div></div></div>
         <?php

            }
            else
            {
               ?><br><center><?php echo "Your cart is empty!";?></center><?php
            }

         ?>
         </form>
      </section>
      
      
      <?php
         include'includes/cart.php';
      ?>
      
      <?php
        include'includes/footer.php';
      ?>

      <script src="assets/jquery/jquery-3.3.1.min.js"></script><script src="assets/bootstrap/js/bootstrap.min.js"></script><script src="assets/shuffle/shuffle.min.js"></script><script src="assets/waypoints/jquery.waypoints.min.js"></script><script src="assets/slick/slick.min.js"></script><script src="assets/js-cookie/js.cookie.js" type="text/javascript"></script><script src="assets/js/gmap/dark.js"></script><script src="assets/js/script.js"></script><script async defer="defer" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDBAbNXaCDOzujLCykXUvTylfbL1wUcaM&amp;callback=initMap"></script>
      <script>
         function plus(val)
         {
            var qty=$("#qty-"+val).val();
            //alert(parseInt(qty) + 1);

               $.ajax({
                   type: "POST",
                     url: "change_qty.php",
                     data: "cart_id="+val+"&qty="+(parseInt(qty) + 1),
                        
                        // serializes the form's elements.
                     success: function(data)
                     {
                       if(data == "success")
                       {
                           location.reload();
                       }
                       else
                       {
                           alert("err");
                       }
                     }
                  });
         }

         function minus(val)
         {
            var qty=$("#qty-"+val).val();
            //alert(parseInt(qty) + 1);

               $.ajax({
                   type: "POST",
                     url: "change_qty2.php",
                     data: "cart_id="+val+"&qty="+(parseInt(qty) - 1),
                        
                     // serializes the form's elements.
                     success: function(data)
                     {
                       if(data == "success")
                       {
                           location.reload();
                       }
                       else
                       {
                           alert("err");
                       }
                     }
                  });
         }

      </script>
   </body>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/shop-alt-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:55:08 GMT -->
</html>