

<?php
	
   session_start();
	include("includes/connection.php");
	if(isset($_SESSION['user_id']) && $_SESSION['user_name']!=null)
        {
           	$sflag=1;
            $uid=$_SESSION['user_id'];
        }
    else
      	{
            header("location:signin.php");
        }

	$name = $_REQUEST['name'];
	$mess = $_REQUEST['mess'];
	$product_id = $_REQUEST['product_id'];
	$date =date("Y-m-d");

	$add = $link->insert("review",array("user_id"=>$uid,"product_id"=>$product_id,"user_name"=>$name,"message"=>$mess,"date"=>$date));

	if($add)
		{
			
			header("location:shop_product.php?product_id=$product_id");
			
		}
	else
		{
			echo("error");
		}	
?>







