<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.php?c=Customer_Display_Content_Controller">
            <img src="public/images/bubbles.png" class="logo img-fluid" alt="">

            <span class="ms-2">Clean Work</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?c=Customer_Display_Content_Controller&a=showHomeAction">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?c=Customer_Display_Content_Controller&a=showAboutUsAction">About
                        Us</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item"
                               href="index.php?c=Customer_Display_Content_Controller&a=showOurServiceAction">Our
                                Services</a></li>

                        <li><a class="dropdown-item"
                               href="index.php?c=Customer_Display_Content_Controller&a=showError404Action">Page 404</a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item dropdown show">
                    <a class="nav-link dropdown-toggle" id="navbarDropDownCustomer" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="d-none d-md-inline">
                            <?php /** @var  $customerInfo */
                            echo $customerInfo['name']
                            ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown dropdown-menu-light show" aria-labelledby="navbarDropDownCustomer"
                        style=" left: -15px;">
                        <!-- User image -->
                        <li style="width: 250px; background-color: var(--primary-color)" class="text-center">
                            <img src="public/dist/img/user_blank.png" class="rounded-circle" alt="User Image">
                            <p class="text-white">
                                <?php echo $customerInfo['name'] . " - " . strtoupper($customerInfo['type']) ?>
                                <br>
                                <small>Member since <?= $customerInfo['time'] ?></small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="text-center my-2 d-flex flex-column">
                            <a href="index.php?c=Customer_Display_Content_Controller&a=showProfileAction" class="btn btn-outline-info btn-flat m-1">Profile</a>
                            <?php
                            if ($_SESSION['customer_info']['type'] == "superadmin") {
                                echo '<a href="index.php?c=Superadmin_Display_Content_Controller&a=showDashboard" class="btn btn-outline-warning btn-flat m-1">Super Admin Page</a>';
                            } elseif ($_SESSION['customer_info']['type'] == "admin") {
                                echo '<a href="index.php?c=Admin_Display_Content_Controller&a=showOrdersAction" class="btn btn-outline-warning btn-flat m-1">Admin Page</a>';
                            } else {
                                echo '<a href="index.php?c=Customer_Display_Content_Controller&a=showViewOrder" class="btn btn-outline-warning btn-flat m-1">View Order</a>';
                            }


                            ?>
                            <a href="index.php?c=Customer_Account_Controller&a=logoutAction"
                               class="btn btn-outline-danger btn-flat m-1">Sign out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>