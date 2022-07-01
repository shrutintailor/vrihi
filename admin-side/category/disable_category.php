<?php

	
	include("../includes/connection.php");

	$category_id = $_REQUEST['category_id'];
	$isactive = 0;

	$link->where("category_id",$category_id);
	$upd = $link->update("category",array("category_active"=>$isactive));

	if($upd)
	{
		header("location:view_category.php");
	}
			
?>