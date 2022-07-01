<?php

	session_start();

	include'includes/connection.php';

	if(isset($_SESSION['user_id']) && $_SESSION['user_id']!=null)
    {
       $sflag=1;
       $uid=$_SESSION['user_id'];
    }
	$ufname = $_REQUEST['firstName'];
	$ulname = $_REQUEST['lastName'];
	$umail = $_REQUEST['email']; 
	$uadd = $_REQUEST['address'];
	$ucity = $_REQUEST['city'];
	$uzip = $_REQUEST['zip'];
	$ustate = $_REQUEST['state'];
	$uphone = $_REQUEST['phone'];

	$link->where("user_id",$uid);
	$upd = $link->update("users",array("first_name"=>$ufname,"last_name"=>$ulname,"user_email"=>$umail,"user_contact"=>$uphone,"user_state"=>$ustate,"user_city"=>$ucity,"user_pincode"=>$uzip,"user_address1"=>$uadd));

	if($upd)
	{
		header("location:user_profile.php");
	}
		
		$img = $_FILES['avatar']['name'];
		
		if($img != NULL)
		{
			$sql = $link->rawQueryOne("select * from users where user_id=?",array($uid));

			$img_unlink = "images/user_images/".$sql['user_img'];

			unlink($img_unlink);
			
			
			//Image Upload code start
			
			$ext = pathinfo($img,PATHINFO_EXTENSION);
			$pimage = "avatar".$uid.'.'.$ext;		
	
		
			if(move_uploaded_file($_FILES['avatar']['tmp_name'],"images/user_images/".$pimage))
			{
				$link->where('user_id',$uid);
				$a1=$link->update("users",array("user_img"=>$pimage));
				
				if($a1)
				{
					header("location:user_profile.php");
				}
			}
			//Image Upload code End
		}
	

?>