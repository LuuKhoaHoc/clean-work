<?php

use Administrator\CleanWork\classes\DB;

require_once "DB.php";

if (isset($_POST['action'])) {
    DB::ontheway_inprogress($_POST['order-id']);
    header("Refresh:0");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../public/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../public/dist/css/adminlte.min.css">
</head>
<body class="sidebar-mini layout-fixed container" style="height: auto">
<div class="wrapper bg-light border">
    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-primary navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <a href="" class="brand-link">
                <img src="../../public/images/bubbles.png" alt="Clean Work Logo"
                     class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text text-white text-uppercase">Clean Work</span>
            </a>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item dropdown mr-2">
                <a class="nav-item user-panel d-flex align-items-center" href="#">
                    <img src="../../public/dist/img/avatar.png"
                         class="img-circle" alt="User Image">
                    <span class="text-center text-white ml-2">0778978372</span>
                </a>
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
                        <h1>--Customer Page--</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Customer Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section id="data-tables" class="content">

            <!-- card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Orders Table</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline"
                           aria-describedby="example2_info">
                        <caption style="font-size: larger; font-weight: bold; line-height: 36px;">Table show order
                        </caption>
                        <thead>
                        <tr>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Rendering engine: activate to sort column ascending">ID
                            </th>
                            <th class="sorting sorting_desc" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                aria-sort="descending">Time
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Email
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Phone
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Service
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Price
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Address
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">State
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Action
                            </th>
                        </tr>
                        </thead>
                        <?php
                        $orders = admin_Model::show_order();
                        foreach ($orders as $order) { ?>
                            <tr>
                                <?php foreach ($order as $row) { ?>
                                    <td><?= $row ?></td>
                                <?php } ?>
                                <td class="btn-group">
                                    <form action="" method="post">
                                        <?php
                                        if ($order[8] == "in_progress") {
                                            echo '
                                        <button class="rounded-lg btn-secondary " type="submit" name="action" value="1" disabled>
                                            Confirmed
                                        </button>';
                                        } else {
                                            echo '
                                        <button class="rounded-lg btn-success " type="submit" name="action" value="1">
                                            Confirmed
                                        </button>';
                                        }
                                        ?>
                                        <input type="hidden" name="order-id" value="<?= $order[0] ?>">
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </div>
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="../../public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<!-- bs-custom-file-input -->
<script src="../../public/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="../../public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
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
    });
</script>
<!-- DataTables  -->
<script src="../../public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
</body>
</html>
