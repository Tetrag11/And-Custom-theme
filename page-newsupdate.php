<?php

/**
 * Template Name: news-and-updates
 */
get_header();
$readmore = get_field('read');

?>
<br />
<br />
<br />
<br />
<br />
<br />
<!-- page title starts -->
<section class="hero is-small">
    <div class="hero-body">
        <div class="container is-max-desktop has-text-centered">
            <p class="subtitle is-6 is-faded">
                <?php the_field('header_text') ?>
            </p>
            <p class="title is-2 is-size-3-touch">
                <span class="has-text-red"> <?php the_field('heading') ?> </span>
            </p>
        </div>
    </div>
</section>
<!-- page title ends -->

<!-- intro starts -->
<div class="container is-max-desktop">
    <div class="columns">
        <div class="column">
            <p class="subtitle is-6 has-text-centered">
                <?php the_field('description') ?>
        </div>
    </div>
</div>
<!--intro ends -->

<div class="container is-max-desktop">
    <hr class="has-background-grey-lighter" />

    <?php
    $args = array(
        'post_type' => 'newsupdate',
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $latest_designcatalogue = new WP_Query($args);
    while ($latest_designcatalogue->have_posts()) : $latest_designcatalogue->the_post();
    ?>
        <!-- blog post row starts -->
        <div class="columns is-desktop is-multiline is-variable is-7">
            <div class="column is-two-fifths is-full-touch has-background">
                <!--blog post thumbnail starts -->
                <figure class="image has-image-centered">
                    <img src="<?php the_field('blog_image') ?>" />
                </figure>
                <!-- blogpost thumbnail ends -->
            </div>
            <div class="column has-text-item-centered">
                <p class="subtitle is-6">
                    <!-- blog post publish date starts -->
                    <?php the_date() ?>
                    <!-- blog post publish date ends -->
                </p>

                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile">
                    <!-- blog post title starts -->
                    <?php the_title() ?>
                    <!-- blog post title ends -->
                </p>

                <!-- blog post link starts -->
                <a href="<?php
                            $content = get_the_content();
                            if ($content !== "") {
                                the_permalink();
                            } else {
                                echo '#';
                            }

                            ?>">
                    <p class="subtitle is-6 is-size-6-touch has-text-red has-text-underlined">
                        <?php echo $readmore ?>
                    </p>
                </a>
                <!-- blog post link ends -->
            </div>
        </div>
        <!-- blog post row ends -->

    <?php
    endwhile;
    wp_reset_postdata();
    ?>

    <hr class="has-background-grey-lighter" />
    <p class="title has-text-black is-size-4">
        <?php the_field('more') ?>
    </p>

</div>
<!--contact and apply now section starts-->
<?php include 'partials/actions.php'; ?>
<!--contact and apply now section ends-->

<?php

get_footer();
?>