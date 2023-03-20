<?php
//include 'admin/model/superadmin_Model.php';
?>
<!doctype html>
<html lang="en">
<head>
    <?php include "admin/view/public/super_admin_header.php"; ?>
    <title>Super Admin Page</title>
    <style type="text/css">/* Chart.js */
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }
            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor, .chartjs-size-monitor-expand, .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand > div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink > div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }</style>
</head>
<body class="sidebar-mini layout-fixed" style="height: auto">
<div class="wrapper">

    <!-- Navbar -->
    <?php include "admin/view/public/super_admin_nav.php"; ?>
    <!-- /.Navbar -->

    <!-- Main Sidebar Container -->
    <?php include "admin/view/public/super_admin_aside.php"; ?>
<!--    ./ Main Sidebar Container -->

    <div class="content-wrapper" style="min-height: 1605px;">
        <?php



        ?>
        <?php include_once "dashboard.php"; ?>
    </div>

<!--    Main Footer-->
    <?php include "admin/view/public/super_admin_main-footer.php"; ?>
<!--    ./Main Footer-->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<?php include "admin/view/public/super_admin_footer.php" ?>
</body>
</html>
