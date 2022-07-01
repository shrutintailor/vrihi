<?php

	include("../includes/connection.php");

	$categoryName = $_REQUEST['categoryName'];
	$add = $link->insert("category",array("category_name"=>$categoryName));

	if($add)
		{
			//Image Upload code start
			$img = $_FILES['catImg']['name'];
			$ext = pathinfo($img,PATHINFO_EXTENSION);
			$pimage = "catImg".$add.'.'.$ext;		
	
		
			if(move_uploaded_file($_FILES['catImg']['tmp_name'],"../images/category_img/".$pimage))
			{
				$link->where('category_id',$add);
				$a1=$link->update("category",array("category_image"=>$pimage));
				
				if($a1)
				{
					header("location:view_category.php");
				}
			}
			//Image Upload code End
			
		}
?>