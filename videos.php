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
    <?php $active_page = 'videos'; ?>
    <?php include('partials/header-light.php'); ?>
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