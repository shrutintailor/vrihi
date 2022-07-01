
<div class="cart-sidebar collapse" data-block="cart" data-show-block-class="animation-scale-top-right" data-hide-block-class="animation-unscale-top-right">
         <a class="close-link" href="#" data-close-block="true"><i class="fas fa-times"></i></a>
         <div class="cart-inner">
            <h4 class="text-title mb-2">Cart</h4>
            <div class="separator-line mb-4"></div>
            
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
            <div class="entity">
               <div class="grid-sm row">
                  <div class="col-5"><a class="entity-preview-show-up entity-preview" href="shop_product.php?product_id=<?php echo $data['product_id']; ?>"><span class="embed-responsive embed-responsive-4by3">
                     <?php

                        $img = $link->rawQueryOne("select * from product where product_id=?",array($data['product_id']));
                     ?>
                     <img class="embed-responsive-item" src="admin-side/images/product_img/<?php echo $img['product_img'] ?>" alt=""></span><span class="with-back entity-preview-content"><span class="h3 m-auto text-theme text-center"><i class="fas fa-search"></i></span><span class="overflow-back bg-body-back opacity-70"></span></span></a></div>
                  <div class="col">
                     <h4 class="h5 mb-1 entity-title"><a class="content-link" href="shop_product.php?product_id=<?php echo $data['product_id']; ?>"><?php echo $img['product_name']?></a></h4>
                     <div class="entity-price"><span class="currency"><i class="fas fa-rupee-sign"></i></span><?php echo $data['price']?><span style="color:#747d88;" class="entity-quantity">&nbsp;x&nbsp;<?php echo $data['qty']; ?></span></div>
                     <a class="btnrm" href="rm_item.php?cart_id=<?php echo $data['cart_id']; ?>"><button class="btn"><i class="fas fa-minus-square"> remove</i></button></a>
                  </div>
               </div>
            </div>
            <?php
               }
            ?>
      
            <div class="separator-line mt-4 mb-3"></div>
            <ul class="cart-totals list-titled">
               <?php

                  $prices = $link->rawQuery("select * from cart where user_id=?",array($uid));

                  $sum = 0;

                  if ($link->count > 0) 
                  {
                     foreach($query as $pdata)
                     {
                        $sum += $pdata['price']*$pdata['qty'];
                     }
                  }
               ?>
               <li><span class="list-item-title">Sub Total</span><span class="list-item-value"><i class="fas fa-rupee-sign"></i><?php echo $sum; ?></span></li>
               <li><span class="list-item-title">Shipping</span><span class="list-item-value">FREE</span></li>
               <li class="separator-line"></li>
               <li class="cart-total"><span class="list-item-title">Total</span><span class="list-item-value"><i class="fas fa-rupee-sign"></i><?php echo $sum; ?></span></li>
            </ul>
            
                  
                  <center>
                           <center><a class="btnrm" href="clear_cart.php"><button class="btn"><i class="fa fa-trash"></i> remove all</button></a></center>
                           <a class="w-100 btn btn-theme" href="shop_cart.php">view cart&nbsp;&nbsp;&nbsp;<i class="fas fa-shopping-bag"></i></a>
                  </center>
                           <?php
                     }
                     else
                     {
                        ?>
                        <p>No Product Found</p>
                        <?php
                     }
                     ?>
                  

         </div>
      </div>



      