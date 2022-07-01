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

   $cart_id = $_REQUEST['cart_id'];

   include'includes/connection.php';

   $sql = $link->rawQueryOne("select * from order_item where cart_id=?",array($cart_id));
   if($link->count > 0)
   {
      $link->where("cart_id",$cart_id);
      $del = $link->delete("order_item");

      $link->where("cart_id",$cart_id);
      $del = $link->delete("cart");

      if($del)
      {
         header("location:shop_cart.php");
      }
      else
      {
         echo "Error";
      }
   }
   else
   {
      $link->where("cart_id",$cart_id);
      $del = $link->delete("cart");

      if($del)
      {
         header("location:shop_cart.php");
      }
      else
      {
         echo "Error";
      }
   }

   

   

?>