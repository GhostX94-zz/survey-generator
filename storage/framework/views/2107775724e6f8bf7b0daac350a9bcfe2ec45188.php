<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>::Inicio::</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="assets/images/logo/apple-touch-icon.html">
    <link rel="shortcut icon" href="assets/images/logo/favicon.ico">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/vendor/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- page css -->

    <!-- core css -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="app header-default side-nav-dark">
        <div class="layout">
            
            <?php echo $__env->make('helper.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('helper.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Page Container START -->
            <div class="page-container">
                
                <?php echo $__env->make('encuesta.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </div>
            
            <!-- Page Container END -->
            <?php echo $__env->make('helper.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>

    <script src="assets/js/vendor.js"></script>

    <script src="assets/js/app.min.js"></script>

    <!-- page js -->
    <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="assets/vendor/jquery.sparkline/jquery.sparkline.min.js"></script>
    

</body>
</html>