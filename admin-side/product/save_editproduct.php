<?php

	
	include("../includes/connection.php");

	$product_id = $_REQUEST['product_id'];
	$category = $_REQUEST['category'];
	$product_name = $_REQUEST['product_name'];
	$product_sd = $_REQUEST['product_sd'];
	$product_ld = $_REQUEST['product_ld'];
	$product_qty = $_REQUEST['product_qty'];
	
	$link->where("product_id",$product_id);
	$add = $link->update("product",array("category_id"=>$category,"product_name"=>$product_name,"product_sd"=>$product_sd,"product_ld"=>$product_ld,"product_qty"=>$product_qty));

	if($add)
	{
		header("location:view_product.php");
	}

	$img = $_FILES['product_img']['name'];
		
		if($img != NULL)
		{
			$sql = $link->rawQueryOne("select * from product where product_id=?",array($product_id));

			$img_unlink = "../images/product_img/".$sql['product_img'];

			unlink($img_unlink);
			
			
			//Image Upload code start
			
			$ext = pathinfo($img,PATHINFO_EXTENSION);
			$pimage = "product_img".$product_id.'.'.$ext;		
	
		
			if(move_uploaded_file($_FILES['product_img']['tmp_name'],"../images/product_img/".$pimage))
			{
				$link->where('product_id',$product_id);
				$a1=$link->update("product",array("product_img"=>$pimage));
				
				if($a1)
				{
					header("location:view_product.php");
				}
			}
			//Image Upload code End
		}

?>