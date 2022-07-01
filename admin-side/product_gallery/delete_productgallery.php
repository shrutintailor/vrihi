<?php

	include("../includes/connection.php");

	$product_gallery_id = $_REQUEST['product_gallery_id'];
	$product_id = $_REQUEST['product_id'];

	$sql = $link->rawQueryOne("select * from product_gallery where product_gallery_id=?",array($product_gallery_id));

	$img_unlink = "../images/product_gallery_image/".$sql['product_gallery_image'];

	unlink($img_unlink);

	$link->where("product_gallery_id",$product_gallery_id);
	$sql = $link->delete("product_gallery");

	if($sql)
	{
		header("location:view_images.php?product_id=".$product_id);
	}
	else
	{
		echo "Error";
	}
?>