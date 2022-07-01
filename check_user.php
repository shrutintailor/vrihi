<?php

	session_start();

	if(isset($_SESSION['user_id']) && $_SESSION['user_id']!=null)
    {
   		$sflag=1;
        $uid=$_SESSION['user_id'];
        $uname=$_SESSION['user_name'];
    }
    else
    {
        $sflag=0;
        $uid=session_id();
        $uname="newUser";
    }

	if($uname=="newUser")
    {
    	header("location:signup.php");
    }
    else 
    {
        header("location:shop_checkout.php?user_id=$uid;");
    }    
?>