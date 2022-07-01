<?php

	
	include("../includes/connection.php");

	$product_id = $_REQUEST['product_id'];
	$isactive = 0;

	$link->where("product_id",$product_id);
	$upd = $link->update("product",array("product_active"=>$isactive));

	if($upd)
	{
		header("location:view_product.php");
	}
			
?>