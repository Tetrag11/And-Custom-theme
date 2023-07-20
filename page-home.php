<?php

/**
 * Template Name: Front Page
 */
get_header();
?>
<?php
// links

$aboutus = get_the_permalink(53);
$fashion = get_the_permalink(11);
$graphics = get_the_permalink(35);
$photograpghy = get_the_permalink(38);
$workshop = get_the_permalink(41);
$news = get_the_permalink(59);
$studentstories = get_the_permalink(62);
$design = get_the_permalink(66);


// acf
$coverimage = get_field('cover_image');

$wistiahomepagevideo_1 = get_field(('home_cover_video'))['wistia']['script_1'];
$wistiahomepagevideo_2 = get_field(('home_cover_video'))['wistia']['script_2'];
$wistiahomepagevideo_3 = get_field(('home_cover_video'))['wistia']['script_3'];

$fashionthumbnail = get_field('school_thumbnails')['school_of_fashion'];
$graphicthumbnail = get_field('school_thumbnails')['school_of_graphics_and_animation'];
$photograpghythumbnail = get_field('school_thumbnails')['school_of_creative_photography'];
$workshopthumbnail =  get_field('school_thumbnails')['workshops'];



$video_format = get_field(('home_cover_video'))['select_video_format'];


?>


<!--cover starts-->
<br><br><br><br>
<section class="hero is-black home-cover is-medium" style="background-image:url('<?php echo $coverimage ?>')">

    <div class="hero-body">
        <div class="container has-text-centered">
            <p class="title is-1 is-size-3-mobile">
                <?php the_field('section_1_heading') ?>
            </p>
        </div>
    </div>

    <div class="hero-foot">
        <div class="container has-text-centered">
            <p class="subtitle is-6">
                <?php the_field('section_1_quote') ?>
            </p>
        </div>
    </div>

</section>


<!--cover ends-->

<!-- intro starts -->
<div class="container is-max-desktop">
    <br />
    <br />
    <div class="columns">
        <div class="column">
            <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">
                <?php the_field('section_1_paragraph') ?>
            </p>
            <br />

            <p class="subtitle is-6 is-size-6-touch has-text-centered">
                <a href="<?php echo $aboutus ?>" class="has-text-red">
                    <span class="has-text-red"> <?php the_field('section_1_link_text') ?> </span>
                </a>
            </p>
            <br />
        </div>
    </div>

    <!--intro ends -->
</div>



