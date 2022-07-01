<?php

	session_start();

	include'includes/connection.php';
	
	$cart_id=$_REQUEST['cart_id'];
	$qty=$_REQUEST['qty'];

	$qry = $link->rawQueryOne("select * from cart where cart_id=?",array($cart_id));

	if($link->count > 0)
	{
	
		$link->where("cart_id",$cart_id);
		$upd = $link->update("cart",array("qty"=>$qty));
		echo "success";
	}
	else
	{
		echo "error";
	}
?>