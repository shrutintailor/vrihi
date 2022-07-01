<?php

	
	include("../includes/connection.php");

	$inventory_id = $_REQUEST['inventory_id'];
	$inventory_name = $_REQUEST['inventory_name'];
	
	$link->where("inventory_id",$inventory_id);
	$add = $link->update("inventory",array("inventory_name"=>$inventory_name));

	if($add)
	{
		header("location:view_inventory.php");
	}
	else
	{
		echo "Error";
	}
	
			
?>