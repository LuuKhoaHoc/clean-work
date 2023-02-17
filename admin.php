<?php

require 'admin/model/admin_Model.php';
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case "0":
        case "-1":
            admin_Model::disproved($_POST['order-id']);
            break;
        case "1":
            admin_Model::verifying_verified($_POST['order-id']);
            break;
        case "2":
            admin_Model::verified_ontheway($_POST['order-id']);
            break;
        case "3":
            admin_Model::ontheway_inprogress($_POST['order-id']);
            break;
        case "4":
            admin_Model::inprogress_finished($_POST['order-id']);
            break;
        case "5":
            admin_Model::finished_ended($_POST['order-id']);
            break;
        default:
    }
    header("Refresh:0");
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./public/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="./public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="./public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="./public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./public/dist/css/adminlte.min.css">
</head>

<body class="sidebar-mini layout-fixed container" style="height: auto">
<div class="wrapper bg-light border">
    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-primary navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <a href="" class="brand-link">
                <img src="public/images/bubbles.png" alt="Clean Work Logo"
                     class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text text-white text-uppercase">Clean Work</span>
            </a>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item dropdown">
                <a class="nav-link user-panel" data-toggle="dropdown" href="#">
                    <img src="public/dist/img/user2-160x160.jpg"
                         class="img-circle" alt="User Image">
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-divider"></div>
                    <div class="user-panel mt-2 mb-2 d-flex justify-content-center align-items-center">
                        <img src="public/dist/img/user2-160x160.jpg"
                             class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="" class="d-block text-black text-center">admin@leowind.com</a>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="d-flex justify-content-around">
                        <a href="" class="d-block text-green">Inbox</a>
                        <a href="" class="d-block text-danger">Đăng xuất</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.Navbar -->
    <div class="" style="min-height: 1605px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>--Admin Page--</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Admin Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section id="data-tables" class="content">

            <?php
            include 'admin/view/table_show_order.php';
            $table = new card_of_table_show_order();

            $table->show('Verifying Table', 2, 'Confirmed');

            $table->show('Verified Table', 3, 'Dispatch');

            $table->show('On The Way Table', 4);

            $table->show('In Progress Table', 5);

            $table->show('Finished Table', 6, 'Payed');
            ?>

        </section>
        <!-- /.content -->
    </div>

    <footer class="main-footer ml-0">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.2.0
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
    </footer>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<!-- bs-custom-file-input -->
<script src="public/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $('#example3').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $('#example4').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $('#example5').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $('#example6').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<!-- DataTables  -->
<script src="public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
</body>
</html>
