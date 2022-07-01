<?php

	
	include("../includes/connection.php");

	$category_id = $_REQUEST['category_id'];
	$categoryName=$_REQUEST['categoryName'];
	$isactive = $_REQUEST['isActive'];
	
	$link->where("category_id",$category_id);
	$add = $link->update("category",array("category_name"=>$categoryName));

	if($add)
	{
		header("location:view_category.php");
	}
		
		$img = $_FILES['catImg']['name'];
		
		if($img != NULL)
		{
			$sql = $link->rawQueryOne("select * from category where category_id=?",array($category_id));

			$img_unlink = "../images/category_img/".$sql['category_image'];

			unlink($img_unlink);
			
			
			//Image Upload code start
			
			$ext = pathinfo($img,PATHINFO_EXTENSION);
			$pimage = "catImg".$category_id.'.'.$ext;		
	
		
			if(move_uploaded_file($_FILES['catImg']['tmp_name'],"../images/category_img/".$pimage))
			{
				$link->where('category_id',$category_id);
				$a1=$link->update("category",array("category_image"=>$pimage));
				
				if($a1)
				{
					header("location:view_category.php");
				}
			}
			//Image Upload code End
		}
?>