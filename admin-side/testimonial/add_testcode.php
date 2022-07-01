<?php

	include("../includes/connection.php");

	$test_name = $_REQUEST['testname'];
	$test_description = $_REQUEST['test_description'];

	$add = $link->insert("testimonial",array("test_name"=>$test_name,"test_description"=>$test_description));

	if($add)
		{
			//Image Upload code start
			$img = $_FILES['testimg']['name'];
			$ext = pathinfo($img,PATHINFO_EXTENSION);
			$pimage = "testimg".$add.'.'.$ext;		
	
		
			if(move_uploaded_file($_FILES['testimg']['tmp_name'],"../images/testimonial_image/".$pimage))
			{
				$link->where('test_id',$add);
				$a1=$link->update("testimonial",array("test_image"=>$pimage));
				
				if($a1)
				{
					header("location:view_testimonial.php");
				}
			}
			//Image Upload code End
			
		}
?>