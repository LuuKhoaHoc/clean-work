<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.php?c=Customer_Display_Content_Controller">
            <img src="public/images/bubbles.png" class="logo img-fluid" alt="">

            <span class="ms-2">Clean Work</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?c=Customer_Display_Content_Controller">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?c=Customer_Display_Content_Controller&a=showAboutUsAction">About Us</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="index.php?c=Customer_Display_Content_Controller&a=showOurServiceAction">Our Services</a></li>

                        <li><a class="dropdown-item" href="index.php?c=Customer_Display_Content_Controller&a=showError404Action">Page 404</a></li>
                    </ul>
                </li>


                <li class="nav-item dropdown show ms-3">
                    <a class="nav-link dropdown-toggle" id="navbarDropDownCustomer" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="d-none d-md-inline"><?php echo $_SESSION['customer_info']['name'] ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light show" aria-labelledby="navbarLightDropdownMenuLink" style="right: inherit; left: -15px;">
                        <!-- User image -->
                        <li style="width: 250px; background-color: var(--primary-color)" class="text-center">
                            <img src="public/dist/img/user2-160x160.jpg"  class="rounded-circle"  alt="User Image">
                            <p class="text-white">
                                <?php echo $_SESSION['customer_info']['name'] . " - " . ucwords($_SESSION['customer_info']['type'])  ?>
                                <br>
                                <small>Member since <?= $_SESSION['customer_info']['time'] ?></small>
                            </p>
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