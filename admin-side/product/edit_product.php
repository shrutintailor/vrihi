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
    <title>Edit Product</title>
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
    <script src="../assets/ckeditor/ckeditor.js"></script>
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
                                <h5 class="box-title mr-b-0">Edit Product</h5>
                                <p class="text-muted">Add new product details inside form</p>

                                <?php
                                    include '../includes/connection.php';
                                    if(isset($_REQUEST['product_id']) && $_REQUEST['product_id']!=null)
                                    {
                                        $product_id=$_REQUEST['product_id'];
                                        $data=$link->rawQueryOne("select * from product where product_id=?",array($product_id));
                                        if($link->count > 0)
                                        {
                                                $pcategory_id=$data['category_id'];
                                                $product_name=$data['product_name'];
                                                $product_sd=$data['product_sd']; 
                                                $product_ld=$data['product_ld'];       
                                                $product_qty=$data['product_qty'];
                                                $product_active=$data['product_active'];
                                                $product_img=$data['product_img'];
                                        }
                                    }
                                ?>

                                <form name="editProduct" id="editProduct" method="POST" enctype="multipart/form-data" action="save_editproduct.php">

                                    <div class="form-group">
                                        <input class="form-control" type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                                    </div>

                                    <div class="form-group">
                                            
                                        <label class="form-control-label">Select Category</label>
                                            
                                        <select class="form-control" name="category" id="category">

                                            <?php

                                                

                                                $data = $link->rawQuery("select * from category where category_active=1");

                                                if($link->count>0)
                                                {
                                                    foreach($data as $category_data)
                                                    {
                                                        $category_id = $category_data['category_id'];
                                                        $category_name=$category_data['category_name'];
                                                        ?>

                                                            <option value="<?php echo $category_id; ?>" <?php if($category_id == $pcategory_id){ echo "selected"; } ?>><?php echo $category_name; ?></option>

                                                        <?php
                                                    }
                                                }
                                                else
                                                {
                                                    $error = "No active category available";
                                                    ?>

                                                    <option><?php echo $error; ?></option>

                                                    <?php
                                                }

                                            ?>
                                        
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Product Name</label>
                                        <input class="form-control" type="text" name="product_name" id="product_name" value="<?php echo $product_name; ?>">
                                    </div>

                                    <div class="form-group">
                                            <label class="form-control-label">Select Product Image</label>
                                            <input type="file" class="form-control" name="product_img" id="product_img" value="<?php echo $product_img; ?>">
                                        </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Short Description</label>
                                        <input class="form-control" type="text" name="product_sd" id="product_sd" value="<?php echo $product_sd; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Long Description</label>
                                        <textarea class="form-control" id="product_ld" name="product_ld" rows="12"><?php echo $product_ld; ?>"</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Product Quantity</label>
                                        <input class="form-control" type="number" name="product_qty" id="product_qty" value="<?php echo $product_qty; ?>">
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
            $( "#editProduct" ).validate( {
                rules: {
                    category: "required",
                    product_name: "required",
                    product_sd: "required",
                    product_ld: "required",
                    product_qty:
                    {
                      required: true,
                      digits: true,
                      maxlength: 2
                    },
                },
                messages: {
                    
                    category: "Please Select Category Of The Product *",
                    product_name: "Please Enter Name Of The Product *",
                    product_sd: "Please Provide Short Description Of The Product *",
                    product_ld: "Please Provide Detailed Description Of The Product *",
                    product_qty:
                    {
                      required: "Please Enter Product Quantity *",
                      digits: "Please Enter Only Digits *",
                      maxlength: "Please Enter Only 2 Digits *"
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
    <script type="text/javascript">
        
        CKEDITOR.replace('product_ld');
        
    </script>
</body>
</html>