<?php

	session_start();

	include 'includes/connection.php';

	$pass = $_POST['pass'];

	$admin_data = $link->rawQueryOne("select * from admin");

	if($link->count > 0)
	{
		
			if($pass == $admin_data["admin_password"])
			{
				$_SESSION['admin_id']=$admin_data["admin_id"];
				
				header("location:dashboard/dashboard.php");
			}
			else
			{	
				header("location:index.php?err=1");
			}
	}

?>