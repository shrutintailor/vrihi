<?php

	include("../includes/connection.php");

	$blog_id = $_REQUEST['blog_id'];

	$sql = $link->rawQueryOne("select * from blogs where blog_id=?",array($blog_id));

	$img_unlink = "../images/blogs_img/".$sql['blog_image'];

	unlink($img_unlink);

	$link->where("blog_id",$blog_id);
	$sql = $link->delete("blogs");

	if($sql)
	{
		header("location:view_blogs.php");
	}
	else
	{
		echo "Error";
	}
?>