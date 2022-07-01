<?php

	include("../includes/connection.php");

	$category_id = $_REQUEST['category'];
	$product_name = $_REQUEST['product_name'];
	$product_sd = $_REQUEST['product_sd'];
	$product_ld = $_REQUEST['product_ld'];
	$product_qty = $_REQUEST['product_qty'];
	
	$add = $link->insert("product",array("category_id"=>$category_id,"product_name"=>$product_name,"product_sd"=>$product_sd,"product_ld"=>$product_ld,"product_qty"=>$product_qty));

	if($add)
		{
			$img = $_FILES['product_img']['name'];
			$ext = pathinfo($img,PATHINFO_EXTENSION);
			$pimage = "product_img".$add.'.'.$ext;		
	
		
			if(move_uploaded_file($_FILES['product_img']['tmp_name'],"../images/product_img/".$pimage))
			{
				$link->where('product_id',$add);
				$a1=$link->update("product",array("product_img"=>$pimage));
				
				if($a1)
				{
					header("location:view_product.php");
				}
			}
		}
?>