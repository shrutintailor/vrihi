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
				if($pass == $data["user_password"])
				{
					$uid = $data["user_id"];
					$name = $data["first_name"].$data["last_name"];
					$_SESSION['user_id']=$uid;
					$_SESSION['user_name']=$name;
					/*$usr=$_SESSION['user_id'];*/
					header("location:index.php");
				}
				else
				{	
					header("location:index.php?err=1");
				}
			}
			else
			{	
				header("location:index.php?err=1");
			}
		}
	}


?>