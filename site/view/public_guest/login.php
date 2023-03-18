<?php
ob_start();
session_start()
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Clean Work</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/../clean-work/public/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/../clean-work/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/../clean-work/public/dist/css/adminlte.min.css">
</head>
<body class="login-page" style="min-height: 466px;">
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="/../clean-work/index.php" class="h1 d-flex align-items-center justify-content-around">
                <img src="/../clean-work/public/images/bubbles.png" alt="Clean Work Logo"
                     class="img-circle w-25 " style="object-fit: cover; opacity: .8">
                <b>Clean Work</b>
            </a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Sign in to start your services</p>

            <form action="/../clean-work/index.php?c=Customer_Account_Controller&a=loginAction" method="post">

                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-1">
                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                    <div class="input-group-append">
                        <div class="input-group-text" onclick="hideAndShow()">
                            <span id="lock-icon" class="fas fa-eye-slash"></span>
                        </div>
                    </div>
                </div>
                <small class="text-muted text-red"><?php global $errMsg; echo $errMsg ?></small>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block my-1">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <p class="mb-0">
                <a href="sign_up.php" class="text-center">Sign up a new membership</a>
            </p>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- Add on functions -->
<script src="/../clean-work/public/js/addOnFunction.js"></script>
<!-- jQuery -->
<script src="/../clean-work/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/../clean-work/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/../clean-work/public/dist/js/adminlte.min.js"></script>

</body>
</html>
