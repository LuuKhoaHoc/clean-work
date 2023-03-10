<?php require 'admin/model/superadmin_Model.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <?php include "admin/view/super_admin_header.php"; ?>
</head>
<body class="sidebar-mini layout-fixed" style="height: auto">
<div class="wrapper">

    <!-- Navbar -->
    <?php include "admin/view/super_admin_nav.php"; ?>
    <!-- /.Navbar -->

    <!-- Main Sidebar Container -->
    <?php include "admin/view/super_admin_aside.php"; ?>
    <!--    ./ Main Sidebar Container -->
    <div class="content-wrapper" style="min-height: 1604.8px;">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Employees List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Super Admin Page</li>
                            <li class="breadcrumb-item active">Employees List</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row d-flex align-items-center">
                                    <div class="col-sm-12 col-md-6">
                                        <select class="form-control " name="position" id="position">
                                            <option value="0">--None--</option>
                                            <option value="1">Manager</option>
                                            <option value="2">Supervisor</option>
                                            <option value="3">Director</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="d-flex" style="gap: 10px">
                                            <button class="btn-success rounded">Promote</button>
                                            <button class="btn-warning rounded">Demote</button>
                                            <button class="btn-danger rounded">Dismissed</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1"
                                                   class="table table-bordered table-striped dataTable dtr-inline"
                                                   aria-describedby="example1_info">
                                                <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="example1" rowspan="1"
                                                        colspan="1" aria-sort="ascending"
                                                        aria-label="ID: activate to sort column descending">ID
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Name: activate to sort column ascending">Name
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Phone: activate to sort column ascending">Phone
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Position: activate to sort column ascending">
                                                        Position
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="">Check
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <?php
                                                $data = superadmin_Model::showEmp();
                                                foreach ($data as $emp) {
                                                    ?>
                                                    <tr>
                                                        <?php
                                                        foreach ($emp as $e) {
                                                            ?>
                                                            <td><?= $e ?></td>
                                                        <?php } ?>
                                                        <td>
                                                            <label>
                                                                <input type="checkbox" name="checkbox"
                                                                       value="1" <?= $emp[3] == 'Director' ? 'disabled' : '' ?>>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                <?php } ?>


                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">ID</th>
                                                    <th rowspan="1" colspan="1">Name</th>
                                                    <th rowspan="1" colspan="1">Phone</th>
                                                    <th rowspan="1" colspan="1">Position</th>
                                                    <th rowspan="1" colspan="1">Action</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.card-body -->
    <?php include "admin/view/super_admin_main-footer.php"; ?>
    <!--    ./Main Footer-->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <?php include "admin/view/super_admin_footer.php"; ?>
</div>

<?php include "admin/view/super_admin_footer.php"; ?>
</body>
</html>