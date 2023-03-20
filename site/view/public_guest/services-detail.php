<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>
            <?=
            /** @var $service */
            $service['name']; ?> | Bootstrap 5 Theme
        </title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="/../clean-work/public/css/bootstrap.min.css" rel="stylesheet">

        <link href="/../clean-work/public/css/bootstrap-icons.css" rel="stylesheet">

        <link href="/../clean-work/public/css/magnific-popup.css" rel="stylesheet">

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

        <main>

            <section class="banner-section d-flex justify-content-center align-items-end">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-12">
                            <h1 class="text-white mb-lg-0"><?= $service['name']; ?></h1>
                        </div>

                        <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/../clean-work/index.php">Home</a></li>

                                    <li class="breadcrumb-item active" aria-current="page"><?= $service['name']; ?></li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
            </section>
         

            <section class="services-detail-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <div class="services-image-wrap">
                                <img src="/../clean-work/public/images/services/people-taking-care-office-cleaning.jpg" class="services-image img-fluid" alt="">
                                <img src="/../clean-work/public/images/services/person-taking-care-office.jpg" class="services-image services-image-hover img-fluid" alt="">

                                <div class="services-icon-wrap">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-white mb-0">
                                            <i class="bi-cash me-2"></i>
                                            $<?= $service['price']; ?>
                                        </p>

                                        <p class="text-white mb-0">
                                            <i class="bi-clock-fill me-2"></i>
                                            <?= $service['duration']; ?> hrs
                                        </p>
                                    </div>                                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="services-info px-4 pt-4">
                                <h2 class="mb-4"><?= $service['name']; ?></h2>

                                <p><?= $service['description']; ?></p>

                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-padding pt-0">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h2 class="mb-4">Photo gallery</h2>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12">
                            <a href="/../clean-work/public/images/coronavirus-pandemic-disinfector-protective-suit-mask-sprays-disinfectants-house-office.jpg" class="image-popup">
                                <img src="/../clean-work/public/images/coronavirus-pandemic-disinfector-protective-suit-mask-sprays-disinfectants-house-office.jpg" class="gallery-image img-fluid">
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12 my-4 my-lg-0 my-md-0">
                            <a href="/../clean-work/public/images/disinfecting-home.jpg" class="image-popup">
                                <img src="/../clean-work/public/images/disinfecting-home.jpg" class="gallery-image img-fluid">
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12">
                            <a href="/../clean-work/public/images/essential-goods-during-epidemic-prevention-protection.jpg" class="image-popup">
                                <img src="/../clean-work/public/images/essential-goods-during-epidemic-prevention-protection.jpg" class="gallery-image img-fluid">
                            </a>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h2 class="mb-4">Related Services</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="services-thumb mb-lg-0">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="services-image-wrap">
                                            <a href="index.php?c=Guest_Display_Content_Controller&a=showServiceDetailAction&s=car-washing">
                                                <img src="/../clean-work/public/images/services/man-polishing-car-inside-car-service.jpg" class="services-image img-fluid" alt="">
                                                <img src="/../clean-work/public/images/services/man-polishing-car-inside.jpg" class="services-image services-image-hover img-fluid" alt="">

                                                <div class="services-icon-wrap">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-white mb-0">
                                                            <i class="bi-cash me-2"></i>
                                                            $240
                                                        </p>

                                                        <p class="text-white mb-0">
                                                            <i class="bi-clock-fill me-2"></i>
                                                            2 hrs
                                                        </p>
                                                    </div>                                                    
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                        <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                            <h4 class="services-title mb-1 mb-lg-2">
                                                <a class="services-title-link" href="index.php?c=Guest_Display_Content_Controller&a=showServiceDetailAction&s=car-washing">Car Washing</a>
                                            </h4>

                                            <p>Best Cleaning Service Provider Ipsum dolor sit consectetur kengan</p>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="reviews-icons">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                </div>

                                                <a href="index.php?c=Guest_Display_Content_Controller&a=showServiceDetailAction&s=car-washing" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                                    <span>Learn More</span>

                                                    <div class="marquee" aria-hidden="true">
                                                        <div class="marquee__inner">
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="services-thumb mb-lg-0">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="services-image-wrap">
                                            <a href="index.php?c=Guest_Display_Content_Controller&a=showServiceDetailAction&s=factory-cleaning">
                                                <img src="/../clean-work/public/images/services/professional-industrial-cleaner-protective-uniform-cleaning-floor-food-processing-plant.jpg" class="services-image img-fluid" alt="">
                                                <img src="/../clean-work/public/images/services/close-up-mop-cleaning-industrial-plant-floor.jpg" class="services-image services-image-hover img-fluid" alt="">

                                                <div class="services-icon-wrap">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-white mb-0">
                                                            <i class="bi-cash me-2"></i>
                                                            $<?= $service['price']; ?>
                                                        </p>

                                                        <p class="text-white mb-0">
                                                            <i class="bi-clock-fill me-2"></i>
                                                            <?= $service['duration']; ?> hrs
                                                        </p>
                                                    </div>                                                    
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                        <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                            <h4 class="services-title mb-1 mb-lg-2">
                                                <a class="services-title-link" href="index.php?c=Guest_Display_Content_Controller&a=showServiceDetailAction&s=factory-cleaning">Factory Cleaning</a>
                                            </h4>

                                            <p><?= $service['subtitle'] ?></p>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="reviews-icons">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star"></i>
                                                </div>

                                                <a href="index.php?c=Guest_Display_Content_Controller&a=showServiceDetailAction&s=factory-cleaning" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                                    <span>Learn More</span>

                                                    <div class="marquee" aria-hidden="true">
                                                        <div class="marquee__inner">
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="partners-section">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-12 col-12">
                            <h4 class="partners-section-title bg-white shadow-lg">Trusted by companies</h4>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="/../clean-work/public/images/partners/glorix.svg" class="partners-image img-fluid">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="/../clean-work/public/images/partners/rolf-leasing.svg" class="partners-image img-fluid">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="/../clean-work/public/images/partners/woocommerce.svg" class="partners-image img-fluid">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="/../clean-work/public/images/partners/toprak-leasing.svg" class="partners-image img-fluid">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="/../clean-work/public/images/partners/unilabs.svg" class="partners-image img-fluid">
                        </div>

                    </div>
                </div>
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
        <script src="/../clean-work/public/js/jquery.magnific-popup.min.js"></script>
        <script src="/../clean-work/public/js/magnific-popup-options.js"></script>
        <script src="/../clean-work/public/js/custom.js"></script>

    </body>
</html>
