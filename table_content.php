<?php


?>
<!doctype html>
<html lang="en">
<head>
    <?php include "admin/view/super_admin_header.php"; ?>
    <title>Super Admin Page</title>
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
                        <h1>Content Table</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Super Admin Page</li>
                            <li class="breadcrumb-item active">Content Table</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <section id="data-tables" class="content w-100">
                        <?php
                        include 'admin/view/table_show_order.php';

                        table_show_order::show_pages_table('Pages', 2);

                        ?>


                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!--    Main Footer-->
    <?php include "admin/view/super_admin_main-footer.php"; ?>
    <!--    ./Main Footer-->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

</div>
<?php include "admin/view/super_admin_footer.php"; ?>
</body>
</html>
