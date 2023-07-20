<?php

/**
 * Template Name: our-faculty
 */
get_header();


?>

<br><br><br><br><br>
<section class="hero is-black faculty-cover is-medium" style="background-image: url('<?php the_field('cover_image') ?>');">

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
    <br />
    <div class="columns">
        <div class="column">
            <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile"><?php the_field('sub_heading') ?></p>
        </div>
        <div class="column">
            <p class="subtitle is-6 is-size-6-touch has-text-black">
                <?php the_field('description') ?>
            </p>
        </div>
    </div>
    <br />
</div>
<!--intro ends -->

<div class="container">
    <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">
        <?php the_field('section_heading_1') ?>
    </p>
</div>

<!--faculty staff starts-->
<div class="container">
    <?php if (have_rows('staff_section_1')) : ?>
        <?php while (have_rows('staff_section_1')) : the_row(); ?>

            <!--faculty core staff row start -->
            <div class="columns">
                <div class="column">
                    <p class="title is-size-4-desktop is-size-5-tablet is-size-5-mobile">
                        <!-- staff name starts -->
                        <?php echo esc_attr(get_sub_field('name')); ?>
                        <!-- staff name ends -->
                    </p>
                </div>

                <div class="column">
                    <p class="subtitle is-6 has-text-right has-text-left-mobile">
                        <!--staff position starts -->
                        <?php echo esc_attr(get_sub_field('position')); ?>
                        <!-- staff position ends -->
                    </p>
                </div>
            </div>

            <hr class="has-background-grey-lighter has-text-left-mobile" />
            <!--faculty core staff row ends -->
        <?php endwhile; ?>
    <?php endif; ?>



</div>

<!--faculty staff ends-->

<div class="container">
    <p class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile has-text-centered">
        <?php the_field('section_heading_2') ?>
    </p>
</div>

<!--faculty exam starts-->
<div class="container">

    <?php if (have_rows('staff_section_2')) : ?>
        <?php while (have_rows('staff_section_2')) : the_row(); ?>

            <!--faculty exam staff row start -->
            <div class="columns">
                <div class="column">
                    <p class="title is-size-4-desktop is-size-5-tablet is-size-5-mobile">
                        <!-- staff name starts -->
                        <?php echo esc_attr(get_sub_field('name')); ?>
                        <!-- staff name ends -->
                    </p>
                </div>

                <div class="column">
                    <p class="subtitle is-6 has-text-right has-text-left-mobile">
                        <!--staff position starts -->
                        <?php echo esc_attr(get_sub_field('country')); ?>
                        <!-- staff position ends -->
                    </p>
                </div>
            </div>

            <hr class="has-background-grey-lighter has-text-left-mobile" />
            <!--faculty exam staff row ends -->
        <?php endwhile; ?>
    <?php endif; ?>



</div>

<!--faculty exam ends -->

<!--contact and apply now section starts-->
<?php include 'partials/actions.php'; ?>
<!--contact and apply now section ends-->







<?php

get_footer();
?>