<?php

	include("../includes/connection.php");

	$inventory_id = $_REQUEST['inventory_id'];

	$link->where("inventory_id",$inventory_id);
	$sql = $link->delete("inventory");

	if($sql)
	{
		header("location:view_inventory.php");
	}
	else
	{
		echo "Error";
	}
?>