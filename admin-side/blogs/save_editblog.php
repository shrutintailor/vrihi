<?php

	
	include("../includes/connection.php");

	$blog_id = $_REQUEST['blog_id'];
	$blog_category = $_REQUEST['blog_category'];
	$blog_title = $_REQUEST['blog_title'];
	$blog_author = $_REQUEST['author_nm'];
	$author_email = $_REQUEST['author_email'];
	$blog_description = $_REQUEST['blog_description'];
	
	$link->where("blog_id",$blog_id);
	$upd = $link->update("blogs",array("blog_category"=>$blog_category,"blog_title"=>$blog_title,"blog_author"=>$blog_author,"author_email"=>$author_email,"blog_description"=>$blog_description));

	if($upd)
	{
		header("location:view_blogs.php");
	}
		
		$img = $_FILES['blogImg']['name'];
		
		if($img != NULL)
		{
			$sql = $link->rawQueryOne("select * from blogs where blog_id=?",array($blog_id));

			$img_unlink = "../images/blogs_img/".$sql['blog_image'];

			unlink($img_unlink);
			
			
			//Image Upload code start
			
			$ext = pathinfo($img,PATHINFO_EXTENSION);
			$pimage = "blogImg".$blog_id.'.'.$ext;		
	
		
			if(move_uploaded_file($_FILES['blogImg']['tmp_name'],"../images/blogs_img/".$pimage))
			{
				$link->where('blog_id',$blog_id);
				$a1=$link->update("blogs",array("blog_image"=>$pimage));
				
				if($a1)
				{
					header("location:view_blogs.php");
				}
			}
			//Image Upload code End
		}
?>