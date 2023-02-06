<?php
require 'DB.php';
$orders = DB::show_order();
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
        default:
    }
    header("Refresh:0.5");
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
<body class="sidebar-mini layout-fixed" style="height: auto">
<div class="wrapper">

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="public/index3.html" class="brand-link">
            <img src="public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Page</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="public/dist/img/user2-160x160.jpg"
                         class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="" class="d-block">Admin</a>
                    <a href="" class="d-block text-center">Đăng xuất</a>
                </div>
            </div>
        </div>
        <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper" style="min-height: 1604.8px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
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
        <section class="content">

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
                        <?php foreach ($orders as $order) { ?>
                            <tr>
                                <?php foreach ($order as $row) { ?>
                                    <td><?= $row ?></td>
                                <?php } ?>
                                <td class="btn-group">
                                    <form action="" method="post">
                                        <?php
                                        echo match ($order[8]) {
                                            "verifying" => '
                    <button class="rounded-lg btn-success" type="submit" name="action" value="1">Confirmed</button>
                    <button class="rounded-lg btn-danger" type="submit" name="action" value="0">Disproved</button>',
                                            default => '
                    <button class="rounded-lg btn-danger" type="submit" name="action" value="-1">Disproved</button>',
                                        };
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
                        <?php foreach ($orders as $order) { ?>
                            <tr>
                                <?php foreach ($order as $row) { ?>
                                    <td><?= $row ?></td>
                                <?php } ?>
                                <td class="btn-group">
                                    <form action="" method="post">
                                        <?php
                                        echo match ($order[8]) {
                                            "verified" => '
                    <button class="rounded-lg btn-danger" type="submit" name="action" value="2">Dispatch</button>
                    <button class="rounded-lg btn-danger" type="submit" name="action" value="0">Disproved</button> ',
                                            default => '
                    <button class="rounded-lg btn-danger" type="submit" name="action" value="-1">Disproved</button>',
                                        };
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
                        <?php foreach ($orders as $order) { ?>
                            <tr>
                                <?php foreach ($order as $row) { ?>
                                    <td><?= $row ?></td>
                                <?php } ?>
                                <td class="btn-group">
                                    <form action="" method="post">
                                        <button class="rounded-lg btn-danger" type="submit" name="action" value="-1">
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
                        <?php foreach ($orders as $order) { ?>
                            <tr>
                                <?php foreach ($order as $row) { ?>
                                    <td><?= $row ?></td>
                                <?php } ?>
                                <td class="btn-group">
                                    <form action="" method="post">
                                        <?php
                                        echo match ($order[8]) {
                                            "in_progress" => '
                    <button class="rounded-lg btn-danger" type="submit" name="action" value="-1">Receive</button>
                    <button class="rounded-lg btn-danger" type="submit" name="action" value="-1">Disproved</button>
                                            ',
                                            default => '
                    <button class="rounded-lg btn-danger" type="submit" name="action" value="-1">Disproved</button>
                    ',
                                        };
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

        </section>
        <!-- /.content -->
    </div>
    <footer class="main-footer">
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
    });
</script>
<!-- DataTables  -->
<script src="public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
</body>
</html>
