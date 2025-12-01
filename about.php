<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='About Us Page' clonable='0' icon='info'>
    <cms:editable name='main_heading' label='Main Heading' type='text' default_value='Default Title' />
    <cms:editable name='paragraph' label='Description Paragraph' type='textarea' />
    <cms:editable name='about_image' label='Left Image' type='image' show_preview='1' npreview_height='80' />

</cms:template>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TDC | About US</title>
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

    <link rel="stylesheet" href="assets/css/custom.css" />
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
    <?php $active_page = 'about'; ?>
    <?php include('partials/header-dark.php'); ?>
    <!-- Header Section End -->

    <!-- Project Banner Section Start -->
    <div class="section about-banner-image">
        <div class="container">
            <div class="row">
                <div class="content" data-aos="fade-up" data-aos-delay="300">
                    <h1 class="title"><cms:show main_heading/></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Banner Section End -->

    <!-- History Section Start -->
    <div class="section section-padding-top overflow-hidden">
        <div class="container">
            <div class="row mb-n10">
                <div class="col-lg-6 mb-10 col-md-12 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="500">
                    <div class="">
                        <img class="fit-image" src="<cms:show about_image />" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mb-10 col-md-12 align-self-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="500">
                    <div class="history-wrapper">
                        <h1 class="title"><cms:show main_heading/></h1>
                        <div class="history-content">
                            <h4 class="subtitle"><cms:show paragraph/></h4>
                        </div>
                        <!-- <div class="signature">
                            <img src="assets/images/icon/sign.png" alt="Sign">
                            <h4 class="title">Meeza Manandhar</h4>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- History Section End -->

    <!-- Services Section Start -->
    <div class="section section-padding-top bg-lights mb-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Start -->
                    <div class="section-title" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="title">Why Telamon?</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-12">
                    <div class="service-inner-container">

                        <!-- Service Block Start -->
                        <div class="service-block" data-aos="fade-up" data-aos-delay="300">
                            <div class="inner-box">
                                <h5 class="title">
                                    <a href="project-details.html">End-to-End Solutions</a>
                                </h5>
                                <p>From concept to completion, our team handles every detail with craftsmanship and
                                    care.</p>
                                <div class="icon-link-bottom">
                                    <i class="icon icofont-building-alt"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Service Block End -->

                        <!-- Service Block Start -->
                        <div class="service-block" data-aos="fade-up" data-aos-delay="400">
                            <div class="inner-box">
                                <h5 class="title">
                                    <a href="project-details.html">Design-Driven Excellence</a>
                                </h5>
                                <p>We merge architectural creativity with functional precision to deliver designs that
                                    inspire and endure.

                                </p>
                                <div class="icon-link-bottom">
                                    <i class="icon icofont-ruler-compass-alt"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Service Block End -->

                        <!-- Service Block Start -->
                        <div class="service-block" data-aos="fade-up" data-aos-delay="500">
                            <div class="inner-box">
                                <h5 class="title">
                                    <a href="project-details.html">Client-Centered Approach</a>
                                </h5>
                                <p>We collaborate closely with you, translating your vision into meaningful, practical
                                    spaces.</p>
                                <div class="icon-link-bottom">
                                    <i class="icon icofont-user-suited"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Service Block End -->

                        <!-- Service Block Start -->
                        <div class="service-block" data-aos="fade-up" data-aos-delay="600">
                            <div class="inner-box">
                                <h5 class="title">
                                    <a href="project-details.html">Sustainable Innovations</a>
                                </h5>
                                <p>Our designs embrace sustainability, blending modern technologies with responsible
                                    building practices.</p>
                                <div class="icon-link-bottom">
                                    <i class="icon icofont-earth"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Service Block End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- Work Section Start -->
    <div class="section work-image-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <!-- <h4 class="subtitle" data-aos="fade-up" data-aos-delay="300">how we work</h4> -->
                        <h3 class="title" data-aos="fade-up" data-aos-delay="300">Architecture, <br/> Unfolded Digitally</h3>
                        <p data-aos="fade-up" data-aos-delay="300">Architecture is more than what you see—it's about the stories, challenges, and choices behind every design. Our YouTube channel opens the door to those conversations. Through vlogs, tutorials, and project features, we aim to educate, spark dialogue, and connect with a global community that shares our passion for thoughtful design.</p>
                        <a href="https://www.youtube.com/watch?v=trDtTgR0ziA" class="lightbox-image video-box clearfix" data-aos="fade-up" data-aos-delay="300"><br><span class="fa-play ion ion-ios-play"><i class="ripple "></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Work Section End -->


    <!-- Main Footer -->
    <?php include('partials/footer.php'); ?>
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