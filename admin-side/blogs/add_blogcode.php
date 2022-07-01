<?php

	include("../includes/connection.php");

	$blog_category = $_REQUEST['blog_category'];
	$blog_title = $_REQUEST['blog_title'];
	$author_nm = $_REQUEST['author_nm'];
	$author_email = $_REQUEST['author_email'];
	$blog_description = $_REQUEST['blog_description'];

	$date = date("d/m/y");

	$add = $link->insert("blogs",array("blog_category"=>$blog_category,"blog_title"=>$blog_title,"blog_author"=>$author_nm,"author_email"=>$author_email,"blog_description"=>$blog_description,"blog_date"=>$date));

	if($add)
		{
			//Image Upload code start
			$img = $_FILES['blogImg']['name'];
			$ext = pathinfo($img,PATHINFO_EXTENSION);
			$pimage = "blogImg".$add.'.'.$ext;		
	
		
			if(move_uploaded_file($_FILES['blogImg']['tmp_name'],"../images/blogs_img/".$pimage))
			{
				$link->where('blog_id',$add);
				$a1=$link->update("blogs",array("blog_image"=>$pimage));
				
				if($a1)
				{
					header("location:view_blogs.php");
				}
			}
			//Image Upload code End
			
		}
?>