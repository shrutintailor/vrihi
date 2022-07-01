
<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        if(!isset($_SESSION['admin_id']) && $_SESSION['admin_id']==null)
        {
            header("location:index.php");
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
    <title>Dashboard</title>
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
    <div class="content-wrapper">
        <?php
            include '../includes/sidebar.php';
        ?>       
        <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h5 class="mr-0 mr-r-5">Dashboard</h5>
                    <p class="mr-0 text-muted d-none d-md-inline-block">statistics, charts, events and reports</p>
                </div>
                <!-- /.page-title-left -->
                
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list">
                <!-- Counters -->
                <div class="row">
                    <!-- Counter: Sales -->
                    <a class="col-md-3 col-sm-6 widget-holder widget-full-height" href="../product/view_product.php">
                        <div class="widget-bg bg-primary text-inverse">
                            <div class="widget-body">
                                <div class="widget-counter">
                                    <h6>Total Products</h6>
                                    <?php 

                                        include'../includes/connection.php';
                                        $pdt = $link->rawQuery("select * from product");

                                        if($link->count>0)
                                        {
                                            $count=0;

                                            foreach ($pdt as $pdata) {
                                               $count++;
                                            }
                                        }
                                    ?>
                                    <h3 class="h1"><span class="counter"><?php echo $count; ?></span></h3><i class="material-icons list-icon">add_shopping_cart</i>
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </a>
                    <!-- /.widget-holder -->
                    <!-- Counter: Subscriptions -->
                    <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                        <div class="widget-bg bg-color-scheme text-inverse">
                            <div class="widget-body clearfix">
                                <div class="widget-counter">
                                    <?php 

                                        $ord = $link->rawQuery("select * from order_product where order_isActive=1");

                                        if($link->count>0)
                                        {
                                            $ocount=0;

                                            foreach ($ord as $odata) {
                                               $ocount++;
                                            }
                                        }
                                    ?>
                                    <h6>Active Orders</h6>
                                    <h3 class="h1"><span class="counter"><?php echo $ocount; ?></span></h3><i class="material-icons list-icon">event_available</i>
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Counter: Users -->
                    <a class="col-md-3 col-sm-6 widget-holder widget-full-height" href="../users/users.php">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <div class="widget-counter">
                                    <h6>Total Users</h6>
                                    <?php 

                                        $users = $link->rawQuery("select * from users");

                                        if($link->count>0)
                                        {
                                            $count=0;

                                            foreach ($users as $udata) {
                                               $count++;
                                            }
                                        }
                                    ?>
                                    <h3 class="h1"><span class="counter"><?php echo $count; ?></span></h3><i class="material-icons list-icon">public</i>
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </a>
                    <!-- /.widget-holder -->
                    <!-- Counter: Pageviews -->
                    <a class="col-md-3 col-sm-6 widget-holder widget-full-height" href="../contact/contact.php">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <div class="widget-counter">
                                    <h6>Total Inquires</h6>
                                    <?php 

                                        $blg = $link->rawQuery("select * from contact");

                                        if($link->count>0)
                                        {
                                            $bcount=0;

                                            foreach ($blg as $bdata) {
                                               $bcount++;
                                            }
                                        }
                                    ?>
                                    <h3 class="h1"><span class="counter"><?php echo $bcount; ?></span></h3><i class="material-icons list-icon">show_chart</i>
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </a>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
                <!-- Chart Group 1 -->
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
                                            <th>Order ID</th>
                                            <th>User</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Payment</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                    <?php

                                            $query = $link->rawQuery("select * from order_product where order_isActive=1");

                                            if($link->count>0)
                                            {
                                                foreach($query as $data)
                                                {


                                        ?>
                                        <tr>
                                            <td>Order#<?php echo $data['order_product_id']?></td>
                                            <td><?php echo $data['order_fullName']?></td>
                                            <td><?php echo $data['order_total']?></td>
                                            <td><?php echo $data['order_date']?></td>
                                            <td>
                                                    <select class="form-control" id="status_id" name="status_id" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                                        <option value="process.php?pid=<?php echo $data['order_product_id'];?>" <?php if($data['status_id']==1){ echo "selected"; } ?>><span class="badge badge-danger py-1 px-2">In Process</span></option>
                                                        <option value="shipping.php?pid=<?php echo $data['order_product_id'];?>" <?php if($data['status_id']==2){ echo "selected"; } ?>><span class="badge badge-info py-1 px-2">Shipping</span></option>
                                                        <option value="delivered.php?pid=<?php echo $data['order_product_id'];?>" <?php if($data['status_id']==3){ echo "selected"; } ?>><span class="badge badge-success py-1 px-2">Delivered</span></option>
                                                        
                                                    </select>
                                                </td>
                                                <td><?php echo $data['order_paymentType']?></td>
                                        </tr>
                                        <?php
                                            }
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
  

    <!-- /.content-wrapper -->
    <!-- FOOTER -->
    <?php
        include'../includes/footer.php';
    ?>
    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
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
