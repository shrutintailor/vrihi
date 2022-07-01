<?php
	
	include'includes/connection.php';
	session_start();

	$email = $_REQUEST['login'];
	$pass = $_REQUEST['pass'];
	
	$qry = $link->rawQuery("select * from users");

	if($link->count > 0)
	{
		foreach ($qry as $data)
		{
			if($email == $data["user_email"])
			{
				$check = 1;

				if($pass == $data["user_password"])
				{
					$uid = $data["user_id"];
					$name = $data["first_name"].$data["last_name"];
					$_SESSION['user_id']=$uid;
					$_SESSION['user_name']=$name;
					
					header("location:index.php");
				}
				else
				{	
					header("location:signin.php?err=1");
				}
				
			}
		}
	}
	if($check != 1)
	{
		header("location:signin.php?err=1");
	}



?>