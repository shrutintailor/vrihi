<?php

  session_start();

  include'includes/connection.php';

  if(isset($_SESSION['user_id']) && $_SESSION['user_id']!=null)
  {
    $sflag=1;
    $uid=$_SESSION['user_id'];
  }

  $pass = $_REQUEST['password'];

  $qry = $link->rawQuery("select * from users");

  if($link->count > 0)
  {
    foreach ($qry as $data)
    {
      if($uid == $data["user_id"])
      {
        $check = 1;

        if($pass == $data["user_password"])
        {
          
          $link->where("user_id",$uid);
          $del = $link->delete("cart");

          $link->where("user_id",$uid);
          $del = $link->delete("users");

          
            header("location:signOut.php");
          
        }
        else
        { 
          header("location:deleteUsr.php?err=1");
        }
        
      }
    }
  }
  if($check != 1)
  {
    header("location:deleteUsr.php?err=1");
  }

  
?>