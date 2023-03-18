<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="public/images/bubbles.png" class="logo img-fluid" alt="">

            <span class="ms-2">Clean Work</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="services.php">Our Services</a></li>

                        <li><a class="dropdown-item " href="coming-soon.php">Coming Soon</a></li>

                        <li><a class="dropdown-item" href="page-404.php">Page 404</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

                <li class="nav-item dropdown show ms-3">
                    <a class="nav-link dropdown-toggle" id="navbarDropDownCustomer" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="d-none d-md-inline"><?php echo $_SESSION['customer_info'][0][1] ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light show" aria-labelledby="navbarLightDropdownMenuLink" style="right: inherit; left: -15px;">
                        <!-- User image -->
                        <li style="width: 250px; background-color: var(--primary-color)" class="text-center">
                            <img src="public/dist/img/user2-160x160.jpg"  class="rounded-circle"  alt="User Image">
                            <p class="text-white">
                                <?php echo $_SESSION['customer_info'][0][1] . " - " . $_SESSION['customer_info'][0][4]  ?>
                                <br>
                                <small>Member since <?= $_SESSION['customer_info'][0][5] ?></small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="my-2">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="text-center my-2">
                            <a href="#" class="btn btn-outline-info btn-flat ">Profile</a>
                            <a href="index.php?c=Customer_Account_Controller&a=logoutAction" class="btn btn-outline-danger btn-flat float-right">Sign out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>