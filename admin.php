<?php
require 'DB.php';
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case "0":
        case "-1":
            DB::disproved($_POST['order-id']);
            break;
        case "1":
            DB::verifying_verified($_POST['order-id']);
            break;
        case "2":
            DB::verified_ongoing($_POST['order-id']);
            break;
        case "3":
            DB::ongoing_inprogress($_POST['order-id']);
            break;
        case "4":
            DB::inprogress_completed($_POST['order-id']);
            break;
        case "5":
            DB::completed_finished($_POST['order-id']);
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

            <!-- card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Verifying Table</h3>

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
                        $orders = DB::show_order(2);
                        foreach ($orders as $order) { ?>
                            <tr>
                                <?php foreach ($order as $row) { ?>
                                    <td><?= $row ?></td>
                                <?php } ?>
                                <td class="btn-group">
                                    <form action="" method="post">
                                        <button class="rounded-lg btn-success" type="submit" name="action" value="1">
                                            Confirmed
                                        </button>
                                        <button class="rounded-lg btn-danger" type="submit" name="action" value="0">
                                            Disproved
                                        </button>

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
            <!-- card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Verified Table</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                    </div>
                </div>
                <div class="card-body">
                    <table id="example3" class="table table-bordered table-hover dataTable dtr-inline"
                           aria-describedby="example3_info">
                        <caption style="font-size: larger; font-weight: bold; line-height: 36px;">Table show order
                        </caption>
                        <thead>
                        <tr>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                aria-label="Rendering engine: activate to sort column ascending">ID
                            </th>
                            <th class="sorting sorting_desc" tabindex="0" aria-controls="example3" rowspan="1"
                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                aria-sort="descending">Time
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Email
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Phone
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Service
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Price
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Address
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">State
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Action
                            </th>
                        </tr>
                        </thead>
                        <?php
                        $orders = DB::show_order(3);
                        foreach ($orders as $order) { ?>
                            <tr>
                                <?php foreach ($order as $row) { ?>
                                    <td><?= $row ?></td>
                                <?php } ?>
                                <td class="btn-group">
                                    <form action="" method="post">
                                        <button class="rounded-lg btn-success" type="submit" name="action" value="2">
                                            Dispatch
                                        </button>
                                        <button class="rounded-lg btn-danger" type="submit" name="action" value="0">
                                            Disproved
                                        </button>

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
            <!-- card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">On The Way Table</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                    </div>
                </div>
                <div class="card-body">
                    <table id="example4" class="table table-bordered table-hover dataTable dtr-inline"
                           aria-describedby="example4_info">
                        <caption style="font-size: larger; font-weight: bold; line-height: 36px;">Table show order
                        </caption>
                        <thead>
                        <tr>
                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1"
                                aria-label="Rendering engine: activate to sort column ascending">ID
                            </th>
                            <th class="sorting sorting_desc" tabindex="0" aria-controls="example4" rowspan="1"
                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                aria-sort="descending">Time
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Email
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Phone
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Service
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Price
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Address
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">State
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Action
                            </th>
                        </tr>
                        </thead>
                        <?php
                        $orders = DB::show_order(4);
                        foreach ($orders as $order) { ?>
                            <tr>
                                <?php foreach ($order as $row) { ?>
                                    <td><?= $row ?></td>
                                <?php } ?>
                                <td class="btn-group">
                                    <form action="" method="post">
                                        <button class="rounded-lg btn-danger" type="submit" name="action" value="0">
                                            Disproved
                                        </button>

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
            <!-- card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">In Progress Table</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                    </div>
                </div>
                <div class="card-body">
                    <table id="example5" class="table table-bordered table-hover dataTable dtr-inline"
                           aria-describedby="example5_info">
                        <caption style="font-size: larger; font-weight: bold; line-height: 36px;">Table show order
                        </caption>
                        <thead>
                        <tr>
                            <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1"
                                aria-label="Rendering engine: activate to sort column ascending">ID
                            </th>
                            <th class="sorting sorting_desc" tabindex="0" aria-controls="example5" rowspan="1"
                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                aria-sort="descending">Time
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Email
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Phone
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Service
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Price
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Address
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">State
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Action
                            </th>
                        </tr>
                        </thead>
                        <?php
                        $orders = DB::show_order(5);
                        foreach ($orders as $order) { ?>
                            <tr>
                                <?php foreach ($order as $row) { ?>
                                    <td><?= $row ?></td>
                                <?php } ?>
                                <td class="btn-group">
                                    <form action="" method="post">
                                        <button class="rounded-lg btn-danger" type="submit" name="action" value="0">
                                            Disproved
                                        </button>

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
            <!-- card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Finished Table</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                    </div>
                </div>
                <div class="card-body">
                    <table id="example6" class="table table-bordered table-hover dataTable dtr-inline"
                           aria-describedby="example6_info">
                        <caption style="font-size: larger; font-weight: bold; line-height: 36px;">Table show order
                        </caption>
                        <thead>
                        <tr>
                            <th class="sorting" tabindex="0" aria-controls="example6" rowspan="1" colspan="1"
                                aria-label="Rendering engine: activate to sort column ascending">ID
                            </th>
                            <th class="sorting sorting_desc" tabindex="0" aria-controls="example6" rowspan="1"
                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                aria-sort="descending">Time
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example6" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example6" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Email
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example6" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Phone
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example6" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Service
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example6" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Price
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example6" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Address
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example6" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">State
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example6" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Action
                            </th>
                        </tr>
                        </thead>
                        <?php
                        $orders = DB::show_order(6);
                        foreach ($orders as $order) { ?>
                            <tr>
                                <?php foreach ($order as $row) { ?>
                                    <td><?= $row ?></td>
                                <?php } ?>
                                <td class="btn-group">
                                    <form action="" method="post">
                                        <button class="rounded-lg btn-success" type="submit" name="action" value="5">
                                            Payed
                                        </button>
                                        <button class="rounded-lg btn-danger" type="submit" name="action" value="0">
                                            Disproved
                                        </button>

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
