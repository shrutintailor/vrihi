<?php

	include("../includes/connection.php");

	$product_id = $_REQUEST['product_id'];

	$sql = $link->rawQueryOne("select * from product where product_id=?",array($product_id));

	$img_unlink = "../images/product_img/".$sql['product_img'];

	unlink($img_unlink);

	$link->where("product_id",$product_id);
	$sql = $link->delete("product");

	if($sql)
	{
		header("location:view_product.php");
	}
	else
	{
		echo "Error";
	}
?>