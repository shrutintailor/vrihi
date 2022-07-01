<?php

	
	include("../includes/connection.php");

	$blog_id = $_REQUEST['blog_id'];
	$isactive = 0;

	$link->where("blog_id",$blog_id);
	$upd = $link->update("blogs",array("is_hiden"=>$isactive));

	if($upd)
	{
		header("location:view_blogs.php");
	}
			
?>