<!--home cover video starts-->
<?php
if ($video_format == "wistia") { ?>
    <!-- homepage video embed code starts -->
    <script src="<?php echo $wistiahomepagevideo_1 ?>" async></script>
    <script src="<?php echo $wistiahomepagevideo_2 ?>" async></script>
    <div class="wistia_responsive_padding" style="padding:45.0% 0 0 0;position:relative;">
        <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
            <div class="wistia_embed wistia_async_zvsnud5uvd videoFoam=true" style="height:100%;position:relative;width:100%">
                <div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="<?php echo $wistiahomepagevideo_3 ?>" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div>
            </div>
        </div>
    </div>
    <!--homepage video embed code ends -->
<?php } elseif ($video_format == 'youtube') { ?>
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/2-jvlhc7c58" title="Race Highlights | 2023 Miami Grand Prix" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<?php }
?>


<!--home cover video ends-->

<br />
<br />

<p class="has-text-centered"><?php the_field('section_1_small_text') ?></p>

<br />
<br />

<div class="container is-max-desktop">
    <!--course start-->
    <div class="columns is-desktop is-multiline is-gapless">
        <div class="column is-half is-full-touch is-hidden-desktop">
            <figure class="image is-square has-image-centered">
                <img src="<?php echo $fashionthumbnail ?>" />
            </figure>
        </div>
        <div class="column is-half is-full-touch is- has-text-item-centered">
            <br />
            <div class="container container-text">
                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered"><?php the_field('course_heading_1') ?></p>
                <br />
                <p class="subtitle is-6 is-size-6-touch has-text-centered">
                    <?php the_field('course_description_1') ?>
                </p>
                <br />

                <p class="subtitle is-6 is-size-6-touch has-text-red has-text-centered">
                    <a href="<?php echo $fashion ?>">
                        <span class="has-text-red"> <?php the_field('course_link_text_1') ?> </span>
                    </a>
                </p>

                <span class="is-hidden-desktop">
                    <br />
                    <br />
                </span>
            </div>
        </div>

        <div class="column is-half is-full-touch is-hidden-touch">
            <figure class="image is-square has-image-centered">
                <img src="<?php echo $fashionthumbnail ?>" />
            </figure>
        </div>

        <div class="column is-half is-full-touch">
            <figure class="image is-square has-image-centered">
                <img src="<?php echo $graphicthumbnail ?>" />
            </figure>
        </div>
        <div class="column is-half is-full-touch has-text-item-centered">
            <div class="container container-text">
                <br />
                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered"><?php the_field('course_heading_1') ?></p>
                <br />
                <p class="subtitle is-6 is-size-6-touch has-text-centered">
                    <?php the_field('course_description_2') ?>
                </p>
                <br />

                <p class="subtitle is-6 is-size-6-touch has-text-red has-text-centered">
                    <a href="<?php echo $graphics ?>">
                        <span class="has-text-red"> <?php the_field('course_link_text_2') ?> </span>
                    </a>
                </p>
                <span class="is-hidden-desktop">
                    <br />
                    <br />
                </span>
            </div>
        </div>

        <div class="column is-half is-full-touch is-hidden-desktop">
            <figure class="image is-square has-image-centered">
                <img src="<?php echo $photograpghythumbnail ?>" />
            </figure>
        </div>
        <div class="column is-half is-full-touch has-text-item-centered">
            <br />
            <div class="container container-text">
                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered"><?php the_field('course_heading_3') ?></p>
                <br />
                <p class="subtitle is-6 is-size-6-touch has-text-centered">
                    <?php the_field('course_description_3') ?>
                </p>
                <br />

                <p class="subtitle is-6 is-size-6-touch has-text-red has-text-centered">
                    <a href="<?php echo $photograpghy ?>">
                        <span class="has-text-red"> <?php the_field('course_link_text_3') ?> </span>
                    </a>
                </p>

                <span class="is-hidden-desktop">
                    <br />
                    <br />
                </span>
            </div>
        </div>


        <div class="column is-half is-full-touch is-hidden-touch">
            <figure class="image is-square has-image-centered">
                <img src="<?php echo $photograpghythumbnail ?>" />
            </figure>
        </div>

        <div class="column is-half is-full-touch is-hidden-desktop">
            <figure class="image is-square has-image-centered">
                <img src="<?php echo $workshopthumbnail ?>" />
            </figure>
        </div>

        <div class="column is-half is-full-touch is-hidden-touch">
            <figure class="image is-square has-image-centered">
                <img src="<?php echo $workshopthumbnail ?>" />
            </figure>
        </div>
        <div class="column is-half is-full-touch has-text-item-centered">
            <br />
            <div class="container container-text">
                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">
                    <?php the_field('course_heading_4') ?>
                </p>
                <br />
                <p class="subtitle is-6 is-size-6-touch has-text-centered">
                    <?php the_field('course_description_4') ?>
                </p>
                <br />

                <p class="subtitle is-6 is-size-6-touch has-text-red has-text-centered">
                    <a href="<?php echo $workshop ?>">
                        <span class="has-text-red"> <?php the_field('course_link_text_4') ?> </span>
                    </a>
                </p>
                <span class="is-hidden-desktop">
                    <br />
                    <br />
                </span>
            </div>
        </div>
    </div>

    <!--course end-->

    <hr class="has-background-grey-lighter is-hidden-desktop" />

    <br />
    <br />
    <br />

    <p class="has-text-centered"><?php the_field('small_text') ?></p>

    <br />
    <br />

    <div class="container is-max-desktop has-text-centered">
        <hr class="has-background-grey-lighter" />
        <!--News and updates latest post starts-->
        <!-- Latest News Update -->
        <?php
        $args = array(
            'post_type' => 'newsupdate',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $latest_newsupdate = new WP_Query($args);
        while ($latest_newsupdate->have_posts()) : $latest_newsupdate->the_post();
        ?>
            <a href="<?php the_permalink() ?>">
                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile">
                    <?php the_title() ?>
                </p>
            </a>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>

        <!--News and updates latest post ends-->
        <br />
        <p class="subtitle is-6 is-size-6-touch has-text-red">
            <a href="<?php echo $news ?>">
                <span class="has-text-red"> <?php the_field('university_updates_link_text') ?> </span>
            </a>
        </p>

        <hr class="has-background-grey-lighter" />

        <!--Student Stories latest post starts-->
        <!-- Latest Student Story -->
        <?php
        $args = array(
            'post_type' => 'studentstory',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $latest_studentstory = new WP_Query($args);
        while ($latest_studentstory->have_posts()) : $latest_studentstory->the_post();
        ?>
            <a href="<?php the_permalink() ?>">
                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile">
                    <?php the_title() ?>
                </p>
            </a>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
        <!--Student Stories latest post ends-->
        <br />

        <p class="subtitle is-6 is-size-6-touch">
            <a href="<?php echo $studentstories ?>">
                <span class="has-text-red"> <?php the_field('student_stories_link_text') ?> </span>
            </a>
        </p>

        <hr class="has-background-grey-lighter" />

        <!--Design Catalogue latest post starts-->
        <!-- Latest Design Catalogue -->
        <?php
        $args = array(
            'post_type' => 'designcatalogue',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $latest_designcatalogue = new WP_Query($args);
        while ($latest_designcatalogue->have_posts()) : $latest_designcatalogue->the_post();
        ?>
            <a href="<?php the_permalink() ?>">
                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile">
                    <?php the_title() ?>
                </p>
            </a>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
        <!--Design Catalogue latest post ends-->
        <br />

        <p class="subtitle is-6 is-size-6-touch">
            <a href="<?php echo $design ?>">
                <span class="has-text-red"> <?php the_field('design_catalogue_link_text') ?> </span>
            </a>
        </p>
    </div>

    <!--design catalogue list starts-->

    <!--design catalogue list ends-->
</div>

<br>

<?php get_template_part('partials/actions-apply-now'); ?>



<?php
get_footer();
?>