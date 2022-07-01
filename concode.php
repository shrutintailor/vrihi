<?php

include'includes/connection.php';
	
session_start();

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

$sql = $link->insert("contact",array("name"=>$name,"email"=>$email,"message"=>$message));

if($sql)
{
	header("location:contact.php");
}
else
{
	echo "Error";
}

?>