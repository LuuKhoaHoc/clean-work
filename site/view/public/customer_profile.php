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

    <link href="/../clean-work/public/css/bootstrap.min.css" rel="stylesheet">

    <link href="/../clean-work/public/css/bootstrap-icons.css" rel="stylesheet">

    <link href="/../clean-work/public/css/tooplate-clean-work.css" rel="stylesheet">
    <!--

    Tooplate 2132 Clean Work

    https://www.tooplate.com/view/2132-clean-work

    Free Bootstrap 5 HTML Template

    -->
</head>

<body>

<?php include 'header.html'?>

<?php include 'nav.php' ?>
<?php /** @var $customerInfo */ ?>

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
                            <li class="breadcrumb-item"><a href="/../clean-work/index.php?c=Customer_Display_Content_Controller&a=showHomeAction">Home</a></li>

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
                                <img class="profile-user-img img-fluid img-circle" src="/../clean-work/public/dist/img/user_blank.png" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $customerInfo['name'] ?></h3>

                            <p class="text-muted text-center"><?= ucwords($customerInfo['type']) ?></p>
                            <p class="text-muted text-center"><?= $customerInfo['email'] ?></p>
                            <p class="text-muted text-center"><?= $customerInfo['phone'] ?></p>

                        </div>
                        <div class="text-center mb-3">
                            <a class="btn btn-info" href="index.php?c=Customer_Display_Content_Controller&a=showChangeInfoAction">Edit Profile</a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
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
<script src="/../clean-work/public/js/jquery.min.js"></script>
<script src="/../clean-work/public/js/bootstrap.min.js"></script>
<script src="/../clean-work/public/js/jquery.backstretch.min.js"></script>
<script src="/../clean-work/public/js/counter.js"></script>
<script src="/../clean-work/public/js/countdown.js"></script>
<script src="/../clean-work/public/js/init.js"></script>
<script src="/../clean-work/public/js/modernizr.js"></script>
<script src="/../clean-work/public/js/animated-headline.js"></script>
<script src="/../clean-work/public/js/custom.js"></script>

</body>
</html>
