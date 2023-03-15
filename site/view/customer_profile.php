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

<?php include 'nav.html'?>

<main>

    <section class="banner-section d-flex justify-content-center align-items-end">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12">
                    <h1 class="text-white mb-lg-0">Profile</h1>
                </div>

                <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center mb-3">
                                <img class="profile-user-img img-fluid img-circle" src="../../public/dist/img/user4-128x128.jpg" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">Customer Name</h3>

                            <p class="text-muted text-center">New Customer</p>
                            <p class="text-muted text-center">Customer Email</p>
                            <p class="text-muted text-center">Customer Phone</p>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <!-- /.card -->
                </div>
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
                                    <form class="form-horizontal">
                                        <div class="form-group row mb-3">
                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputName" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                                <input type="tel" class="form-control" id="inputName2" placeholder="Phone">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-3">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
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
