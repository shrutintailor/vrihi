<?php

	include("../includes/connection.php");

	$inventoryName = $_REQUEST['inventoryName'];

	$add = $link->insert("inventory",array("inventory_name"=>$inventoryName));

	if($add)
	{
		header("location:view_inventory.php");
	}
	else
	{
		echo "Error";
	}
?>