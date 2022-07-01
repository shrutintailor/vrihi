<?php

	include("../includes/connection.php");

	$product_id = $_REQUEST['product'];
	$inventory_id = $_REQUEST['inventory'];
	$product_inventory_price = $_REQUEST['price'];
	
	$add = $link->insert("product_inventory",array("product_id"=>$product_id,"inventory_id"=>$inventory_id,"product_inventory_price"=>$product_inventory_price));

	if($add)
		{
			header("location:view_proinv.php");	
		}
?>