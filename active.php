<?php
    ob_start();
?>
<?php
	include("includes/connection.php");
   	session_start();
	$cid=$_REQUEST['oid'];
	$uid=$_REQUEST['uid'];
	
	//echo $cid;
	//echo $uid;
	
    include 'razorpay/Razorpay.php';
    include 'razorpay/src/Errors/SignatureVerificationError.php';
    include "backyard/phpmailer/class.phpmailer.php";
$success = false;
if ( ! empty( $_POST['razorpay_payment_id'] ) ) {

 try
    {
       $attributes = array(
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            //'razorpay_signature' => $_POST['razorpay_signature']
        );

        //$api->utility->verifyPaymentSignature($attributes);
        $success = true;
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
        
    }

}

if ($success == true)
{
    $html = "Payment success/ Signature Verified";
    $link->where("order_product_id",$cid);
	$a=$link->update("order_product",array("order_isActive"=>1));
   }
?>
<script>
$( document ).ready(function() {
		if(performance.navigation.type== "2")
		{
			window.location.href="Home";
		}
	});
</script>