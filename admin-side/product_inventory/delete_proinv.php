<?php

	include("../includes/connection.php");

	$product_inventory_id = $_REQUEST['product_inventory_id'];

	$link->where("product_inventory_id",$product_inventory_id);
	$sql = $link->delete("product_inventory");

	if($sql)
	{
		header("location:view_proinv.php");
	}
	else
	{
		echo "Error";
	}
?>