<?php

	
	include("../includes/connection.php");

	$test_id = $_REQUEST['test_id'];
	$test_name = $_REQUEST['testname'];
	$test_description = $_REQUEST['test_description'];
	
	$link->where("test_id",$test_id);
	$upd = $link->update("testimonial",array("test_name"=>$test_name,"test_description"=>$test_description));

	if($upd)
	{
		header("location:view_testimonial.php");
	}
		
		$img = $_FILES['testimg']['name'];
		
		if($img != NULL)
		{
			$sql = $link->rawQueryOne("select * from testimonial where test_id=?",array($test_id));

			$img_unlink = "../images/testimonial_image/".$sql['test_image'];

			unlink($img_unlink) or die();
			
			
			//Image Upload code start
			
			$ext = pathinfo($img,PATHINFO_EXTENSION);
			$pimage = "testimg".$test_id.'.'.$ext;		
	
		
			if(move_uploaded_file($_FILES['testimg']['tmp_name'],"../images/testimonial_image/".$pimage))
			{
				$link->where('test_id',$test_id);
				$a1=$link->update("testimonial",array("test_image"=>$pimage));
				
				if($a1)
				{
					header("location:view_testimonial.php");
				}
			}
			//Image Upload code End
		}
?>