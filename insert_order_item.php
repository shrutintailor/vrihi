<?php
    ob_start();
    session_start();
    include 'includes/connection.php';
    if(isset($_SESSION['user_id']) && isset($_SESSION['user_id'])!=null)
    {
        $uid=$_SESSION['user_id'];
    }
    else
    {
        $uid=session_id();
    }
    
    for($i=0;$i<count($_POST['cart_id']);$i++)
    {
            $cart_id=$_POST['cart_id'][$i];
            $product_id=$_REQUEST['product_id'][$i];
            $price=$_REQUEST['price'][$i];
            $qty=$_REQUEST['qty'][$i];
            $total = $price*$qty;
            
                
            $sql2=$link->rawQueryOne("select * from order_item where cart_id=? and order_product_id=0",array($cart_id));
            if($link->count > 0)
            {
                
                    header("location:shop_checkout.php");
            }
            else
            {
                $sql=$link->insert("order_item",array("qty"=>$qty,"cart_id"=>$cart_id,"user_id"=>$uid,"product_id"=>$product_id,"price"=>$price,"total"=>$total));
                if($sql)
                {
                   
                        header("location:shop_checkout.php");
                    
                }
                    
            }
            
    }
    
    
    

    
    
    
?>