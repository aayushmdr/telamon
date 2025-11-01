<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Video Page Content' clonable='0' icon='video'>

    <cms:repeatable name='videos' label='Youtube Videos Links'>
        <cms:editable name='video_thumb' label='Video Thumbnail' type='image' show_preview='1' preview_height='80' />
        <cms:editable name='video_title' label='Video Title' type='text' />
        <cms:editable name='video_date' label='Date' type='datetime' />
        <cms:editable name='video_link' label='Youtube Link URL' type='text' />
    </cms:repeatable>

</cms:template>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TDC | Videos</title>
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon/favicon.ico">


    <!-- Vendor CSS (Icon Font) -->


    <link rel="stylesheet" href="assets/css/vendor/icofont.min.css">
    <link rel="stylesheet" href="assets/css/vendor/ionicons.min.css">


    <!-- Plugins CSS (All Plugins Files) -->


    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/aos.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/nice-select.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/odometer.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/fancybox.min.css" />


    <!-- Main Style CSS -->

    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/custom.css" />



    <!-- Use the minified version files listed below for better performance and remove the files listed above -->



    <!-- 
    <link rel="stylesheet" href="assets/css/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">  
    -->
</head>

<body>
    <!-- Header Section Start -->
    <div class="header section-fluid border-bottom">

        <!-- Header Wrapper Start -->
        <div class="header-wrapper">
            <div class="header-sticky bg-white">
                <div class="container-fluid">
                    <div class="row align-items-center">

                        <div class="col-lg-2 col-md-3 col-6">
                            <!-- Header Logo Start -->
                            <div class="header-logo">
                                <a href="index.php">
                                    <img class="fit-image" src="assets/img/logo/telamon-logo-blue.webp" alt="Header Logo">
                                </a>
                            </div>
                            <!-- Header Logo End -->

                        </div>

                        <div class="col-lg-8 col-md-7 d-none d-md-block">

                            <!-- Main Menu Language Wrapper Start -->
                            <div class="main-menu-language-wrapper">

                                <!-- Main Menu Start -->
                                <nav class="main-menu">
                                    <ul>
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="project.php">Gallery</a>
                                        </li>
                                        <li>
                                            <a href="about.php">About Us</a>
                                        </li>
                                        <li>
                                            <a class="active" href="videos.php">Videos</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- Main Menu End -->

                            </div>

                        </div>

                        <div class="col-lg-2 col-md-2 col-6">

                            <!-- Mobile Menu Hamburger Start -->
                            <div class="mobile-menu-hamburger">
                                <a href="javascript:void(0)">
                                    <span>Menu</span>
                                    <i class="icon ion-android-menu"></i>
                                </a>
                            </div>
                            <!-- Mobile Menu Hamburger End -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Mobile Menu Start -->
        <div class="mobile-menu-wrapper">
            <div class="offcanvas-overlay"></div>

            <!-- Mobile Menu Inner Start -->
            <div class="mobile-menu-inner">
                <!-- Mobile Menu Inner Top Start -->
                <div class="mobile-menu-inner-top">

                    <!-- Mobile Menu Logo Start  -->
                    <div class="logo-mobile">
                        <img src="assets/img/logo/telamon-logo-blue.webp" alt="Logo" class="img-fluid">
                    </div>
                    <!-- Mobile Menu Logo End -->

                    <!-- Button Close Start -->
                    <div class="offcanvas-btn-close">
                        <i class="icofont-close-line"></i>
                    </div>
                    <!-- Button Close End -->

                </div>
                <!-- Mobile Menu Inner Top End -->

                <!-- Mobile Menu Start -->
                <div class="mobile-navigation">
                    <nav>
                        <ul class="mobile-menu">
                            <li class="has-children">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="has-children">
                                <a href="project.php">Gallery</a>
                            </li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="videos.php">Videos</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Mobile Menu End -->
            </div>
            <!-- Mobile Menu Inner End -->
        </div>
        <!-- Mobile Menu End -->

    </div>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Start -->
    <div class="section section-margin-sm">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">

                    <!-- breadcrumb Wrapper Start -->
                    <div class="breadcrumb-wrapper">
                        <!-- Bread Title Start -->
                        <div class="bread-title">
                            <h1 class="title">Our Videos</h1>
                        </div>
                        <!-- Bread Title End -->

                        <!-- Post Meta Start -->
                        <ul class="post-meta">
                            <li><a href="index.php">Home</a></li>
                            <li>Videos</li>
                        </ul>
                        <!-- Post Meta End -->
                    </div>
                    <!-- breadcrumb Wrapper End -->

                </div>
            </div>

        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Project Section Start Here -->
    <div class="section mb-5">
        <div class="container mb-5" data-aos="fade-up" data-aos-delay="300">
            <cms:show_repeatable 'videos'>
                <div class="border rounded-2 p-5">
                    <div class="row">
                    <div class="col-md-3">
                        <img class="fit-image" src="<cms:show video_thumb />" alt="<cms:show video_title />">
                    </div>
                    <div class="col-md-6 align-content-center">
                        <h3 class="mt-2 mt-md-0"><cms:show video_title /></h3>
                        <cms:date video_date format='jS M, Y' />

                    </div>
                    <div class="col-md-3 mt-2 mt-md-0 align-content-center">
                        <a href="<cms:show video_link />" target="_blank"><button class="btn btn-primary">Watch Now</button></a>
                    </div>
                </div>
                </div>

                
            </cms:show_repeatable>
        </div>
    </div>
    <!-- project Section End Here -->

    <!-- Main Footer -->
    <footer class="section section-padding-top bg-light overflow-hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo mx-auto">
                        <a href="index.php"><img src="assets/img/logo/telamon-logo-blue.webp" alt="Logo Black"
                                class="img-fluid" /></a>
                    </div>
                    <!-- Footer Logo End -->

                    <!-- Footer Nav Start -->
                    <ul class="footer-nav mb-n3">
                        <li class="mb-3"><a href="index.php">Home</a></li>
                        <li class="mb-3"><a href="project.php">Gallery</a></li>
                        <li class="mb-3"><a href="about.php">About us</a></li>
                        <li class="mb-3"><a href="contact.html">Contact us</a></li>
                    </ul>
                    <!-- Footer Nav End -->

                    <!-- Contact Info Start -->
                    <div class="contact-info">24 Daftar Marg<br> Nhusal-23, Kathmandu, Nepal <br> <a
                            href="tel:+977 9841676764">+977 9841676764</a> <br> <a
                            href="mailto:telamondesign.info@gmail.com">telamondesign.info@gmail.com</a></div>
                    <!-- Contact Info End -->

                    <!-- Footer Social Icons Start -->
                    <ul class="footer-social-icons social-media-link justify-content-center">
                        <li><a href="https://www.facebook.com/telamon.dc/" class="icofont-facebook"></a></li>
                        <li><a href="https://www.youtube.com/@TDCinfo" class="icofont-youtube-play"></a></li>
                        <li><a href="#" class="icofont-instagram"></a></li>
                        <!-- <li><a href="#" class="icofont-linkedin"></a></li>
                        <li><a href="#" class="icofont-rss"></a></li>
                        <li><a href="#" class="icofont-dribbble"></a></li> -->
                    </ul>
                    <!-- Footer Social Icons End -->

                    <!-- Copyright Start -->
                    <div class="copyright">© 2025 <span>Telamon Design Consult</span></div>
                    <!-- Copyright End -->
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->

    <!-- Scroll Top Start -->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top icofont-circled-up"></i>
        <i class="arrow-bottom icofont-circled-up"></i>
    </a>
    <!-- Scroll Top End -->

    <!-- Scripts -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>


    <!-- Plugins JS -->
    <script src="assets/js/plugins/aos.min.js"></script>
    <script src="assets/js/plugins/countdown.min.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/odometer.min.js"></script>
    <script src="assets/js/plugins/isotope.min.js"></script>
    <script src="assets/js/plugins/jquery.fancybox.min.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->


    <!-- 
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/plugins.min.js"></script> 
-->



    <!--Main JS-->
    <script src="assets/js/main.js"></script>
</body>

</html>

<?php COUCH::invoke(); ?>