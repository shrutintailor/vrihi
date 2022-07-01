<!DOCTYPE html>
<html>

<?php

   session_start();

   include'includes/connection.php';
?>

   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
      <title>VRIHI - Rice Shop</title>
      <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="./assets/animate.css/animate.min.css" rel="stylesheet" type="text/css">
      <link href="./assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="./assets/slick/slick.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" type="text/css">
      <link href="./assets/css/theme.min.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="./assets/css/popupstyle.css" type="text/css">
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

      <section class="white-curve-after after-head slick-top-fix section-white-text">
         <div class="slick-view-banner slick-numeric-navigation slick-carousel" data-slider="top-side-numbers">
            <div class="slick-slides">
               <div class="slick-slide">
                     <div class="my-auto position-relative align-items-lg-center flex-0 row">

                          
                           <div class="m-lg-auto d-flex z-index-2 position-relative col"><img class="px-5 px-lg-0 m-auto col-auto mw-100" src="./assets/images/slide1.jpg" alt=""></div>

                     </div>   
               </div>
               <div class="slick-slide">
                  <div class="my-auto position-relative align-items-lg-center flex-0 row">
                             
                           <div class="m-lg-auto d-flex z-index-2 position-relative col"><img class="px-5 px-lg-0 m-auto col-auto mw-100" src="./assets/images/slide2.jpg" alt=""></div>

                           
                   </div>   
               </div>
               <div class="slick-slide">
                  <div class="my-auto position-relative align-items-lg-center flex-0 row">
                           
                           <div class="m-lg-auto d-flex z-index-2 position-relative col"><img class="px-5 px-lg-0 m-auto col-auto mw-100" src="./assets/images/slide3.jpg" alt=""></div>

                           
                  </div>     
               </div>
               <div class="slick-slide">
                        <div class="my-auto position-relative align-items-lg-center flex-0 row">
                          
                           <div class="m-lg-auto d-flex z-index-2 position-relative col"><img class="px-5 px-lg-0 m-auto col-auto mw-100" src="./assets/images/slide4.jpg" alt=""></div>

                           
                        </div>
               </div>
            </div>
         </div>
      </section>
      
      <section class="section" data-slider="featured-products">
         <div class="section-head container left">
            <div class="section-icon"><span class="svg-fill-crimson svg-content" data-svg="./assets/images/svg/title-pepper.svg"></span></div>
            <div class="section-head-content">
               <h2 class="section-title">Featured products</h2>
            </div>
            <div class="slick-arrows">
               <div class="slick-arrow-prev"><i class="fas fa-arrow-left"></i></div>
               <div class="slick-arrow-next"><i class="fas fa-arrow-right"></i></div>
            </div>
         </div>
         <div class="container">
            <div class="slick-view-carousel slick-carousel">
               <div class="slick-slides">
                  <?php

                           $query = $link->rawQuery("select * from product where product_active=1");

                           if($link->count>0)
                           {
                              foreach($query as $data)
                              {
                                 
                        ?>
                  <div class="slick-slide">
                     <article class="entity-block entity-hover-shadow">
                        <a class="entity-preview-show-up entity-preview" href="shop_product.php?product_id=<?php echo $data['product_id']; ?>"><span class="embed-responsive embed-responsive-4by3"><img class="embed-responsive-item" src="admin-side/images/product_img/<?php echo $data['product_img']; ?>" alt=""></span><span class="with-back entity-preview-content"><span class="overflow-back bg-body-back opacity-70"></span><span class="m-auto h1 text-theme text-center"><i class="fas fa-shopping-cart"></i></span></span></a>
                        <div class="fill-color-line" data-role="fill-line">
                           <div class="opacity-30 fill-line-segment bg-theme" data-role="fill-line-segment" data-min-width="10" data-preffered-width="50" data-max-width="80"></div>
                           <div class="opacity-60 fill-line-segment bg-theme" data-role="fill-line-segment" data-min-width="10" data-preffered-width="50" data-max-width="80"></div>
                           <div class="fill-line-segment bg-theme" data-role="fill-line-segment" data-min-width="10" data-preffered-width="50" data-max-width="80"></div>
                        </div>
                        <div class="entity-content">
                           <h4 class="entity-title"><a class="content-link" href="shop_product.php?product_id=<?php echo $data['product_id']; ?>"><?php echo $data['product_name']?></a></h4>
                           <p class="entity-text"><?php echo $data['product_sd']?></p>
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
                     }
                     ?>
               </div>
            </div>
         </div>
      </section>

      <section class="bg-bittersweet white-curve-before curve-before-50 white-curve-after curve-after-20 section-solid section-white-text">
         <div class="section-back-text">Features</div>
         
         <div class="section-head container left">
            <div class="section-icon"><span class="svg-fill-white svg-content" data-svg="./assets/images/svg/title-beans.svg"></span></div>
            <div class="section-head-content">
               <h2 class="section-title">Best features</h2>
               <p class="section-text">Fresh from the farm</p>
            </div>
         </div>
         <div class="container">
            <div class="cols-lg row">
               <div class="col-md-4">
                  <div class="entity text-center">
                     <div class="entity-icon"><img class="mw-100" src="./assets/images/parts/icons/100/white/tomato-transparent.png" alt=""></div>
                     <h4 class="entity-title">Natural Food</h4>
                     <p class="mb-0 entity-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                     <img class="d-none d-lg-block mw-100" src="./assets/images/parts/arrow-curved-up.png" alt="" data-size="50px" data-at="right 5px;40px;25deg">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="entity text-center">
                     <div class="entity-icon"><img class="mw-100" src="./assets/images/parts/icons/100/white/dairy-transparent.png" alt=""></div>
                     <h4 class="entity-title">Biologically Safe</h4>
                     <p class="mb-0 entity-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                     <img class="d-none d-lg-block mw-100" src="./assets/images/parts/arrow-curved.png" alt="" data-size="50px" data-at="right -21px;85px;-36deg">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="entity text-center">
                     <div class="entity-icon"><img class="mw-100" src="./assets/images/parts/icons/100/white/leafs-transparent.png" alt=""></div>
                     <h4 class="entity-title">Conserve Biodiversity</h4>
                     <p class="mb-0 entity-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                     <img class="d-none mw-100" src="./assets/images/parts/arrow-curved.png" alt="" data-size="50px" data-at="100%;50%">
                  </div>
               </div>
            </div>
         </div>
      </section>

     
      
      <section class="section">
         <div class="section-head container left">
            <div class="section-icon"><span class="svg-fill-theme svg-content" data-svg="./assets/images/svg/title-baracka.svg"></span></div>
            <div class="section-head-content">
               <h2 class="section-title">Shipping and payment</h2>
               <p class="section-text">We'll do it as fast as possible</p>
            </div>
         </div>
         <div class="container">
            <div class="grid row">
               <div class="col-lg-3 d-flex">
                  <div class="entity-block entity-hover-shadow entity-hover-highlight entity-hover-white-icon">
                     <div class="mt-4 mb-0 mr-auto align-self-start p-2 px-4 bradr entity-icon"><img class="mw-100" src="./assets/images/parts/icons/50/orange/shopping-basket.png" alt=""></div>
                     <div class="entity-content">
                        <h4 class="entity-title">Order</h4>
                        <p class="mb-0 entity-text">Our manager will contact you to discuss the details of the order</p>
                     </div>
                  </div>
               </div>
               <div class="col d-flex align-items-center">
                  <div class="m-auto">
                     <div class="h2 lg-horizontal separator-dots-arrow"><span class="separator-dot"></span><span class="separator-dot last"></span><span class="separator-arrow"><i class="fas fa-angle-down separator-show-vertical"></i> <i class="fas fa-angle-right separator-show-horizontal"></i></span></div>
                  </div>
               </div>
               <div class="col-lg-3 d-flex">
                  <div class="entity-block entity-hover-shadow entity-hover-highlight entity-hover-white-icon">
                     <div class="mt-4 mb-0 mr-auto align-self-start p-2 px-4 bradr entity-icon"><img class="mw-100" src="./assets/images/parts/icons/50/orange/card-payment.png" alt=""></div>
                     <div class="entity-content">
                        <h4 class="entity-title">Payment</h4>
                        <p class="mb-0 entity-text">You yourself choose the period during which you will use the service</p>
                     </div>
                  </div>
               </div>
               <div class="col d-flex align-items-center">
                  <div class="m-auto">
                     <div class="h2 lg-horizontal separator-dots-arrow"><span class="separator-dot"></span><span class="separator-dot last"></span><span class="separator-arrow"><i class="fas fa-angle-down separator-show-vertical"></i> <i class="fas fa-angle-right separator-show-horizontal"></i></span></div>
                  </div>
               </div>
               <div class="col-lg-3 d-flex">
                  <div class="entity-block entity-hover-shadow entity-hover-highlight entity-hover-white-icon">
                     <div class="mt-4 mb-0 mr-auto align-self-start p-2 px-4 bradr entity-icon"><img class="mw-100" src="./assets/images/parts/icons/50/orange/shipped.png" alt=""></div>
                     <div class="entity-content">
                        <h4 class="entity-title">Delivery</h4>
                        <p class="mb-0 entity-text">The courier will deliver the goods at a convenient time for you.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="bg-orange white-curve-before curve-before-60 white-curve-after curve-after-90 section-solid section-white-text">
         <div class="section-back-text">Stats</div>
         
         <div class="container">
            <div class="cols-lg row">
               <div class="col-lg-4">
                  <div class="entity line">
                     <div class="my-auto entity-icon"><img class="mw-100" src="./assets/images/parts/icons/100/white/in-love.png" alt=""></div>
                     <div class="ml-4 my-auto entity-content">
                        <div class="h1 mb-1 entity-value" data-waypoint-counter="1143" data-waypoint-counter-extra="+"></div>
                        <p class="mb-0 entity-text">satisfied customers</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="entity line">
                     <div class="my-auto entity-icon"><img class="mw-100" src="./assets/images/parts/icons/100/white/handshake.png" alt=""></div>
                     <div class="ml-4 my-auto entity-content">
                        <div class="h1 mb-1 entity-value" data-waypoint-counter="99" data-waypoint-counter-extra="%"></div>
                        <p class="mb-0 entity-text">quality of service</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="entity line">
                     <div class="my-auto entity-icon"><img class="mw-100" src="./assets/images/parts/icons/100/white/guarantee.png" alt=""></div>
                     <div class="ml-4 my-auto entity-content">
                        <div class="h1 mb-1 entity-value" data-waypoint-counter="22" data-waypoint-counter-extra="false"></div>
                        <p class="mb-0 entity-text">quality certificates</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="section" data-slider="testimonials">
         <div class="section-head container left">
            <div class="section-icon"><span class="svg-fill-crimson svg-content" data-svg="./assets/images/svg/title-strawberry.svg"></span></div>
            <div class="section-head-content">
               <h2 class="section-title">What our costumers are seying</h2>
            </div>
            <div class="slick-arrows">
               <div class="slick-arrow-prev"><i class="fas fa-arrow-left"></i></div>
               <div class="slick-arrow-next"><i class="fas fa-arrow-right"></i></div>
            </div>
         </div>
         <div class="container">
            <div class="slick-view-carousel slick-carousel">
               <div class="slick-slides">
                  <?php

                           $query = $link->rawQuery("select * from review");

                           if($link->count>0)
                           {
                              foreach($query as $data)
                              {
                                 
                        ?>
                  <div class="slick-slide">
                     <div class="entity-block entity-hover-shadow">
                        <div class="pb-4 entity-content">
                           <div class="side-image entity-header">
                              <?php

                              $uimg = $link->rawQueryOne("select * from users where user_id=?",array($data['user_id']));
                              ?>
                              <div class="entity-image"><img class="mw-100" src="images/user_images/<?php echo $uimg['user_img']?>
                              " alt=""></div>
                              <h5 class="entity-title"><?php echo $data['user_name']?></h5>
                           </div>
                           <p class="entity-text"><?php echo $data['message']?></p>
                        </div>
                     </div>
                  </div>
                  <?php
                     }}
                  ?>
               </div>
            </div>
         </div>
      </section>

      
      <section class="section">
         <div class="section-head container left">
            <div class="section-icon"><span class="svg-fill-jazzberry-jam svg-content" data-svg="./assets/images/svg/title-rasberry.svg"></span></div>
            <div class="section-head-content">
               <h2 class="section-title">Contact</h2>
               <p class="section-text">Get In Touch</p>
            </div>
         </div>
         <div class="container">
            <div class="row"></div>
            <div class="entity">
               <div class="cols-lg row">
                  <div class="col-12 col-xl">
                     <div class="frame-block p-2">
                        <div class="gmap">
                           <div>
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.3321526707864!2d72.8010657142472!3d21.139175889377174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04df5707fbf79%3A0xa28cdf7e4650cb2c!2sAccrete%20InfoTech%20%7C%20Web%20development%20in%20Surat%20%7C%20Mobile%20Application%20development%20in%20Surat!5e0!3m2!1sen!2sin!4v1621581959804!5m2!1sen!2sin" width="100%" height="330" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-xl-3 pt-xl-3">
                     <div class="cols-sm row">
                        <div class="col-md-6 col-lg-3 col-xl-12">
                           <div class="entity-record short">
                              <div class="entity-record-title">Phone:</div>
                              <div class="entity-record-value">+91 0261 11221 </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xl-12">
                           <div class="entity-record short">
                              <div class="entity-record-title">Address:</div>
                              <div class="entity-record-value">Surat , india</div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xl-12">
                           <div class="entity-record short">
                              <div class="entity-record-title">E-mail:</div>
                              <div class="entity-record-value">info@Vrihi.com</div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xl-12">
                           <div class="entity-record short">
                              <div class="entity-record-title">Social:</div>
                              <div class="entity-record-value">
                                 <div class="entity-socials"><a class="content-link" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i> </a><a class="content-link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i> </a><a class="content-link" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i> </a><a class="content-link" href="#"><i class="fab fa-pinterest" aria-hidden="true"></i> </a><a class="content-link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
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



      <script src="./assets/jquery/jquery-3.3.1.min.js"></script>
      <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="./assets/shuffle/shuffle.min.js"></script>
      <script src="./assets/waypoints/jquery.waypoints.min.js"></script> 
      <script src="./assets/slick/slick.min.js"></script>
      <script src="./assets/js-cookie/js.cookie.js" type="text/javascript"></script>
      <script src="./assets/js/gmap/dark.js"></script>
      <script src="./assets/js/script.js"></script>


<?php

if(isset($_SESSION['user_name'])==null)
{
?>
   <div class="login-popup">
      <div class="box">
         <div class="form">
            <div class="close">&times;</div>
            <h1>Log In</h1>
            <form method="POST" action="signinCodePopup.php" name="login" id="login">
            <div class="form-group">
               <input type="text" placeholder="Email" class="form-control" name="login" id="login">
            </div>
            <div class="form-group">
               <input type="password" placeholder="Password" class="form-control" name="pass" id="pass">
            </div>
            <?php
                          if(isset($_REQUEST['err']) && $_REQUEST['err']==1)
                          {
                              ?>
                        <div class="err">
                        
                                  <p style="color:red;">Invaid Email or Password*</p>
                            
                       </div>
                       <br>
                       <?php
                          }

                        ?>
            <div class="form-group">
            <button type="submit" class="btn">Log In</button>
            </div>
            <br>
            <div class="form-group">
            <label>Not Registered Yet?</label>&nbsp;<a href="signup.php"><label style="color: blue;">Register Now</label></a>
            </div>
            </form>
         </div>
      </div>
   </div>

<?php
}
?>

  <script src="./assets/js/popupscript.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.js"></script>
      <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
      <script>
      //Form Validation
        $( document ).ready( function () {
            $( "#login" ).validate( {
                rules: {
                    login:
                    {
                      required: true,
                      email: true,
                    },
                    pass: 
                    {
                      required: true,
                      maxlength: 8,
                    }
                },
                messages: {
                    
                    login:
                    {
                      required: "Please enter your registered email*",
                      email: "Please enter valid email*",
                    },
                    pass: 
                    {
                     required: "Please Enter Password *",
                     maxlength: "maximum 8 characters allowed for password*"
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
   </body>
</html>