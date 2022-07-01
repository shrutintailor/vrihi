<?php

	include("../includes/connection.php");

	$oldpass = $_REQUEST['oldpass'];
	$newpass = $_REQUEST['newpass'];
	$cnewpass = $_REQUEST['cnewpass'];
	
	$sql = $link->rawQueryOne("select * from admin where admin_id=1");

	if($sql)
	{
		if($oldpass == $sql['admin_password'])
		{
			if($newpass == $cnewpass)
			{
				$link->where("admin_id",$sql['admin_id']);
				$add = $link->update("admin",array("admin_password"=>$cnewpass));

				header("location:../index.php");
			}
		}
	}
	else
	{
		echo "Error";
	}

?>