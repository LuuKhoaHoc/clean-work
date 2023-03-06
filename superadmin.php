<?php

require 'admin/model/superadmin_Model.php';

$orders = superadmin_Model::show_order();
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case "0":
        case "-1":
            superadmin_Model::disproved($_POST['order-id']);
            break;
        case "1":
            superadmin_Model::verifying_verified($_POST['order-id']);
            break;
        case "2":
            superadmin_Model::verified_ontheway($_POST['order-id']);
            break;
        default:
    }
    header("Refresh:0.5");
}
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "admin/includes/super_admin_header.php"; ?>
    <title>Admin Page</title>
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
    <?php include "admin/includes/super_admin_nav.php"; ?>
    <!-- /.Navbar -->

    <!-- Main Sidebar Container -->
    <?php include "admin/includes/super_admin_aside.php"; ?>
<!--    ./ Main Sidebar Container -->

    <div class="content-wrapper" style="min-height: 1605px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Welcome to super admin page <strong class="text-green">[Admin_Name]</strong></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">SuperAdmin Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <?php
                    include "admin/view/small_box_info.php";

                    small_box_info::show_box('New Order', superadmin_Model::countNewOrder(), 'info', 'bag');

                    small_box_info::show_box('Earn This Month', superadmin_Model::earnThisMonth(), 'success', 'stats-bars');

                    small_box_info::show_box('New Customers', superadmin_Model::countCusThisMonth(), 'warning', 'person-add');

                    small_box_info::show_box('Total Orders', superadmin_Model::totalOrders(), 'danger', 'pie-graph');
                    ?>
                </div>
                <div class="row">
                    <div class="card col-lg-10">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Sales</h3>
                                <a href="javascript:void(0);">View Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg text-green">
                                         <?= superadmin_Model::totalMoney(); ?>
                                    </span>
                                    <span>Sales Over Time</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 33.1%
                    </span>
                                    <span class="text-muted">Since last month</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->

                            <div class="position-relative mb-4">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <canvas id="sales-chart" style="display: block; width: 764px; height: 200px;"
                                        class="chartjs-render-monitor" width="764" height="200"></canvas>
                            </div>

                            <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This year
                  </span>

                                <span>
                    <i class="fas fa-square text-gray"></i> Last year
                  </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->

                    <div class="card col-lg-2">
                        <div class="card-header border-0">
                            <h3 class="card-title">Online Store Overview</h3>
                            <div class="card-tools">
                                <a href="#" class="btn btn-sm btn-tool">
                                    <i class="fas fa-download"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-tool">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                <?php small_box_info::show_card('CONVERSION RATE', '12%', 'up', 'ion ion-ios-refresh-empty', 'success'); ?>
                            </div>
                            <!-- /.d-flex -->
                            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                <?php small_box_info::show_card('SALES RATE', '0.8%', 'up', 'ion ion-ios-cart-outline', 'warning'); ?>
                            </div>
                            <!-- /.d-flex -->
                            <div class="d-flex justify-content-between align-items-center mb-0">
                                <?php small_box_info::show_card('REGISTRATION RATE', '1%', 'down', 'ion ion-ios-people-outline', 'danger'); ?>
                            </div>
                            <!-- /.d-flex -->
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="card col-lg-12">
                        <div class="card-header">
                            <h3 class="card-title text-danger">In-Progress</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0" style="display: block;">
                            <table class="table table-striped projects">
                                <thead>
                                <tr>
                                    <th style="width: 1%">
                                        #
                                    </th>
                                    <th style="width: 20%">
                                        Project Name
                                    </th>
                                    <th style="width: 30%">
                                        Team Members
                                    </th>
                                    <th>
                                        Project Progress
                                    </th>
                                    <th style="width: 8%" class="text-center">
                                        Status
                                    </th>
                                    <th style="width: 20%">
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            AdminLTE v3
                                        </a>
                                        <br>
                                        <small>
                                            Created 01.01.2019
                                        </small>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                                            </div>
                                        </div>
                                        <small>
                                            57% Complete
                                        </small>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success">Success</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            AdminLTE v3
                                        </a>
                                        <br>
                                        <small>
                                            Created 01.01.2019
                                        </small>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width: 47%">
                                            </div>
                                        </div>
                                        <small>
                                            47% Complete
                                        </small>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success">Success</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            AdminLTE v3
                                        </a>
                                        <br>
                                        <small>
                                            Created 01.01.2019
                                        </small>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                                            </div>
                                        </div>
                                        <small>
                                            77% Complete
                                        </small>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success">Success</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            AdminLTE v3
                                        </a>
                                        <br>
                                        <small>
                                            Created 01.01.2019
                                        </small>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            </div>
                                        </div>
                                        <small>
                                            60% Complete
                                        </small>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success">Success</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            AdminLTE v3
                                        </a>
                                        <br>
                                        <small>
                                            Created 01.01.2019
                                        </small>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar5.png">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%">
                                            </div>
                                        </div>
                                        <small>
                                            12% Complete
                                        </small>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success">Success</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            AdminLTE v3
                                        </a>
                                        <br>
                                        <small>
                                            Created 01.01.2019
                                        </small>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                                            </div>
                                        </div>
                                        <small>
                                            35% Complete
                                        </small>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success">Success</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            AdminLTE v3
                                        </a>
                                        <br>
                                        <small>
                                            Created 01.01.2019
                                        </small>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar5.png">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                            </div>
                                        </div>
                                        <small>
                                            87% Complete
                                        </small>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success">Success</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            AdminLTE v3
                                        </a>
                                        <br>
                                        <small>
                                            Created 01.01.2019
                                        </small>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                                            </div>
                                        </div>
                                        <small>
                                            77% Complete
                                        </small>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success">Success</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            AdminLTE v3
                                        </a>
                                        <br>
                                        <small>
                                            Created 01.01.2019
                                        </small>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar5.png">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                                            </div>
                                        </div>
                                        <small>
                                            77% Complete
                                        </small>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success">Success</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

<!--    Main Footer-->
    <?php include "admin/includes/super_admin_main-footer.php"; ?>
<!--    ./Main Footer-->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<?php include "admin/includes/super_admin_footer.php" ?>
</body>
</html>
