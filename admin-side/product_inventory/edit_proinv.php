<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        if(!isset($_SESSION['admin_id']) && $_SESSION['admin_id']==null)
        {
            header("location:../index.php");
        }
       
    ?>  
<head>
    <link rel="stylesheet" href="../assets/css/pace.css">
    <script src="../assets/js/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/demo/favicon.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit Product-Inventory</title>
    <!-- CSS -->
    <link href="../assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="../assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    
    <link href="../assets/css/sweetalert2.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/magnific-popup.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/mediaelementplayer.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css">
    
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="../assets/vendors/weather-icons-master/weather-icons.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/vendors/weather-icons-master/weather-icons-wind.min.css" rel="stylesheet" type="text/css">
   
    <link href="../assets/css/daterangepicker.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/morris.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/slick.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/slick-theme.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="../assets/js/modernizr.min.js"></script>
</head>

<body class="header-light sidebar-dark sidebar-expand">
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
        <?php
            include '../includes/header.php';
        ?>
    <!-- /.navbar -->
    <div class="content-wrapper" background: #f2f4f8>
        <?php
            include '../includes/sidebar.php';
        ?>       
        <main class="main-wrapper clearfix">

            <div class="widget-list">
                <div class="row">
                    <!-- /.widget-holder -->
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Edit Product-Inventory</h5>
                                <p class="text-muted">Add new Edit Product-Inventory details inside form</p>

                                <?php
                                    include '../includes/connection.php';
                                    if(isset($_REQUEST['product_inventory_id']) && $_REQUEST['product_inventory_id']!=null)
                                    {
                                        $product_inventory_id=$_REQUEST['product_inventory_id'];
                                        $data=$link->rawQueryOne("select * from product_inventory where product_inventory_id=?",array($product_inventory_id));
                                        if($link->count > 0)
                                        {
                                                $pinvp_id=$data['product_id'];
                                                $pinvi_id=$data['inventory_id'];
                                                $pinvprice=$data['product_inventory_price']; 
                                        }
                                    }
                                ?>

                                <form name="editProductInv" id="editProductInv" method="POST" enctype="multipart/form-data" action="save_editproinv.php">

                                    <div class="form-group">
                                        <input class="form-control" type="hidden" name="product_inventory_id" value="<?php echo $product_inventory_id; ?>">
                                    </div>
                                    
                                    <div class="form-group">
                                            
                                        <label class="form-control-label">Select Product</label>
                                            
                                        <select class="form-control" name="product" id="product">

                                            <?php

                                                $data = $link->rawQuery("select * from product");

                                                if($link->count>0)
                                                {
                                                    foreach($data as $product_data)
                                                    {
                                                        $product_id = $product_data['product_id'];
                                                        $product_name=$product_data['product_name'];
                                                        ?>

                                                            <option value="<?php echo $product_id; ?>" <?php if($product_id == $pinvp_id){ echo "selected"; } ?> ><?php echo $product_name; ?></option>

                                                        <?php
                                                    }
                                                }

                                            ?>
                                        
                                        </select>
                                    </div>

                                    <div class="form-group">
                                            
                                        <label class="form-control-label">Select Inventory</label>
                                            
                                        <select class="form-control" name="inventory" id="inventory">

                                            <?php

                                                $data = $link->rawQuery("select * from inventory");

                                                if($link->count>0)
                                                {
                                                    foreach($data as $inventory_data)
                                                    {
                                                        $inventory_id = $inventory_data['inventory_id'];
                                                        $inventory_name=$inventory_data['inventory_name'];
                                                        ?>

                                                            <option value="<?php echo $inventory_id; ?>" <?php if($inventory_id == $pinvi_id){ echo "selected"; } ?> ><?php echo $inventory_name; ?></option>

                                                        <?php
                                                    }
                                                }

                                            ?>
                                        
                                        </select>
                                    </div>
                            
                                    <div class="form-group">
                                        <label class="form-control-label">Price</label>
                                        <input class="form-control" type="number" name="price" id="price"  value="<?php echo $pinvprice; ?>">
                                    </div>

                                    <div class="form-group">

                                        <button type="submit" class="btn btn-primary">Submit</button>

                                    </div>
                                    <!-- /.[data-toggle="dropzone"] -->
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
            </div>
        </main>
    </div>

     <?php
        include'../includes/footer.php';
    ?>
    </div>
</div>

 <script src="../assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.validate.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.validate.min.js"></script>
     <script>
    //Form Validation
        $( document ).ready( function () {
            $( "#editProductInv" ).validate( {
                rules: {
                    product: "required",
                    inventory: "required",
                    price:
                    {
                      required: true,
                      digits: true,
                    },
                },
                messages: {
                    
                    product: "Please Select The Product *",
                    inventory: "Please Select The inventory *",
                    price:
                    {
                      required: "Please Enter Price *",
                      digits: "Please Enter Only Digits *",
                    },
                    
                },
                errorElement: "em",
                errorPlacement: function ( error, element ) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass( "invalid-feedback" );

                    if ( element.prop( "type" ) === "checkbox" ) {
                        error.insertAfter( element.next("br") );
                    } else {
                        error.insertAfter( element );
                    }
                },
                highlight: function ( element, errorClass, validClass ) {
                    $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
                },
                unhighlight: function (element, errorClass, validClass) {
                    $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
                }
            } );

        } );
</script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/mediaelementplayer.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/perfect-scrollbar.jquery.js"></script>
    <script src="../assets/js/sweetalert2.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/jquery.waypoints.min.js"></script>
    <script src="../assets/js/Chart.min.js"></script>
    <script src="../assets/js/Chart.bundle.min.js"></script>
    <script src="../assets/vendors/charts/utils.js"></script>
    <script src="../assets/js/jquery.knob.min.js"></script>
    <script src="../assets/js/jquery.sparkline.min.js"></script>
    <script src="../assets/vendors/charts/excanvas.js"></script>
    <script src="../assets/js/mithril.js"></script>
    <script src="../assets/vendors/theme-widgets/widgets.js"></script>
    <script src="../assets/js/moment.min.js"></script>
    <script src="../assets/js/underscore-min.js"></script>
    <script src="../assets/js/clndr.min.js"></script>
    <script src="../assets/js/jquery-ui.min.js"></script>
    <script src="../assets/js/morris.min.js"></script>
    <script src="../assets/js/raphael.min.js"></script>
    <script src="../assets/js/daterangepicker.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="../assets/js/custom.js"></script>

</body>
</html>







