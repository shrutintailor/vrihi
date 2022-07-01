<?php

	include("../includes/connection.php");

	$test_id = $_REQUEST['test_id'];

	$sql = $link->rawQueryOne("select * from testimonial where test_id=?",array($test_id));

	$img_unlink = "../images/testimonial_image/".$sql['test_image'];

	unlink($img_unlink);

	$link->where("test_id",$test_id);
	$sql = $link->delete("testimonial");

	if($sql)
	{
		header("location:view_testimonial.php");
	}
	else
	{
		echo "Error";
	}
?>