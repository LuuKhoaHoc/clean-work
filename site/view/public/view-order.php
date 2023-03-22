<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>View Order</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap"
          rel="stylesheet">

    <link href="/../clean-work/public/css/bootstrap.min.css" rel="stylesheet">

    <link href="/../clean-work/public/css/bootstrap-icons.css" rel="stylesheet">

    <link href="/../clean-work/public/css/tooplate-clean-work.css" rel="stylesheet">
    <link rel="stylesheet" href="/../clean-work/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/../clean-work/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/../clean-work/public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!--

    Tooplate 2132 Clean Work

    https://www.tooplate.com/view/2132-clean-work

    Free Bootstrap 5 HTML Template

    -->
</head>

<body>

<?php include 'header.html' ?>

<?php include 'nav.php' ?>

<main>

    <section class="banner-section d-flex justify-content-center align-items-end">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12">
                    <h1 class="text-white mb-lg-0">View Order</h1>
                </div>

                <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/../clean-work/index.php?c=Customer_Display_Content_Controller">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">View Order</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>


    <section id="data-tables" class="content">

        <!-- card -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table id="example10" class="table table-bordered table-hover dataTable dtr-inline"
                       aria-describedby="example2_info">
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
                    <tr>
                        <?php
//                        print_r($_SESSION['customer_info']['email']);

                        /** @var  $orders */
                        foreach ($orders as $row) { ?>
                            <td><?= $row ?></td>
                        <?php } ?>
                        <td class="btn-group">
                            <form action="" method="post">
                                <?php
                                if ($orders['state'] == "in_progress") {
                                    echo '
                                        <button class="rounded-lg btn-success " type="submit" name="action" value="1" >
                                            Confirmed
                                        </button>';
                                } else {
                                    echo '
                                        <button class="rounded-lg btn-secondary " type="submit" name="action" value="1" disabled>
                                            Confirmed
                                        </button>';
                                }
                                ?>
                            </form>
                        </td>
                    </tr>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</main>

<?php include 'footer.html' ?>

<!-- ./wrapper -->
<!-- jQuery -->
<script src="/../clean-work/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/../clean-work/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<!-- bs-custom-file-input -->
<script src="/../clean-work/public/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="/../clean-work/public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

<!-- DataTables  -->
<script src="/../clean-work/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/../clean-work/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/../clean-work/public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/../clean-work/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
    $(function () {
        $('#example10').DataTable({
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
<!-- JAVASCRIPT FILES -->
<script src="/../clean-work/public/js/jquery.backstretch.min.js"></script>
<script src="/../clean-work/public/js/counter.js"></script>
<script src="/../clean-work/public/js/countdown.js"></script>
<script src="/../clean-work/public/js/init.js"></script>
<script src="/../clean-work/public/js/modernizr.js"></script>
<script src="/../clean-work/public/js/animated-headline.js"></script>
<script src="/../clean-work/public/js/custom.js"></script>

</body>
</html>
