<?php

	session_start();

	if(isset($_SESSION['user_id']) && $_SESSION['user_id']!=null)
    {
        $sflag=1;
        $uid=$_SESSION['user_id'];
    }
    else
    {
        $sflag=0;
        $uid=session_id();
    }

    include'includes/connection.php';

    $newpass = $_REQUEST['confirmPassword'];

    $link->where("user_id",$uid);
    $upd = $link->update("users",array("user_password"=>$newpass));

    if($upd)
    {
    	header("location:signOut.php");
    }
    else
    {
    	header("location:user_security.php?err=1");
    }
?>