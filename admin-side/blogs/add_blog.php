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
    <title>Add Blog</title>
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

          <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h5 class="mr-0 mr-r-5">New Blog</h5>
                    <p class="mr-0 text-muted d-none d-md-inline-block">Enter the data to create a new Blog</p>
                </div>
                <!-- /.page-title-left -->

                <!-- /.page-title-right -->
            </div>

            <div class="widget-list">
                <div class="row">
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Create-Bolg Form</h5>
                                <p class="text-muted">Enter releven data</p>
                                <form class="form-material" id="addBlog" method="POST" enctype="multipart/form-data" action="add_blogcode.php">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input class="form-control" id="blog_category" name="blog_category" placeholder="Category" type="text">
                                                <label for="blog_category">Blog Category</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input class="form-control" id="blog_title" name="blog_title" placeholder="Title" type="text">
                                                <label for="blog_title">Blog Title</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" id="author_nm" name="author_nm" type="text" placeholder="Name">
                                                <label for="author_fn">Author Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" id="author_email" name="author_email" type="email" placeholder="email">
                                                <label for="author_email">Author E-mail</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div data-toggle="dropzone" data-plugin-options="{&quot;url&quot;:&quot;assets/demo&quot;}">
                                        <div class="fallback">
                                            <label class="form-control-label">Select Blog Image</label>
                                            <input type="file" class="form-control" name="blogImg" id="blogImg" multiple="multiple">
                                        </div>
                                        <!-- /.fallback -->
                                    </div>

                                    <div>
                                        <br>
                                    </div>
                                    
                                     <label for="blog_description">Blog Description</label>
                                     <div class="form-group">
                                        <textarea class="form-control" id="blog_description" name="blog_description" rows="13"></textarea>
                                    </div>
                                   
                                    <div class="form-actions btn-list">
                                        <button class="btn btn-primary" name="Submit" value="Submit">Submit</button>
                                    </div>
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
            $( "#addBlog" ).validate( {
                rules: {
                    blog_category: "required",
                    blog_title: "required",
                    author_nm: "required",
                    author_email:
                    {
                      required: true,
                      email: true
                    },
                    blogImg: "required",
                    blog_description: "required",
                },
                messages: {
                    
                    blog_category: "Please Enter Category For This Blog *",
                    blog_title: "Please Enter Title For This Blog *",
                    author_nm: "Please Enter Name of The Author *",
                    author_email:
                    {
                      required: "Please Enter E-mail *",
                      email: "Please Enter Valid E-mail *",
                    },
                    blogImg: "Please Select Image For This Blog *",
                    blog_description: "Please Enter Blog Description *",
                    
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
        
        CKEDITOR.replace('blog_description');
        
    </script>
</body>
</html>