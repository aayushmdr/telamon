<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Homepage Content' clonable='0' icon='home'>
    <cms:repeatable name='hero_slides' label='Hero Slideshow Content'>
        <cms:editable name='slide_image' label='Slide Background Image'
            desc='The main background image for this slide (1920x1080 recommended)' type='image' show_preview='1'
            preview_height='100' default_value='assets/img/hero-banner.jpg' />
        <cms:editable name='slide_subtitle' label='Slide Subtitle' desc='e.g., Residential Design' type='text'
            default_value='Residential Design' />
        <cms:editable name='slide_title' label='Slide Header Title' type='text' default_value='Default Title.' />
        <cms:editable name='slide_paragraph' label='Slide Paragraph Text' type='textarea'
            default_value='Contact your administrator to change this.' />
    </cms:repeatable>

    <cms:repeatable name='lower_slideshow' label='Lower Content Slideshow Items'>
        <cms:editable name='lower_slide_image' label='Slide Image' type='image' show_preview='1' preview_height='80'
            default_value='assets/img/hero-banner.jpg' />
        <cms:editable name='lower_slide_text' label='Slide Title' type='text' default_value='Default Title' />
        <cms:editable name='lower_slide_tag' label='Slide Tag' type='text' default_value='Default subtitle' />
    </cms:repeatable>

