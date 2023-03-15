<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once "admin/view/super_admin_header.php"; ?>
  <title>Sign Up - Clean Work</title>

</head>

<body class="register-page" style="min-height: 540px;">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="index.php" class="h1 d-flex align-items-center justify-content-around">
          <img src="public/images/bubbles.png" alt="Clean Work Logo" class="img-circle w-25 "
            style="object-fit: cover; opacity: .8">
          <b>Clean Work</b>
        </a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign up a new membership</p>

        <form action="login.php" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Full name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Retype password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                  I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <a href="login.php" class="text-center">I already have a membership</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <?php include_once "admin/view/super_admin_footer.php" ?>

</body>

</html>