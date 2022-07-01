<?php

   session_start();
   
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

   include'includes/connection.php';

   $product_id = $_REQUEST['product_id'];
   $price = $_REQUEST['price'];
   $category_id = $_REQUEST['category_id'];
   $qty = $_REQUEST['qty'];

   $qry = $link->rawQueryOne("select * from cart where user_id=? and product_id=?",array($uid, $product_id));

   if($link->count > 0)
   {
      $link->where("user_id",$uid);
      $link->where("product_id",$product_id);
      $add = $link->update("cart",array("qty"=>$qty));

      header("location:shop_product.php?product_id=$product_id");
   }
   else
   {
      $add = $link->insert("cart",array("product_id"=>$product_id,"user_id"=>$uid,"price"=>$price,"qty"=>$qty));

      if($add)
      {
         header("location:shop_product.php?product_id=$product_id");
      }
      else
      {
         echo "Error";
      }
   }

?>