</cms:template>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Telamon Design Consult</title>
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
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />


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
    <div class="header header-transparent-bg section-fluid">

        <!-- Header Wrapper Start -->
        <div class="header-wrapper">
            <div class="header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">

                        <div class="col-lg-2 col-md-3 col-6">
                            <!-- Header Logo Start -->
                            <div class="header-logo">
                                <a href="index.php">
                                    <img class="fit-image" src="assets/img/logo/telamon-logo-white.webp"
                                        alt="Header Logo">
                                </a>
                            </div>
                            <!-- Header Logo End -->

                        </div>

                        <div class="col-lg-8 col-md-7 d-none d-md-block">

                            <!-- Main Menu Language Wrapper Start -->
                            <div class="main-menu-language-wrapper">

                                <!-- Main Menu Start -->
                                <nav class="main-menu main-menu-white">
                                    <ul>
                                        <li>
                                            <a class="active" href="index.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="project.php">Gallery</a>
                                            <!-- <ul class="submenu">
                                                <li><a href="project.php">Project</a></li>
                                                <li><a href="project-details.html">Project Details</a></li>
                                            </ul> -->
                                        </li>
                                        <li>
                                            <a href="about.php">About Us</a>
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
                            <div class="mobile-menu-hamburger mobile-menu-hamburger-white">
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
                        <img src="assets/img/logo/telamon-logo-blue.png" alt="Logo" class="w-100 img-fluid">
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
                                <a href="project.php">Our Works</a>
                                <!-- <ul class="dropdown">
                                    <li><a href="project.php">Project</a></li>
                                    <li><a href="project-details.html">Project Details</a></li>
                                </ul> -->
                            </li>
                            <!-- <li class="has-children">
                                <a href="#">News <i class="icofont-rounded-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> -->
                            <li><a href="about.php">About</a></li>
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

    <!-- Hero Section Start -->
    <div class="section position-relative overflow-hidden">

        <!-- Hero Slider Start -->
        <div class="hero-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    <cms:show_repeatable 'hero_slides'>

                        <div class="hero-slide-item swiper-slide">

                            <div class="hero-slide-bg">
                                <img src="<cms:show slide_image />" alt="Slider Image" />
                            </div>
                            <div class="container">
                                <div class="hero-slide-content">

                                    <h4 class="subtitle">
                                        <cms:show slide_subtitle />
                                    </h4>

                                    <h3 class="title">
                                        <cms:show slide_title />
                                    </h3>

                                    <p>
                                        <cms:show slide_paragraph />
                                    </p>

                                    <div class="d-flex flex-row gap-4">
                                        <a href="mailto: meeza.manandhar@telamondesignconsult.com" class="btn btn-light">Contact Us</a>
                                        <a href="project.php" class="btn btn-link">View Our Work</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </cms:show_repeatable>
                </div>

                <!-- Swiper Pagination Start -->
                <div class="swiper-pagination d-md-none"></div>
                <!-- Swiper Pagination End -->

                <!-- Swiper Navigation Start -->
                <div class="home-slider-prev swiper-button-prev d-md-flex d-none"><i
                        class="ion-ios-arrow-thin-left"></i></div>
                <div class="home-slider-next swiper-button-next d-md-flex d-none"><i
                        class="ion-ios-arrow-thin-right"></i></div>
                <!-- Swiper Navigation End -->

            </div>
        </div>
        <!-- Hero Slider End -->

        <!-- Hero Slider Social Start -->
        <div class="hero-slider-social">

            <!-- Social Media Link Start -->
            <div class="social-media-link social-link-white">
                <a href="https://www.youtube.com/@TDCinfo" class="icofont-youtube-play"></a>
                <a href="https://www.facebook.com/telamon.dc/" class="icofont-facebook"></a>
                <!-- <a href="#"><i class="icofont-instagram"></i></a> -->
            </div>
            <!-- Social Media Link End -->
        </div>
        <!-- Hero Slider Social End -->

    </div>
    <!-- Hero Section End -->

    <!-- History Section Start -->
    <div class="section section-padding-top overflow-hidden">
        <div class="container">
            <div class="row mb-n10">
                <div class="col-lg-6 mb-10 col-md-12 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="500">
                    <div class="history-image">
                        <img class="fit-image" src="assets/img/telamon.jpg" alt="Image of marble statue of Telamon">
                    </div>
                </div>
                <div class="col-lg-6 mb-10 col-md-12 align-self-center order-1 order-lg-2" data-aos="fade-left"
                    data-aos-delay="500">
                    <div class="history-wrapper">
                        <h1 class="title">Bold Designs. Seamless Execution.</h1>
                        <div class="history-content">
                            <h4 class="subtitle">Telamon Design Consult Pvt. Ltd. (TDC) is a private sector company duly
                                constituted under The Companies Act Nepal offering professional services in the building
                                sector from
                                concept to commissioning for building services such as architecture, civil engineering,
                                community
                                planning, urban development and project administration .
                                The office is registered at Newroad, Kathmandu and currently operational from
                                Jhamshikhel, Lalitpur.
                                TDC has capable and experienced personals with adequate skills in specialized field and
                                ensure a
                                high level of professionalism, while arriving at project solution.</p>
                        </div>
                        <!-- <div class="signature">
                            <img src="assets/images/icon/sign.png" alt="Sign">
                            <h4 class="title">Daniel JR</h4>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- History Section End -->

    <!-- Services Section Start -->
    <div class="section section-padding-top bg-light">
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
            <div class="row my-0 my-lg-5 section-padding">
                <div class="col-lg-6">
                    <img src="./assets/img/gallery/residence/@bhaisepati/ele02.png" alt=""
                        class="img-fluid rounded-1 h-100 object-fit-cover">
                </div>
                <div class="col-lg-6">
                    <div class="row px-md-3 py-3">
                        <div class="col-sm-6 mt-sm-0">
                            <div class="custom-card-metrics rounded-1 d-flex flex-column gap-2 p-3">
                                <p class="text-uppercase fs-6 m-0">Projects</p>
                                <h1 class="display-5 m-0"><count-up lazy="lazy">25</count-up>+</h1>
                                <p class="text-black-50 small m-0">successfully delivered across residential, commercial
                                    and
                                    urban
                                    design sectors.</p>

                            </div>
                        </div>
                        <div class="col-sm-6 mt-sm-0">
                            <div class="custom-card-metrics rounded-1 d-flex flex-column gap-2 p-3">
                                <p class="text-uppercase fs-6 m-0">Years of Experience</p>
                                <h1 class="display-5 m-0"><count-up lazy="lazy">8</count-up>+</h1>
                                <p class="text-black-50 small m-0">shaping spaces with purpose, creativity and
                                    precision.
                                </p>

                            </div>
                        </div>
                        <div class="col-sm-6 mt-sm-0">
                            <div class="custom-card-metrics rounded-1 d-flex flex-column gap-2 p-3">
                                <p class="text-uppercase fs-6 m-0">Client Satisfaction</p>
                                <h1 class="display-5 m-0"><count-up lazy="lazy">100</count-up>%</h1>
                                <p class="text-black-50 small m-0">measured through post-project feedback and repeat
                                    clients.</p>

                            </div>
                        </div>
                        <div class="col-sm-6 mt-sm-0">
                            <div class="custom-card-metrics rounded-1 d-flex flex-column gap-2 p-3">
                                <p class="text-uppercase fs-6 m-0">Commitment</p>
                                <h1 class="display-5 m-0"><count-up lazy="lazy">110</count-up>%</h1>
                                <p class="text-black-50 small m-0">commitment to quality, innovation and detail in every
                                    project we
                                    undertake.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <div class="section section-padding">
                <div class="container">
            <div class="mb-5">
                <h1 class="fw-bold">
                    Our Services
                </h1>
            </div>
            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="custom-card-services rounded-1 d-flex flex-column gap-2 p-4">
                        <i class="ri-home-smile-line ri-3x mb-4"></i>
                        <h4 class="text-primary m-0">Residential Architecture</h4>
                        <p class="m-0 small">We design homes that reflect your lifestyle and personality -
                            crafted with precision, comfort and timeless style in mind.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="custom-card-services rounded-1 d-flex flex-column gap-2 p-4">
                        <i class="ri-building-line ri-3x mb-4"></i>
                        <h4 class="text-primary m-0">Commercial Design</h4>
                        <p class="m-0 small">From retail spaces to corporate offices, we create environments that are
                            functional, future-ready and visually compelling.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="custom-card-services rounded-1 d-flex flex-column gap-2 p-4">
                        <i class="ri-armchair-line ri-3x mb-4"></i>
                        <h4 class="text-primary m-0">Interior Design</h4>
                        <p class="m-0 small">Our interiors blend aesthetics with practicality, bringing cohersion and
                            elegance
                            to every room and space.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="custom-card-services rounded-1 d-flex flex-column gap-2 p-4">
                        <i class="ri-home-gear-line ri-3x mb-4"></i>
                        <h4 class="text-primary m-0">Renovation & Restoration</h4>
                        <p class="m-0 small">We breathe new life into existing structures, respecting their history
                            while
                            modernizing for today's needs. </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="custom-card-services rounded-1 d-flex flex-column gap-2 p-4">
                        <i class="ri-earth-line ri-3x mb-4"></i>
                        <h4 class="text-primary m-0">Sustainable Design</h4>
                        <p class="m-0 small">We integrate eco-consicous materials and energy-efficient strategies to
                            create
                            spaces that are responsible and resilient. </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="custom-card-services rounded-1 d-flex flex-column gap-2 p-4">
                        <i class="ri-plant-line ri-3x mb-4"></i>
                        <h4 class="text-primary m-0">Urban & Landscape Planning</h4>
                        <p class="m-0 small">Large-scale thinking meets human-centered design - building better
                            communities
                            through thoughtful planning.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Tab Section Start -->
    <div class="section bg-light work-section">
        <div class="container">
            <div class="row mb-5 pb-5" data-aos="fade-up" data-aos-delay="300">

                <!-- Section Title Start -->
                <div class="align-self-end col-xl-3 col-md-6">
                    <div class="section-title mb-0">
                        <h2 class="title">Latest Works</h2>
                    </div>
                </div>
                <!-- Section Title End -->

                <!-- Tab Start -->
                <div class="col-xl-6 col-md-1 col-sm-12">

                </div>
                <!-- Tab End -->

                <!-- All Project Button Start -->
                <div class="col-xl-3 col-md-5 col-sm-12">
                    <div class="all-project-btn">
                        <a href="project.php">See All Projects <i class="arrow icofont-rounded-right"></i></a>
                    </div>
                </div>
                <!-- All Project Button End -->

            </div>
        </div>
        <div class="container-auto">
            <!-- Tab Content Start -->
            <div class="tab-content" data-aos="fade-up" data-aos-delay="400">
                <div class="tab-pane fade show active" id="tab-item-all">
                    <div class="tab-pane-carousel position-relative">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <cms:show_repeatable 'lower_slideshow'>

                                    <div class="swiper-slide">

                                        <div class="single-project-slide">
                                            <div class="thumb">
                                                <img class="fit-image" src="<cms:show lower_slide_image />"
                                                    alt="Slide Image" />
                                            </div>
                                            <div class="content">
                                                <h4 class="subtitle">
                                                    <cms:show lower_slide_tag />
                                                </h4>
                                                <h3 class="title"><a href="#"></a>
                                                    <cms:show lower_slide_text />
                                                </h3>
                                            </div>
                                        </div>

                                    </div>
                                </cms:show_repeatable>
                            </div>


                            <!-- Swiper Pagination Start -->
                            <div class="swiper-pagination d-none"></div>
                            <!-- Swiper Pagination End -->

                            <!-- Swiper Navigation Start -->
                            <div class="tab-carousel-prev swiper-button-prev"><i class="icofont-thin-left"></i></div>
                            <div class="tab-carousel-next swiper-button-next"><i class="icofont-thin-right"></i></div>
                            <!-- Swiper Navigation End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tab Content End -->
        </div>
    </div>
    <!-- Project Tab Section End -->

    <div class="section section-padding custom-bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column align-self-lg-center pe-lg-5 mb-4 mb-lg-0">
                    <h2 class="mb-4 fw-bold">Ready to Design the Future? Let's Build Something Great Together!</h2>
                    <p class="m-0">
                        Whether you have a vision in mind or need help shaping one, we’re here to turn your
                        architectural ideas into reality. Reach out to start the conversation.
                    </p>
                    <div class="mt-3 mt-lg-5 location-details d-flex flex-column">
                        <div class="detail-item d-flex align-items-center mb-2">
                            <i class="icon icofont-envelope"></i>
                            <p class="m-0 ms-2">hello@telamondesignconsult.com</p>
                        </div>
                        <div class="detail-item d-flex align-items-center mb-2">
                            <i class="icon icofont-envelope"></i>
                            <p class="m-0 ms-2">telamondesign.info@gmail.com</p>
                        </div>
                        <div class="detail-item d-flex align-items-center mb-2">
                            <i class="icon icofont-location-pin"></i>
                            <p class="m-0 ms-2">24 Daftar Marg, Nhusal-23, Kathmandu</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">

                    <div id="form-alert" class="alert alert-success alert-dismissible fade d-none mt-3" role="alert">
                        <strong>Message sent!</strong> We’ll get back to you soon.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <form id="contact-form" action="https://formsubmit.co/e37624adfb7356686eed8c00eb09f4bc"
                        method="POST">
                        <input type="hidden" name="_captcha" value="false">
                        <!-- <input type="hidden" name="_next" value="https://yourwebsite.com/thank-you.html"> -->
                        <input type="hidden" name="_subject" value="New Inquiry from Telamon Website">

                        <div class="row mb-3">
                            <div class="col-md-6 mb-3 mb-lg-0">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required="">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject">
                        </div>
                        <div class="mb-3">
                            <label for="phone_num" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" id="phone_num" name="phone_num">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required=""></textarea>
                        </div>
                        <div class="d-flex align-items-center justify-content-center gap-3">
                            <button type="submit" class="btn btn-primary d-flex align-items-center" id="submit-btn">Send
                                Message
                                <div id="form-spinner" class="spinner-border spinner-border-sm ms-2 text-light d-none"
                                    role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

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

    <script type="module"
        src="https://cdn.jsdelivr.net/gh/lekoala/formidable-elements@master/dist/count-up.min.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->


    <!-- 
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/plugins.min.js"></script> 
-->



    <!--Main JS-->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form.js"></script>
</body>

</html>

<?php COUCH::invoke(); ?>