<!DOCTYPE html>
<html>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/shop-alt-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:55:08 GMT -->
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
      <title>VRIHI - Checkout</title>
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
                  <h1 class="section-title">Shop Checkout</h1>
                  <div class="mt-3">
                     <div class="page-breadcrumbs"><a class="content-link" href="index.php">Home</a><span class="mx-2">\</span><a class="content-link" href="shop.php">Shop</a><span class="mx-2">\</span><span>Cart</span></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section">
         <form class="container" action="shopcheckcode.php" method="POST" name="check" id="check">
            <div class="cols-xl row">
               <div class="col-lg-6">
                  <h2 class="text-title mb-5">Billing details</h2>
                  <div class="grid row">
                     <div class="col-md-6">
                        <?php

                        $query = $link->rawQueryOne("select * from users where user_id=?",array($_SESSION['user_id']));

                        ?>
                        <div class="input-view-flat input-gray-shadow form-group">
                           <label class="required">Your Name</label>
                           <div class="input-group"><input class="form-control" id="name" name="name" type="text" placeholder="Name"  value="<?php echo $query['first_name']." ".$query['last_name'] ?>"></div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="input-view-flat input-gray-shadow form-group">
                           <label class="required">Your Email</label>
                           <div class="input-group"><input class="form-control" id="email" name="email" type="email" placeholder="Email"  value="<?php echo $query['user_email'] ?>"></div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="input-view-flat input-gray-shadow form-group">
                           <label class="required">State</label>
                           <div class="input-group"><input class="form-control" id="state" name="state" type="text" placeholder="State"  value="<?php echo $query['user_state'] ?>"></div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="input-view-flat input-gray-shadow form-group">
                           <label class="required">Town / City</label>
                           <div class="input-group"><input class="form-control" id="city" name="city" type="text" placeholder="Town / City"  value="<?php echo $query['user_city'] ?>"></div>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="input-view-flat input-gray-shadow form-group">
                           <label class="required">Address</label>
                           <div class="input-group"><input class="form-control" id="address" name="address" type="text" placeholder="Address"  value="<?php echo $query['user_address1'] ?>"></div>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="input-view-flat input-gray-shadow form-group">
                           <label class="required">Postcode / Zip</label>
                           <div class="input-group"><input class="form-control" id="zip" name="zip" type="text" placeholder="Postcode / Zip"  value="<?php echo $query['user_pincode'] ?>"></div>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="input-view-flat input-gray-shadow form-group">
                           <label class="required">Phone</label>
                           <div class="input-group"><input class="form-control" id="phone" name="phone" type="text" placeholder="Phone"  value="<?php echo $query['user_contact'] ?>"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <h2 class="text-title mb-5">Your order</h2>
                  <div class="order-items mb-5">
                     <div class="order-header">
                        <div class="order-line-title">Name</div>
                        <div class="order-line-total">Total</div>
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

                     $query = $link->rawQuery("select * from order_item where order_product_id=0 and user_id=?",array($uid));

                     if ($link->count > 0) 
                     {
                        foreach($query as $data)
                        {

                     ?>
                     <input type="hidden" id="cart_id[]" name="cart_id[]" value="<?php echo $data['cart_id'];?>">
                     
                     <input type="hidden" id="order_item_id[]" name="order_item_id[]" value="<?php echo $data['order_item_id'];?>">
                     <div class="order-item">
                        <?php

                        $qry = $link->rawQueryOne("select * from product where product_id=?",array($data['product_id']));
                        ?>
                        <div class="order-line-title"><?php echo $qry['product_name']; ?></div>

                        <div class="order-line-total"><?php echo $data['price']*$data['qty']; ?></div>
                     </div>
                     <?php
                        }
                     }
                     ?>
                     <div class="order-subtotal">
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
                           foreach($query2 as $data2)
                           {
                              $total += $data2['price']*$data2['qty'];
                           }
                        }
                        ?>
                        <div class="order-line-title">Sub Total</div>
                        <div class="order-line-total"><?php echo $total; ?></div>
                        <input type="text" name="order_total" id="order_total" value="<?php echo $total; ?>" hidden>
                     </div>
                     <div class="order-subtotal">
                        <div class="order-line-title">Shipping</div>
                        <div class="order-line-total">FREE</div>
                     </div>
                     <div class="separator-line"></div>
                     <div class="order-total">
                        <div class="order-line-title">Total</div>
                        <div class="order-line-total"><?php echo $total; ?></div>
                     </div>
                  </div>
                  <h3 class="text-title mb-4">Payment Details</h3>
                  <div class="grid row">
                     <div class="col-12">
                        <p>Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
                     </div>
                     <div class="col-12">
                        <div class="form-groups">
                           <?php?>
                           <div class="input-view-flat input-gray-shadow form-group">
                              <div class="form-check"><input class="form-check-input" type="radio" id="paypal-payment" name="paymentType" checked value="online"><span class="form-check-icon"></span><label class="form-check-label" for="paypal-payment">Online Payment</label></div>
                           </div>
                           <div class="input-view-flat input-gray-shadow form-group">
                              <div class="form-check"><input class="form-check-input" type="radio" id="cash-on-payment" name="paymentType" value="cash"><span class="form-check-icon"></span><label class="form-check-label" for="cash-on-payment">Cash On Payment</label></div>
                           </div>
                           
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="input-view-flat input-gray-shadow form-group">
                           <p style="color:red;">
                           <div class="form-check"><input class="form-check-input" type="checkbox" id="tandc" name="terms" value="yes" required="true"><span class="form-check-icon" ></span><label class="form-check-label" for="terms-and-conditions">I've read &amp; accept the <a href="#" target="_blank">terms &amp; conditions</a></label>
                           </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-12"><button class="btn-wider btn btn-theme" type="submit">place order</button></div>
                  </div>
               </div>
            </div>
         </form>
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
            $( "#check" ).validate( {
                rules: {
                    name: "required",
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
                    address: "required",
                    city: "required",
                   phone: {
                     required: true,
                     digits: true,
                      maxlength: 10
                   },
                    
                },
                messages: {
                    
                    name: "Please enter first name *",
                    state: "Please enter state *",
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
                    address: "Please Enter Address2 *",
                    city: "Please Enter city *",
                    phone: {
                     required: "Please enter number *",
                     digits: "olny digits are allowed *",
                      maxlength: "max 10 digits allowed *"
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
      </script><script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/shuffle/shuffle.min.js"></script>
      <script src="assets/waypoints/jquery.waypoints.min.js"></script>
      <script src="assets/slick/slick.min.js"></script>
      <script src="assets/js-cookie/js.cookie.js" type="text/javascript"></script>
      <script src="assets/js/gmap/dark.js"></script>
      <script src="assets/js/script.js"></script>
      <!-- <script async defer="defer" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDBAbNXaCDOzujLCykXUvTylfbL1wUcaM&amp;callback=initMap"></script> -->
   </body>
   <!-- Mirrored from amigosthemes.com/frutella/frutella-black/shop-alt-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 15:55:08 GMT -->
</html>