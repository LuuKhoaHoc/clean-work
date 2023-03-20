<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact | Bootstrap 5 Theme</title>

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
                    <h1 class="text-white mb-lg-0">Contact</h1>
                </div>

                <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>


    <section class="contact-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-12 me-auto mb-lg-0 mb-5">
                    <h2 class="my-3">We're happy to help</h2>

                    <p>Best Cleaning Service is ready to serve you. Clean Work is a professional website layout for your
                        business.</p>

                    <div class="contact-info bg-white shadow-lg">
                        <h3 class="mb-4">Contact Information</h3>

                        <h5 class="d-flex mt-3 mb-3">
                            <i class="bi-geo-alt-fill custom-icon me-3"></i>
                            Akershusstranda 20, 0150 Oslo, Norway
                        </h5>

                        <h5 class="d-flex mb-3">
                            <i class="bi-telephone-fill custom-icon me-3"></i>

                            <a href="tel: 110-220-9800">
                                110-220-9800
                            </a>
                        </h5>

                        <h5 class="d-flex">
                            <i class="bi-envelope-fill custom-icon me-3"></i>

                            <a href="mailto:info@company.com">
                                info@company.com
                            </a>
                        </h5>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <form class="custom-form consulting-form bg-white shadow-lg mb-5 mb-lg-0"
                          action="<?php echo htmlspecialchars("/clean-work/receiveOrder.php")?>" method="post" role="form">
                        <div class="consulting-form-header d-flex align-items-center">
                            <h3 class="mb-4">Get a Free Quotation</h3>
                        </div>

                        <div class="consulting-form-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="customer-name" id="customer-name" class="form-control"
                                           placeholder="John Walker" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="tel" name="customer-phone" id="customer-phone" pattern="[0-9]{10}"
                                           class="form-control" placeholder="Phone" required title="Must be 10 numbers">
                                </div>
                            </div>
                            <div class="row">
                                <div class="">
                                    <input type="email" name="customer-email" id="customer-email"
                                           pattern="[^ @]*@[^ @]*" class="form-control" placeholder="yours@gmail.com"
                                           required >
                                </div>
                            </div>
                            <div class="row">
                                <div class="">
                                    <input type="text" name="customer-address" id="customer-address"
                                           class="form-control" placeholder="Your Address" required>
                                </div>
                            </div>

                            <select class="form-select form-control" name="service-type-id" id="service-type-id"
                                    aria-label="Default select example">
                                <option selected>Service Type</option>
                                <option value="1">Office cleaning</option>
                                <option value="2">Kitchen cleaning</option>
                                <option value="3">Car washing</option>
                                <option value="4">Factory cleaning</option>
                            </select>

                            <textarea name="comment" rows="3" class="form-control" id="comment"
                                      placeholder="Comment (Optional)"></textarea>

                            <div class="col-lg-6 col-md-10 col-8 mx-auto">
                                <button type="submit" class="form-control">Submit Request</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
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
