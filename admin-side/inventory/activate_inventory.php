<?php

	
	include("../includes/connection.php");

	$inventory_id = $_REQUEST['inventory_id'];
	$isactive = 1;

	$link->where("inventory_id",$inventory_id);
	$upd = $link->update("inventory",array("is_active"=>$isactive));

	if($upd)
	{
		header("location:view_inventory.php");
	}
			
?>