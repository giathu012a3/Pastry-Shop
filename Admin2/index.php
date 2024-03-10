<?php
// include "Model/connect.php";
// include "Model/hanghoa.php";
// include "Model/loaisanpham.php";
session_start();
// unset($_SESSION['admin']);
set_include_path(get_include_path() . PATH_SEPARATOR . 'Model/');
spl_autoload_extensions('.php');
spl_autoload_register();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="Content/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="Content/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="Content/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="Content/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="Content/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="Content/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="Content/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="Content/assets/images/favicon.png" />
    <title>Admin SanPham</title>
</head>

<body>
    <div class="container-scroller">
        <!-- Thanh header tao menu -->
        <?php
        if (isset($_SESSION['admin'])) {
            include "View/headder.php";
        }

        ?>


        <?php
        if (isset($_SESSION['admin'])) {
            include "View/navbar.php";
        }

        ?>

        </div>

        <!-- end hinh dong -->
        <!-- phan thân -->
        <div class="container-fluid">

            <?php
            //load controler
            
            $ctrl = "dangnhap";
            if (isset($_GET['action']))
                $ctrl = $_GET['action'];
            include 'Controller/' . $ctrl . '.php';
            // include 'Controller/'.$ctrl.'.php';
            
            //end controller
            
            ?>
        </div>

        <!-- end menu right -->
    </div>
    <!-- footer -->
    <?php
    if (isset($_SESSION['admin'])) {
        include "View/footer.php";
    }
    ?>
    <!-- end footer -->

    <script src="Content/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="Content/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="Content/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="Content/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="Content/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="Content/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="Content/assets/js/off-canvas.js"></script>
    <script src="Content/assets/js/hoverable-collapse.js"></script>
    <script src="Content/assets/js/misc.js"></script>
    <script src="Content/assets/js/settings.js"></script>
    <script src="Content/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="Content/assets/js/dashboard.js"></script>
</body>

</html>