<?php
	include '../includes/connection.php';
	$cid=$_GET['pid'];
	
	$link->where("order_product_id",$cid);
	$a=$link->update("order_product",array("status_id"=>3));
	
	if($a)
	{
		header("location:dashboard.php");
	}
?>