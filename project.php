<?php require_once( 'couch/cms.php' ); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TDC | Gallery</title>
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
    <?php $active_page = 'projects'; ?>
    <?php include('partials/header-light.php'); ?>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="300">

                    <!-- breadcrumb Wrapper Start -->
                    <div class="breadcrumb-wrapper">
                        <!-- Bread Title Start -->
                        <div class="bread-title">
                            <h1 class="title">The TDC Gallery</h1>
                        </div>
                        <!-- Bread Title End -->

                        <!-- Post Meta Start -->
                        <ul class="post-meta">
                            <li><a href="index.php">Home</a></li>
                            <li>Gallery</li>
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
    <div class="section project-masonry-section">
        <div class="container-fluid">
            <div class="row mt-n2">

                <!-- project Menu Start -->
                <div class="messonry-button text-center mb-10">
                    <button data-filter="*" class="is-checked port-filter">All</button>
                    <button data-filter=".Residential" class="port-filter">Residentials</button>
                    <button data-filter=".Commercial" class="port-filter">Commercials</button>
                    <button data-filter=".Mix-use" class="port-filter">Mix-Use</button>
                    <button data-filter=".Interior" class="port-filter">Interior</button>
                </div>
                <!-- project Menu End -->

            </div>

            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1  mesonry-list">

                <div class="resizer col"></div>

                <!-- Single project Start -->
                <cms:pages masterpage='project-details.php'>
                    <div class="col <cms:show project_category /> mb-5">
                    <div class="single-project-wrap">
                        <div class="project-thumb position-relative m-0">
                            <a class="image" href="<cms:show k_page_link />">
                                <img src="<cms:show project_thumbnail />" alt="<cms:show caption />">
                            </a>
                        </div>
                        <div class="inner-content">
                            <div class="sub-title"><cms:show project_category/></div>
                            <h4 class="title"><a href="<cms:show k_page_link />"><cms:show caption /></a></h4>
                        </div>
                    </div>
                </div>
                </cms:pages>
                <!-- Single project End -->

            </div>

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