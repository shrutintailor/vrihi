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
    <title>View Category</title>
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
    <link href="../assets/css/jQuery.dataTables.min.css" rel="stylesheet" type="text/css">

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

           <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h5 class="mr-0 mr-r-5">Categories Table</h5>
                    <p class="mr-0 text-muted d-none d-md-inline-block">Ctegories Details</p>
                </div>
                <!-- /.page-title-left -->
              </div>

              <div class="widget-list">
                <div class="row">
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-heading clearfix">
                                <h5>VRIHI Category Data Table</h5>
                            </div>
                            <!-- /.widget-heading -->
                            <div class="widget-body clearfix">
                               

                                <table class="table table-striped table-responsive" data-toggle="datatables">
                                    <thead>
                                        <tr>
                                            <th>Category ID</th>
                                            <th>Category Name</th>
                                            <th>Category Image</th>
                                            <th>Activate/Disable</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                     <?php

                                            include("../includes/connection.php");

                                            $category_data = $link->rawQuery("select * from category");
                                            if($link->count > 0)
                                            {
                                                foreach($category_data as $data)
                                                {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $data['category_id']; ?></td>
                                                            <td><?php echo $data['category_name']; ?></td>
                                                            <td><img src="../images/category_img/<?php echo $data['category_image']; ?>  " height="200px" width="200px"></td>

                                                             <td>
                                                                <?php if($data['category_active'] == 1)
                                                                        {
                                                                              ?>      

                                                                              <a href="disable_category.php?category_id=<?php echo $data['category_id']; ?>">

                                                                                <button type="button" class="btn  btn-danger">Disable</button>

                                                                                </a>

                                                                                <?php
                                                                        }else{
                                                                                ?>

                                                                                <a href="activate_category.php?category_id=<?php echo $data['category_id']; ?>">
                                                                                    <button type="button" class="btn btn-success">Activate</button>

                                                                                </a>

                                                                                <?php
                                                                        }

                                                             ?>
                                                                 
                                                             </td>
                                                        
                                                            <td><a href="edit_category.php?category_id=<?php echo $data['category_id']; ?>">
                                                                <button class="btn"><i class="material-icons list-icon">edit</i></button>
                                                            </a>
                                                            </td>
                                                            <td><a href="delete_category.php?category_id=<?php echo $data['category_id']; ?>">
                                                                <button class="btn"><i class="material-icons list-icon">delete_forever</i></button>
                                                            </a>
                                                            </td>
                                                        </tr>
                                                                <?php
                                                            }
                                                        }
                                                        else
                                                        {
                                                            echo "No data found.";
                                                        }

                                                ?>
                                       
                                    </tbody>
                                   
                                </table>

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
    <script src="../assets/js/jquery.dataTables.min.js"></script>
</body>
</html>