

<?php
	
   session_start();
	include("includes/connection.php");
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

	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$paymentType =$_REQUEST['paymentType'];
	$address = $_REQUEST['address'];
	$city = $_REQUEST['city'];
	$zip = $_REQUEST['zip'];
	$state = $_REQUEST['state'];
	$phone = $_REQUEST['phone'];
	$order_total = $_REQUEST['order_total'];
	$date =date("Y-m-d");

	if($paymentType=="cash")
	{
		$add = $link->insert("order_product",array("order_fullName"=>$name,"order_email"=>$email,"order_contact"=>$phone,"order_state"=>$state,"order_city"=>$city,"order_pincode"=>$zip,"order_address"=>$address,"user_id"=>$uid,"order_paymentType"=>$paymentType,"order_date"=>$date,"order_total"=>$order_total,"status_id"=>1));

		if($add)
		{
			for($i=0;$i < count($_POST['cart_id']);$i++)
			{
				$cart_id=$_POST['cart_id'][$i];
				$order_item_id=$_POST['order_item_id'][$i];

				$link->where("order_item_id",$order_item_id);
				$sql2=$link->update("order_item",array("order_product_id"=>$add));
				
				$link->where("cart_id",$cart_id);
				$sql3=$link->update("cart",array("order_id"=>$add));
			}
			
			header("location:index.php");
			
		}
		else
		{
			echo("err");
		}
	}
	else if($paymentType=="online")
	{
		$add = $link->insert("order_product",array("order_fullName"=>$name,"order_email"=>$email,"order_contact"=>$phone,"order_state"=>$state,"order_city"=>$city,"order_pincode"=>$zip,"order_address"=>$address,"user_id"=>$uid,"order_paymentType"=>$paymentType,"order_date"=>$date,"order_total"=>$order_total,"status_id"=>1));

		if($add)
		{
			?>
				<form method="POST" action="https://api.razorpay.com/v1/checkout/embedded">
				  <input type="hidden" name="key_id" value="rzp_test_aDNW3jpLU7vwbQ">
				  <input type="hidden" name="amount" value="<?php echo $order_total*100; ?>">
				  <input type="hidden" name="description" value="Vrihi">
				  <input type="hidden" name="image" value="assets/images/content/100x100/people-1.jpg">
				  <input type="hidden" name="prefill[name]" value="<?php echo $name; ?>">
				  <input type="hidden" name="prefill[contact]" value="<?php echo $phone; ?>">
				  <input type="hidden" name="prefill[email]" value="<?php echo $email; ?>">
				  <!--Address changes-->
				  <input type="hidden" name="notes[shipping address]" value="India">
				  <input type="hidden" name="notes[shipping address]" value="<?php echo $state; ?>">
				  <input type="hidden" name="notes[shipping address]" value="<?php echo $city; ?>">
				  <input type="hidden" name="notes[shipping address]" value="<?php echo $zip; ?>">
				  <input type="hidden" name="notes[shipping address]" value="<?php echo $address; ?>">

				 <!-- <input type="hidden" name="notes[shipping address]" value="<?php echo $order_address; ?>">-->
				  <input type="hidden" name="callback_url" value="<?php echo $site_url; ?>active.php?oid=<?php echo $ADD; ?>&uid=<?php echo $uid; ?>">
				<input type="hidden" name="cancel_url" value="cancel.php?oi=<?php echo $sql3; ?>">
				  <button type="submit" id="btnsubmit" style="display:none;">Submit</button>
				</form>
				<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
				<script>
				$(document).ready(function(){
					//alert("hello");
				$( "#btnsubmit" ).click();
				});

				</script>
			<?php
		}
	}

		
?>