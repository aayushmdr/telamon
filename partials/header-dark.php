    <div class="header header-transparent-bg section-fluid">

        <!-- Header Wrapper Start -->
        <div class="header-wrapper">
            <div class="header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">

                        <div class="col-lg-2 col-md-3 col-6">
                            <!-- Header Logo Start -->
                            <div class="header-logo">
                                <a href="./index.php">
                                    <img class="fit-image" src="./assets/img/logo/telamon-logo-white.webp"
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
                                            <a class="<?php echo ($active_page == 'home') ? 'active' : ''; ?>" href="./index.php">Home</a>
                                        </li>
                                        <li>
                                            <a class="<?php echo ($active_page == 'projects') ? 'active' : ''; ?>" href="./project.php">Gallery</a>
                                            <!-- <ul class="submenu">
                                                <li><a href="project.php">Project</a></li>
                                                <li><a href="project-details.html">Project Details</a></li>
                                            </ul> -->
                                        </li>
                                        <li>
                                            <a class="<?php echo ($active_page == 'about') ? 'active' : ''; ?>" href="./about.php">About Us</a>
                                        </li>
                                         <li>
                                            <a class="<?php echo ($active_page == 'videos') ? 'active' : ''; ?>" href="./videos.php">Videos</a>
                                        </li>
                                        <li>
                                            <a class="<?php echo ($active_page == 'contact') ? 'active' : ''; ?>" href="./contact.php">Contact Us</a>
                                        </li>
                                         <li>
                                            <a class="<?php echo ($active_page == 'blogs') ? 'active' : ''; ?>" href="./blogs.php">Blogs</a>
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
                        <img src="./assets/img/logo/telamon-logo-blue.png" alt="Logo" class="w-100 img-fluid">
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
                                <a href="./index.php">Home</a>
                            </li>
                            <li class="has-children">
                                <a href="./project.php">Our Works</a>
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
                            <li><a href="./about.php">About</a></li>
                            <li><a href="./videos.php">Videos</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                            <li><a href="./blogs.php">Blogs</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Mobile Menu End -->
            </div>
            <!-- Mobile Menu Inner End -->
        </div>
        <!-- Mobile Menu End -->

    </div>