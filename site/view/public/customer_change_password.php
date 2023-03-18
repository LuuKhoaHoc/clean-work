<?php 
require 'site/controller/Customer_Account_Controller.php'; // Kết nối với cơ sở dữ liệu
$controler = new Customer_Account_Controller();
$controler->changePasswordAction();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap"
          rel="stylesheet">

    <link href="../../public/css/bootstrap.min.css" rel="stylesheet">

    <link href="../../public/css/bootstrap-icons.css" rel="stylesheet">

    <link href="../../public/css/tooplate-clean-work.css" rel="stylesheet">
    <!--

    Tooplate 2132 Clean Work

    https://www.tooplate.com/view/2132-clean-work

    Free Bootstrap 5 HTML Template

    -->
</head>

<body>

<?php include 'header.html'?>

<?php include 'nav.php' ?>

<main>

    <section class="banner-section d-flex justify-content-center align-items-end">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12">
                    <h1 class="text-white mb-lg-0">Change Password</h1>
                </div>

                <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <!-- /.col -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="settings">
                                    <form class="form-horizontal" method="post">
                                        <div class="form-group row mb-3">
                                            <label for="inputOldPass" class="col-sm-2 col-form-label">Old Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputOldPass" name="inputOldPass" placeholder="old password">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="inputNewPass" class="col-sm-2 col-form-label">New Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputNewPass" name="inputNewPass" placeholder="new password">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="inputCPass" class="col-sm-2 col-form-label">Confirmation Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputCPass" name="inputCPass" placeholder="confirm password">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-3">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" name="btn-change" class="btn btn-danger">Change</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</main>

<?php include 'footer.html'?>

<!-- JAVASCRIPT FILES -->
<script src="../../public/js/jquery.min.js"></script>
<script src="../../public/js/bootstrap.min.js"></script>
<script src="../../public/js/jquery.backstretch.min.js"></script>
<script src="../../public/js/counter.js"></script>
<script src="../../public/js/countdown.js"></script>
<script src="../../public/js/init.js"></script>
<script src="../../public/js/modernizr.js"></script>
<script src="../../public/js/animated-headline.js"></script>
<script src="../../public/js/custom.js"></script>

</body>
</html>
