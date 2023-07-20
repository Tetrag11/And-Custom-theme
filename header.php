<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php the_title() ?></title>




    <?php if (have_rows('meta_tags_property', 'options')) : ?>
        <?php while (have_rows('meta_tags_property', 'options')) : the_row(); ?>
            <meta property="<?php echo esc_attr(get_sub_field('property')); ?>" content="<?php echo esc_attr(get_sub_field('content')); ?>">
        <?php endwhile; ?>
        <meta property="og:title" content="<?php echo  get_the_title() . " - AND - Academy of Art & Design"; ?>">
    <?php endif; ?>

    <!-- meta divide -->

    <?php if (have_rows('meta_tag_name', 'options')) : ?>
        <?php while (have_rows('meta_tag_name', 'options')) : the_row(); ?>
            <meta name="<?php echo esc_attr(get_sub_field('name')); ?>" content="<?php echo esc_attr(get_sub_field('content')); ?>">
        <?php endwhile; ?>
        <meta name="twitter:title" content="<?php echo  get_the_title() . " - AND - Academy of Art & Design"; ?>">
    <?php endif; ?>

    <?php wp_head(); ?>


    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "UA-204442258-1");
    </script>


</head>

<body class="has-background-light">
    <?php

    $homepage = get_the_permalink(8);

    $applynow = get_the_permalink(32);

    $fashion = get_the_permalink(11);

    $graphics = get_the_permalink(35);

    $photograpghy = get_the_permalink(38);

    $workshop = get_the_permalink(41);

    $admission = get_the_permalink(44);

    $payment = get_the_permalink(47);

    $termsandconditions = get_the_permalink(50);

    $aboutus = get_the_permalink(53);

    $ourfaculty = get_the_permalink(56);

    $news = get_the_permalink(59);

    $studentstories = get_the_permalink(182);

    $design = get_the_permalink(66);

    $contact = get_the_permalink(32) . "#contact-us";

    $whatsapp = get_field("social_media_links", "options")["whatsapp_link"]; //https://wa.me/message/7M46CARTRNEJI1

    $header_logo = get_field("header_logo", "options");


    ?>

    <!--Overlay navbar element starts-->

    <div id="myNav" class="overlay">
        <a href="index.php" class="no-link-animation">
            <div class="container-nav has-background-black">
                <div class="image-nav">
                    <figure class="image is-32x32 has-text-item-centered has-image-right">
                        <img src="<?php echo $header_logo; ?>" />
                    </figure>
                </div>
                <div class="text-nav">
                    <p class="title is-4 is-size-5-mobile has-text-white has-text-left">Academy <em> of </em> Art & Design</p>
                </div>
            </div>
        </a>
        <div class="has-background-white">
            <div class="container is-max-desktop has-text-centered">
                <div class="columns is-mobile">
                    <div class="column navbar-item has-dropdown is-hoverable has-text-left-touch">
                        <a onclick="closeNav()">
                            <p class="subtitle is-6 is-size-6-touch has-text-dark"><i class="uil uil-times"></i>&nbsp; Close Menu</p>
                        </a>
                    </div>
                    <div class="column navbar-item has-dropdown is-hoverable has-text-right-touch">
                        <a href="<?php echo $applynow ?>" class="subtitle is-6 is-size-6-touch has-text-red">
                            <span class="has-text-red">
                                Apply Now
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="container">
                <aside class="menu">
                    <ul class="menu-list">
                        <li><a href="<?php echo $homepage ?>" class="nav-row">Home</a></li>
                    </ul>
                    <p class="menu-label">
                        Our Courses
                    </p>
                    <ul class="menu-list">
                        <li><a href="<?php echo $fashion ?>" class="nav-row">School of Fashion</a></li>
                        <li><a href="<?php echo $graphics ?>" class="nav-row">School of Graphics & Animation </a></li>
                        <li><a href="<?php echo $photograpghy ?>" class="nav-row">School of Creative Photography</a></li>
                    </ul>
                    <ul class="menu-list">
                        <li><a href="<?php echo $workshop ?>" class="nav-row">Our Workshops</a></li>
                    </ul>
                    <p class="menu-label">
                        Admission
                    </p>
                    <ul class="menu-list">
                        <li><a href="<?php echo $admission ?>" class="nav-row">Admission Process</a></li>
                        <li><a href="<?php echo $payment ?>" class="nav-row">Payment Methods & Financing Options</a></li>
                        <li><a href="<?php echo $termsandconditions ?>" class="nav-row">Terms & Conditions</a></li>
                    </ul>
                    <p class="menu-label">
                        Our university
                    </p>
                    <ul class="menu-list">
                        <li><a href="<?php echo $aboutus ?>" class="nav-row">About Us</a></li>
                        <li><a href="<?php echo $ourfaculty ?>" class="nav-row">Our Faculty</a></li>
                        <li><a href="<?php echo $news ?>" class="nav-row">News & Updates</a></li>
                    </ul>
                    <p class="menu-label">
                        Our students
                    </p>
                    <ul class="menu-list">
                        <li><a href="<?php echo $studentstories ?>" class="nav-row">Student Stories</a></li>
                        <li><a href="<?php echo $design ?>" class="nav-row">Design Catalogue </a></li>
                    </ul>
                    <p class="menu-label">
                        Get in touch
                    </p>
                    <ul class="menu-list">
                        <li><a href="<?php echo $contact ?>" class="nav-row">Contact Us</a></li>
                        <!--whatsapp chat link starts -->
                        <li><a href="<?php echo $whatsapp ?>" target="_blank" class="nav-row"> Chat on Whatsapp</a></li>
                        <!--whatsapp chat link ends -->
                        <li>
                            <a href="<?php echo $applynow ?>" class="nav-row"><span class="has-text-red"> Apply Online </span></a>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
    <!--Overlay navbar element ends-->

    <!--header starts-->
    <div id="header-nav" class="has-background-black">
        <a href="<?php echo $homepage ?>" class="no-link-animation">
            <div class="container-nav">
                <div class="image-nav">
                    <figure class="image is-32x32 has-text-item-centered has-image-right">
                        <img src="<?php echo $header_logo; ?>" />
                    </figure>
                </div>
                <div class="text-nav">
                    <p class="title is-4 is-size-5-mobile has-text-white has-text-left">Academy <em> of </em> Art & Design</p>
                </div>
            </div>
        </a>

        <div class="has-background-white">
            <div class="container is-max-desktop has-text-centered">
                <div class="columns is-mobile">
                    <div class="column navbar-item has-dropdown is-hoverable is-hidden-touch">
                        <a href="<?php echo $homepage ?>" class="subtitle is-6 has-text-dark">
                            Home
                        </a>
                    </div>
                    <div class="column is-hidden-touch navbar-item has-dropdown is-hoverable">
                        <a class="subtitle is-6 is-size-6-touch has-text-dark">
                            Our Courses
                        </a>

                        <div class="navbar-dropdown dropdown-menu">
                            <section class="container hero is-small is-white">
                                <div class="hero-body">
                                    <br />
                                    <br />
                                    <br />
                                    <div class="columns is-variable is-7">
                                        <div class="column has-border-right">
                                            <a href="<?php echo $fashion ?>" class="container-action">
                                                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">School <em> of </em> Fashion Design</p>
                                                <br />

                                                <a href="<?php echo $fashion ?>" class="subtitle is-6 is-size-6-touch has-text-red has-text-centered">
                                                    <span class="has-text-red">Explore Courses</span>
                                                </a>
                                            </a>
                                        </div>
                                        <div class="column">
                                            <a href="<?php echo $graphics ?>" class="container-action">
                                                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">School <em> of </em> Graphics & Animation</p>
                                                <br />
                                                <a href="<?php echo $graphics ?>" class="subtitle is-6 is-size-6-touch has-text-red has-text-centered">
                                                    <span class="has-text-red">Explore Courses</span>
                                                </a>
                                            </a>
                                        </div>
                                        <div class="column">
                                            <a href="<?php echo $photograpghy ?>" class="container-action">
                                                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">School <em> of </em> Creative Photography</p>
                                                <br />
                                                <a href="<?php echo $photograpghy ?>" class="subtitle is-6 is-size-6-touch has-text-centered">
                                                    <span class="has-text-red"> Explore Courses </span>
                                                </a>
                                            </a>
                                        </div>
                                    </div>
                                    <br />
                                    <br />
                                    <br />
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="column navbar-item has-dropdown is-hoverable is-hidden-touch">
                        <a href="<?php echo $workshop ?>" class="subtitle is-6 has-text-dark">
                            Workshops
                        </a>
                    </div>
                    <div class="column is-hidden-touch navbar-item has-dropdown is-hoverable">
                        <a class="subtitle is-6 is-size-6-touch has-text-dark">
                            Admission
                        </a>

                        <div class="navbar-dropdown dropdown-menu">
                            <section class="hero container is-small is-white">
                                <div class="hero-body">
                                    <br />
                                    <br />
                                    <br />
                                    <div class="columns is-variable is-7">
                                        <div class="column">
                                            <a href="<?php echo $admission ?>" class="container-action">
                                                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">
                                                    Admission Process
                                                </p>
                                            </a>
                                            <br />

                                            <a href="<?php echo $admission ?>" class="subtitle is-6 is-size-6-touch has-text-red has-text-centered">
                                                <span class="has-text-red">View Details</span>
                                            </a>
                                        </div>
                                        <div class="column">
                                            <a href="<?php echo $payment ?>" class="container-action">
                                                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">
                                                    Payment Methods & Financing Options
                                                </p>
                                                <br />
                                                <a href="<?php echo $payment ?>" class="subtitle is-6 is-size-6-touch has-text-red has-text-centered">
                                                    <span class="has-text-red">Read More</span>
                                                </a>
                                            </a>
                                        </div>
                                        <div class="column">
                                            <a href="<?php echo $termsandconditions ?>" class="container-action">
                                                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">
                                                    Terms & Conditions
                                                </p>
                                                <br />
                                                <a href="<?php echo $termsandconditions ?>" class="subtitle is-6 is-size-6-touch has-text-red has-text-centered">
                                                    <span class="has-text-red">Read More</span>
                                                </a>
                                            </a>
                                        </div>
                                    </div>
                                    <br />
                                    <br />
                                    <br />
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="column is-hidden-touch navbar-item has-dropdown is-hoverable">
                        <a class="subtitle is-6 is-size-6-touch has-text-dark">
                            Our University
                        </a>

                        <div class="navbar-dropdown dropdown-menu">
                            <section class="hero container is-small is-white">
                                <div class="hero-body">
                                    <br />
                                    <br />
                                    <br />
                                    <div class="columns is-variable is-7">
                                        <div class="column">
                                            <a href="<?php echo $aboutus ?>" class="container-action">
                                                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">
                                                    About Us
                                                </p>
                                            </a>
                                            <br />

                                            <a href="<?php echo $aboutus ?>" class="subtitle is-6 is-size-6-touch has-text-red has-text-centered">
                                                <span class="has-text-red">Read More</span>
                                            </a>
                                        </div>
                                        <div class="column">
                                            <a href="<?php echo $ourfaculty ?>" class="container-action">
                                                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">
                                                    Our Faculty
                                                </p>
                                                <br />
                                                <a href="<?php echo $ourfaculty ?>" class="subtitle is-6 is-size-6-touch has-text-red has-text-centered">
                                                    <span class="has-text-red">Explore Now</span>
                                                </a>
                                            </a>
                                        </div>
                                        <div class="column">
                                            <a href="<?php echo $news ?>" class="container-action">
                                                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">
                                                    News and Updates
                                                </p>
                                                <br />
                                                <a href="<?php echo $news ?>" class="subtitle is-6 is-size-6-touch has-text-red has-text-centered">
                                                    <span class="has-text-red">Read Our Blog</span>
                                                </a>
                                            </a>
                                        </div>
                                    </div>
                                    <br />
                                    <br />
                                    <br />
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="column is-hidden-touch navbar-item has-dropdown is-hoverable">
                        <a class="subtitle is-6 is-size-6-touch has-text-dark">
                            Our Students
                        </a>

                        <div class="navbar-dropdown dropdown-menu">
                            <section class="hero container is-small is-white">
                                <div class="hero-body">
                                    <br />
                                    <br />
                                    <br />
                                    <div class="columns is-variable is-7">
                                        <div class="column">
                                            <a href="<?php echo $studentstories ?>" class="container-action">
                                                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">
                                                    Student Stories
                                                </p>
                                                <br />

                                                <a href="<?php echo $studentstories ?>" class="subtitle is-6 is-size-6-touch has-text-red has-text-centered">
                                                    <span class="has-text-red">Read Student Blog</span>
                                                </a>
                                            </a>
                                        </div>
                                        <div class="column">
                                            <a href="<?php echo $design ?>" class="container-action">
                                                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">
                                                    Design Catalogue
                                                </p>
                                                <br />
                                                <a href="<?php echo $design ?>" class="subtitle is-6 is-size-6-touch has-text-red has-text-centered">
                                                    <span class="has-text-red">Read It Now</span>
                                                </a>
                                            </a>
                                        </div>
                                    </div>
                                    <br />
                                    <br />
                                    <br />
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="column navbar-item has-dropdown is-hoverable is-hidden-touch">
                        <a href="<?php echo $contact ?>" class="subtitle is-6 is-size-6-touch has-text-dark">
                            Contact us
                        </a>
                    </div>
                    <div class="column navbar-item has-dropdown is-hoverable is-hidden-desktop has-text-left-touch">
                        <a onclick="openNav()">
                            <p class="subtitle is-6 is-size-6-touch has-text-dark"><i class="uil uil-plus"></i>&nbsp; Open Menu</p>
                        </a>
                    </div>
                    <div class="column navbar-item has-dropdown is-hoverable has-text-right-touch">
                        <a href="<?php echo $applynow ?>">
                            <span class="has-text-red"> Apply Now </span>
                        </a>
                    </div>
                </div>

                <!--nav breakdown starts-->

                <!--nav breakdown ends-->
            </div>
            <!--header ends-->
        </div>
    </div>