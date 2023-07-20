<?php

/**
 * Template Name: about-us
 */
get_header();


?>
<br><br><br><br>
<section class="hero is-black about-us-cover is-medium" style="background-image: url('<?php the_field('cover_image') ?>');">

    <div class="hero-body">
        <div class="container has-text-centered">
            <p class="title is-1 is-size-3-mobile">
                <?php the_field('heading') ?>
            </p>
        </div>
    </div>

    <div class="hero-foot">
        <div class="container has-text-centered">
            <p class="subtitle is-6">
                <?php the_field('small_text') ?>
            </p>
        </div>
    </div>

</section>


<!-- intro starts -->
<div class="container is-max-desktop">
    <br />
    <br />
    <div class="columns">
        <div class="column">
            <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">
                <?php the_field('description') ?>
            </p>
        </div>
    </div>
</div>
<!--intro ends -->


<!--about segments start -->

<div class="container is-max-desktop">
    <p class="has-text-centered"><?php the_field('small_text_2') ?></p>

    <br />
    <br />
    <br />

    <div class="columns is-desktop is-multiline is-gapless">
        <!-- feature section starts-->
        <div class="column is-half is-full-touch is-hidden-desktop">
            <figure class="image is-square has-image-centered">
                <img src="<?php the_field('section_image_1') ?>" />
            </figure>
        </div>
        <div class="column is-half is-full-touch is- has-text-item-centered">
            <div class="container container-text">
                <br />
                <span class="is-hidden-touch">
                    <br />
                    <br />
                </span>
                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">
                    <?php the_field('section_heading_1') ?>
                </p>
                <br />
                <p class="subtitle is-6 is-size-6-touch has-text-centered">
                    <?php the_field('section_description_1') ?>
                </p>

                <span class="is-hidden-desktop">
                    <br />
                    <br />
                </span>
            </div>
        </div>
        <!-- feature section ends-->

        <!-- feature section starts-->
        <div class="column is-half is-full-touch is-hidden-touch">
            <figure class="image is-square has-image-centered">
                <img src="<?php the_field('section_image_1') ?>" />
            </figure>
        </div>

        <div class="column is-half is-full-touch">
            <figure class="image is-square has-image-centered">
                <img src="<?php the_field('section_image_2') ?>" />
            </figure>
        </div>
        <div class="column is-half is-full-touch has-text-item-centered">
            <div class="container container-text">
                <br />
                <span class="is-hidden-touch">
                    <br />
                    <br />
                </span>
                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">
                    <?php the_field('section_heading_2') ?>
                </p>
                <br />
                <p class="subtitle is-6 is-size-6-touch has-text-centered">
                    <?php the_field('section_description_2') ?>
                </p>
            </div>
            <!-- feature section ends-->
        </div>
    </div>
    <br />
    <br />

    <p class="has-text-centered"><?php the_field('small_text_3') ?></p>

    <br />
    <br />
</div>

<!--partnerships section starts-->
<div class="has-background-white">
    <!-- intro starts -->
    <div class="container is-max-desktop">
        <br />
        <br />
        <br />
        <div class="columns">
            <div class="column">
                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">
                    <?php the_field('university_heading') ?>
                </p>
            </div>
        </div>
        <br />
        <br />
    </div>
    <!--intro ends -->

    <div class="container">
        <div class="columns is-multiline">

            <!-- partner row start -->
            <?php if (have_rows('universities')) : ?>
                <?php while (have_rows('universities')) : the_row(); ?>
                    <div class="column is-one-third is-centered">
                        <!-- partner logo starts -->
                        <figure class="image is-128x128 has-image-centered">
                            <img src="<?php echo esc_attr(get_sub_field('image')); ?>" />
                        </figure>
                        <!--partner logo ends -->

                        <p class="subtitle is-6 is-size-6-touch has-text-centered">
                            <!--partner name starts -->
                            <?php echo esc_attr(get_sub_field('name')); ?>
                            <!--partner name ends -->
                        </p>

                        <!--partner website link starts -->
                        <p class="subtitle is-6 is-size-6-touch has-text-red has-text-centered">
                            <a href="<?php echo esc_attr(get_sub_field('link')); ?>" target="blank">
                                <span class="has-text-red"> Visit website</span>
                            </a>
                        </p>
                        <!--partner website link starts -->

                        <br />
                        <br />
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <!-- partner row ends -->

        </div>
    </div>
</div>

<!--partnerships section ends-->

<!--here at AND segments start -->
<div class="container is-max-desktop">
    <br />
    <br />
    <br />

    <p class="has-text-centered"><?php the_field('small_text_4') ?></p>

    <br />
    <br />
    <br />
    <br />

    <div class="columns is-desktop is-multiline is-gapless">
        <!-- feature section starts-->
        <div class="column is-half is-full-touch">
            <figure class="image is-square has-image-centered">
                <img src="<?php the_field('section_image_3') ?>" />
            </figure>
        </div>
        <div class="column is-half is-full-touch has-text-item-centered">
            <div class="container container-text">
                <br />
                <span class="is-hidden-touch">
                    <br />
                    <br />
                </span>
                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">
                    <?php the_field('section_heading_3') ?>
                </p>
                <br />
                <p class="subtitle is-6 is-size-6-touch has-text-centered">
                    <?php the_field('section_description_3') ?>
                </p>
                <br />

                <span class="is-hidden-desktop">
                    <br />
                    <br />
                </span>
            </div>
        </div>
        <!-- feature section ends-->

        <!-- feature section starts-->
        <div class="column is-half is-full-touch is-hidden-desktop">
            <figure class="image is-square has-image-centered">
                <img src="<?php the_field('section_image_4') ?>" />
            </figure>
        </div>
        <div class="column is-half is-full-touch has-text-item-centered">
            <div class="container container-text">
                <br />
                <span class="is-hidden-touch">
                    <br />
                    <br />
                </span>
                <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">
                    <?php the_field('section_heading_4') ?>
                </p>
                <br />
                <p class="subtitle is-6 is-size-6-touch has-text-centered">
                    <?php the_field('section_description_4') ?>
                </p>
            </div>
        </div>

        <div class="column is-half is-full-touch is-hidden-touch">
            <figure class="image is-square has-image-centered">
                <img src="<?php the_field('section_image_4') ?>" />
            </figure>
        </div>
        <!-- feature section ends-->
    </div>
</div>



<!--contact and apply now section starts-->
<?php include 'partials/actions.php'; ?>
<!--contact and apply now section ends-->




<?php

get_footer();
?>