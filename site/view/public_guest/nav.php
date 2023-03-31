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
                    <a class="nav-link" href="index.php?c=Guest_Display_Content_Controller&a=showHomeAction">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?c=Guest_Display_Content_Controller&a=showAboutUsAction">About Us</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="index.php?c=Guest_Display_Content_Controller&a=showOurServiceAction">Our Services</a></li>

                        <li><a class="dropdown-item" href="index.php?c=Guest_Display_Content_Controller&a=showError404Action">Page 404</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?c=Guest_Display_Content_Controller&a=showContactAction">Contact</a>
                </li>

                <li class="nav-item ms-3">
                    <a class="nav-link custom-btn custom-border-btn custom-btn-bg-white btn" href="index.php?c=Guest_Display_Content_Controller&a=showLoginAction">Get started</a>
                </li>
            </ul>
        </div>
    </div>
</nav>