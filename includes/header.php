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
?>
      <header class="header-colorfull header-horizontal header-over header-view-side">
         <div class="container">
            <nav class="navbar">
               <a class="navbar-brand" href="./index.php"><span class="logo-element-line"><span class="logo-icon"></span><span class="logo-text">VRIHI</span></span></a> <button class="navbar-toggler" type="button"><i class="fas fa-bars nav-show"></i><i class="fas fa-times nav-hide"></i></button>
               <div class="navbar-collapse">
                  <div class="container">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="./index.php">Home<span class="nav-arrow"></span></a>
                        </li>
                        
                        <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                           <a class="nav-link" href="#" data-role="nav-toggler">Categories<span class="nav-arrow"><i class="fas fa-chevron-down"></i></span></a>
                           <ul class="collapse nav">
                              <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                                 <?php

                                    $category_data = $link->rawQuery("select * from category where category_active=1");

                                    if($link->count > 0)
                                    {
                                       foreach($category_data as $data)
                                       {
                                 ?>
                                          <a  class="nav-link" href="category_products.php?category_id=<?php echo $data['category_id']; ?>"><?php echo $data['category_name']; ?><span class="nav-arrow"></span></a>
                                 <?php
                                       }
                                    }
                                    else
                                    {
                                       ?>
                                      
                                       <a class="nav-link" href="#" data-role="nav-toggler">No category available at the moment<span class="nav-arrow"></span></a>
                                      
                                       <?php
                                    }
                                 ?>
                              </li>
                           </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="blog_home.php">Blogs</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="about_us.php">About</a></li>
                     </ul>
                     <div class="navbar-extra">
                        <ul class="actions-nav">
                           <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                               <?php

                                 if(isset($_SESSION['user_id']) && $_SESSION['user_id']!=null)
                                 {
                                    $uid=$_SESSION['user_id'];
                                    $uname=$_SESSION['user_name'];
                                ?>
                              <a class="nav-link" href="#">
                                 <i class="fas fa-user"></i>&nbsp;&nbsp;<?php echo $uname; ?><span class="nav-arrow"><i class="fas fa-chevron-down"></i></span>
                              </a>
                              <ul class="collapse nav">
                                 <li class="nav-item">
                                       <a class="nav-link" href="user_dashboard.php">Dashboard</a>
                                 </li>
                                 <li class="nav-item">
                                       <a class="nav-link" href="signOut.php">Sign Out</a>
                                 </li>
                              </ul>
                              <?php
                                 }
                                 else 
                                 {
                                    ?>
                                       <a class="nav-link" href="signin.php">
                                          <i class="fas fa-user"></i>&nbsp;&nbsp;Sign In<span class="nav-arrow"></span>
                                       </a>

                                    <?php
                                 }
                              ?>
                           </li>

                           <?php

                              $qty = $link->rawQuery("select * from cart where user_id=? and order_id=0",array($uid));

                              $cnt = 0;

                              if ($link->count > 0) 
                              {
                                 $cnt = $link->count;
                              }

                           ?>

                           <li class="nav-item"><a class="nav-link" href="shop_cart.php" data-show-block="cart"><i class="fas fa-shopping-bag"></i><span class="navbar-mobile">&nbsp;&nbsp;Cart</span><span class="cart-quantity"><span class="badge badge-pill badge-cart"><?php echo $cnt; ?></span></span></a></li>
                        </ul>
                        <div class="navbar-info">
                           <div class="navbar-info-title">Call Us Now</div>
                           <div class="navbar-info-value">+ 88 018 4113 6251</div>
                        </div>
                     </div>
                  </div>
               </div>
            </nav>
         </div>
      </header>
