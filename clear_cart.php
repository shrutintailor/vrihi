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

   $link->where("user_id",$uid);
   $link->where("order_id",0);
   $sql = $link->delete("cart");

   $link->where("user_id",$uid);
   $link->where("order_product_id",0);
   $sql = $link->delete("order_item");


   if($sql)
   {
      header("location:index.php");
   }
   else
   {
      echo "Error";
   }

?>