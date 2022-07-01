<?php

	
	include("../includes/connection.php");

	$product_inventory_id = $_REQUEST['product_inventory_id'];
	$product_id = $_REQUEST['product'];
	$inventory_id = $_REQUEST['inventory'];
	$product_inventory_price = $_REQUEST['price'];
	
	$link->where("product_inventory_id",$product_inventory_id);
	$add = $link->update("product_inventory",array("product_id"=>$product_id,"inventory_id"=>$inventory_id,"product_inventory_price"=>$product_inventory_price));

	if($add)
	{
		header("location:view_proinv.php");
	}
?>