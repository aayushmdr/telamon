<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Project Entries' clonable='1' commentable='0'>

    <cms:editable 
            name='project_thumbnail' 
            label='Project Thumbnail' 
            desc='Image to be shown in the main gallery listing' 
            type='image' 
            show_preview='1' 
            preview_height='100'
    />

    <cms:editable 
        name='caption' 
        label='Caption' 
        type='text' 
        default_value='Residential'
    />

    <cms:editable 
        name='project_category' 
        label='Category' 
        desc='Select the project category for filtering' 
        type='dropdown'
        opt_values='Residential | Commercial | Mix-use | Interior | Public'
        default_value='Residential'
    />

   
    <cms:editable 
        name='project_client' 
        label='Client Name' 
        type='text' 
        default_value='Confidential Client'
    />
    
    <cms:editable 
        name='project_location' 
        label='Location' 
        type='text' 
        default_value='Madrid, Spain'
    />
    
    <cms:editable 
        name='project_start_date' 
        label='Start Date' 
        type='datetime' 
        default_value='2024-01-01'
    />
    
    <cms:editable 
        name='project_end_date' 
        label='End Date' 
        type='datetime' 
        default_value='2024-12-31'
    />

    <cms:editable 
        name='project_details' 
        label='Full Project Details' 
        type='richtext' 
        height='300' 
        default_value='<p>Add the full story, specifications, and client brief here.</p>'
    />
    
    
</cms:template>

<cms:if k_is_page>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TDC | Project Details</title>
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
                                            <a class="" href="project.php">Gallery</a>
                                        </li>
                                        <li>
                                            <a href="about.html">About Us</a>
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
                            <li><a href="about.html">About</a></li>
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

    <!-- Project Banner Section Start -->
    <div class="section">
        <div class="project-banner-section">
            <div class="image">
                <img class="fit-image" src="<cms:show project_thumbnail />" alt="Project">
            </div>
        </div>
    </div>
    <!-- Project Banner Section End -->

    <!-- Project Details Section Start -->
    <div class="section mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 ms-auto me-auto">
                    <!-- Project Details Content Start -->
                    <div class="project-details-content" data-aos="fade-up" data-aos-delay="300">

                        <h1 class="project-details-title"><cms:show caption /></h1>

                        <div class="info-boxed">
                            <ul>
                                <li><span>Location</span><cms:show project_location /></li>
                                <li><span>Client</span><cms:show project_client /></li>
                                <li><span>Start Date</span><cms:date project_start_date format='jS M, y' /></li>
                                <li><span>End Date</span><cms:date project_end_date format='jS M, y' /></li>
                                <li><span>Type</span><cms:show project_category /></li>
                            </ul>
                        </div>
                        <p><cms:show project_details /></p>
                    </div>
                    <!-- Project Details Content End -->
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-delay="400">
                    <!-- Project Details Slider Start -->
                    <div class="project-details-carousel">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img class="fit-image" src="assets/images/project/project-details/slide-1.jpg" alt="Project Image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img class="fit-image" src="assets/images/project/project-details/slide-1.jpg" alt="Project Image">
                                    </div>
                                </div>
                            </div>



                            <!-- Swiper Pagination Start -->
                            <div class="swiper-pagination"></div>
                            <!-- Swiper Pagination End -->

                            <!-- Swiper Navigation Start -->
                            <div class="project-details-slider-prev swiper-button-prev"><i class="icofont-thin-left"></i></div>
                            <div class="project-details-slider-next swiper-button-next"><i class="icofont-thin-right"></i></div>
                            <!-- Swiper Navigation End -->
                        </div>
                    </div>
                    <!-- Project Details Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Project Details Section End -->

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
                        <li class="mb-3"><a href="about.html">About us</a></li>
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

</cms:if>
<cms:else/>
    <cms:pages masterpage='project-details.php' >
    </cms:pages>
<?php COUCH::invoke(); ?>