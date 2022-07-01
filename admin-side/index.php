
<html>
<head>
    
    <script src="assets/js/pace.min.js"></script>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    
    <link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.png">
    
    <title>Login</title>
    
    <!-- CSS -->
    <link href="assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="assets/css/sweetalert2.css" rel="stylesheet" type="text/css">
    <link href="assets/css/magnific-popup.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/mediaelementplayer.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css">
    <link href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    
    <!-- Head Libs -->
    <script src="js/modernizr.min.js"></script>

</head>

<body class="body-bg-full profile-page" style="background-image: url(assets/demo/night.jpg)">
    
    <div id="wrapper" class="row wrapper">
        <div class="col-10 ml-sm-auto col-sm-6 col-md-4 ml-md-auto login-center mx-auto">
            <div class="navbar-header text-center">
                <a href="index.html">
                    <img alt="" src="assets/img/VrihiLogo2.jpg">
                </a>
            </div>
            <!-- /.navbar-header -->
            <form class="form-material" name="admin-login" action="LoginCode.php" method="POST">
                
                <div class="form-group">
                    <label>Admin Password</label>
                    <input type="password" placeholder="password" class="form-control form-control-line" name="pass" id="pass" maxlength="08" required >
                </div>
                <div class="err">
                    <?php
                        if(isset($_REQUEST['err']) && $_REQUEST['err']==1)
                        {
                            ?>
                                <p style="color:red;">Invaid Password.</p>
                            <?php
                        }
                    ?>
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-lg btn-color-scheme ripple" type="submit" name="login" id="login">Login</button>
                </div>
             
                <!-- /.form-group -->
            </form>
            <!-- /.form-material -->
            <hr>
            <div class="row btn-list">
            <footer class="col-sm-12 text-center">

            </footer>
        </div>
        <!-- /.login-center -->
    </div>
    <!-- /.body-container -->
    <!-- Scripts -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
   
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/material-design.js"></script>

</body>
</html>
