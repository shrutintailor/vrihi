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
    <title>Edit Category</title>
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
                                <h5 class="box-title mr-b-0">Edit Category</h5>
                                <p class="text-muted">Add new category details inside form</p>

                                <?php
                                    include '../includes/connection.php';
                                    if(isset($_REQUEST['category_id']) && $_REQUEST['category_id']!=null)
                                    {
                                        $category_id=$_REQUEST['category_id'];
                                        $data=$link->rawQueryOne("select * from category where category_id=?",array($category_id));
                                        if($link->count > 0)
                                        {
                                                $category_name=$data['category_name'];
                                                $category_image=$data['category_image'];
                                                $category_active=$data['category_active'];        
                                        }
                                    }
                                ?>

                                <form name="addCategory" id="formsubmit" method="POST" enctype="multipart/form-data" action="save_editcategory.php">

                                    <div class="form-group">
                                        <input class="form-control" type="hidden" name="category_id" value="<?php echo $category_id; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Category Name</label>
                                        <input class="form-control" type="text" name="categoryName" id="categoryName" value="<?php echo $category_name; ?>">
                                    </div>
                                    
                                    <div data-toggle="dropzone" data-plugin-options="{&quot;url&quot;:&quot;assets/demo&quot;}">
                                        <div class="fallback">
                                            <input type="file" class="form-control" name="catImg" id="catImg" multiple="multiple" value="<?php echo $category_image; ?>">
                                        </div>
                                        <!-- /.fallback -->
                                        <div class="dz-message" data-dz-message=""><span>Select Category Image</span>
                                        </div>
                                        <div>
                                            <br>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>

                                    </div>
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
            $( "#formsubmit" ).validate( {
                rules: {
                    categoryName: "required",
                    email:
                    {
                      required: true,
                      email: true
                    },
                    user_phone:
                    {
                      required: true,
                      digits: true,
                      minlength: 10,
                      maxlength: 10
                    },
                    user_pincode:
                    {
                      required: true,
                      digits: true,
                    },
                    user_address: "required",
                    user_company: "required",
                    user_add1: "required",
                    user_add2: "required",
                    privacy1: "required",
                    privacy2: 
                    {
                      equalTo: "#privacy1"
                    },
                    user_password: "required",
                    user_cpassword:
                    {
                      required: true,
                      equalTo: "#user_password"
                    },
                },
                messages: {
                    
                    categoryName: "Please Enter Category Name *",
                    catImg: "Please Select Image *",
                    user_email:
                    {
                      required: "Please Enter E-mail *",
                      email: "Please Enter Valid E-mail *",
                    },
                    user_phone:
                    {
                      required: "Please Enter Phone No. *",
                      digits: "Please Enter Only Digits *",
                      minlength: "Please Enter Only 10 Digits *",
                      maxlength: "Please Enter Only 10 Digits *"
                    },
                    user_pincode:
                    {
                      required: "Please Enter Pincode *",
                      digits: "Please Enter Only Digits *",
                      minlength: "Please Enter Only 6 Digits *",
                      maxlength: "Please Enter Only 6 Digits *"
                    },
                    user_address: "Please Enter Address *",
                    user_add1: "Please Enter Address  *",
                    user_add2: "Please Enter Locality / Landmark *",
                    privacy1: "Please Accept Privacy Policy *",
                    privacy2:
                    {
                      equalTo: "Please Accept Privacy Policy *"
                    },
                    user_password: "Please Enter Password *",
                    user_cpassword:
                    {
                      required: "Please Enter Confirm Password *",
                      equalTo: "Both Password Not Match*"
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