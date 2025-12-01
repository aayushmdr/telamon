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
        name='area' 
        label='Area' 
        type='text' 
    />

    <cms:editable 
        name='project_details' 
        label='Full Project Details' 
        type='richtext' 
        height='300' 
        default_value='<p>Add the full story, specifications, and client brief here.</p>'
    />

    <cms:repeatable name='extra_photos' label='Additional Photos'>
        <cms:editable name='extra_image' label='Slide Image' type='image' show_preview='1' preview_height='80' />
    </cms:repeatable>

 
    
    
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
    <?php include('partials/header-light.php'); ?>
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
                                <li><span>Area</span><cms:show area /></li>
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
                                <cms:show_repeatable 'extra_photos'>
                                    <div class="swiper-slide">
                                        <div class="image">
                                            <img class="fit-image" src="<cms:show extra_image/>" alt="Project Extra Image">
                                        </div>
                                    </div>
                                </cms:show_repeatable>
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

    <div class="section section-padding text-center my-5">
        <a href="project.php">
            <button class="btn btn-secondary">
            Go back
        </button>
        </a>
    </div>

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

</cms:if>
<cms:else/>
    <cms:pages masterpage='project-details.php' >
    </cms:pages>
<?php COUCH::invoke(); ?>