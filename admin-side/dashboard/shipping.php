<?php
		require_once '../includes/connection.php';
    	$cid=$_GET['pid'];
    	$link->where("order_product_id",$cid);
    	$a=$link->update("order_product",array("status_id"=>2));
    	
    	if($a)
    	{
    		header("location:dashboard.php");
    	}
?>