<?php
	
	include'includes/connection.php';

		session_start();


	$fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];
	$date = $_REQUEST['date'];
	$email = $_REQUEST['email'];
	$pass = $_REQUEST['pass'];
	$add1 = $_REQUEST['add1'];
	$add2 = $_REQUEST['add2'];
	$city = $_REQUEST['city'];
	$zip = $_REQUEST['zip'];
	$state = $_REQUEST['state'];
	$phone = $_REQUEST['phone'];

	$query = $link->rawQuery("select * from users");

	if($link->count>0)
	{
		foreach($query as $data)
		{
			if($email == $data['user_email'])
			{
				header("location:signup.php?err=1");
			}
			else
			{
				if($phone == $data['user_phone'])
				{
					header("location:signup.php?err=2");
				}
				else
				{
					$ins = $link->insert("users",array("first_name"=>$fname,"last_name"=>$lname,"user_email"=>$email,"user_contact"=>$phone,"user_password"=>$pass,"user_state"=>$state,"user_city"=>$city,"user_pincode"=>$zip,"user_address1"=>$add1,"user_address2"=>$add2,"user_dob"=>$date));

					if($ins)
					{
						header("location:signin.php");
					}
					else
					{
						echo "Error";
					}
				}
			}
		}
	}

?>