<?php
include_once "../../config.php";
require_once PATH_SYSTEM."/DB.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../public/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../public/dist/css/adminlte.min.css">
</head>
<body>
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
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                           aria-describedby="example1_info">
                        <thead>
                        <tr>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-sort="ascending"
                                aria-label="ID: activate to sort column descending">ID
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Name: activate to sort column ascending">Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Phone: activate to sort column ascending">Phone
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Position: activate to sort column ascending">Position
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="">Check
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $query = "
                                SELECT emp.id, emp.name, emp.phone, employee_rank.name
                                FROM employees AS emp
                                INNER JOIN  employee_rank ON `emp`.rank_id = employee_rank.id;
                            ";
                        $row = mysqli_query(\Administrator\CleanWork\system\DB::connect(), $query);
                        $data = mysqli_fetch_all($row);
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
    <!-- /.card-body -->
</div>


<!-- jQuery -->
<script src="../../public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<!-- bs-custom-file-input -->
<script src="../../public/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="../../public/dist/js/adminlte.min.js"></script>
<script src="../../public/dist/js/adminlte.js"></script>
<script src="../../public/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../public/dist/js/demo.js"></script>
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
<script src="../../public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
</body>
</html>