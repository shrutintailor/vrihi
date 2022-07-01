<?php

	include("../includes/connection.php");

	$category_id = $_REQUEST['category_id'];

	$sql = $link->rawQueryOne("select * from category where category_id=?",array($category_id));

	$img_unlink = "../images/category_img/".$sql['category_image'];

	unlink($img_unlink);

	$link->where("category_id",$category_id);
	$sql = $link->delete("category");

	if($sql)
	{
		header("location:view_category.php");
	}
	else
	{
		echo "Error";
	}
?>