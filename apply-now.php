<?php

/**
 * Template Name: Apply now
 */
get_header();


?>

<br />
<br />
<br />
<br />
<br />
<br />
<section class="hero is-small">
    <div class="hero-body">
        <div class="container is-max-desktop has-text-centered">
            <p class="subtitle is-6 is-faded">
                <?php the_field('small_text') ?>
            </p>
            <p class="title is-2 is-size-3-touch">
                <span class="has-text-red"> <?php the_field('form_heading', 'options') ?> </span>
            </p>
        </div>
    </div>
</section>

<!-- intro starts -->
<div class="container is-max-desktop">
    <div class="columns">
        <div class="column">
            <p class="subtitle is-6 has-text-centered">
                <?php the_field('form_subheading', 'options') ?>
            </p>
        </div>
    </div>
</div>
<!--intro ends -->

<!--apply now form starts-->
<div class="container is-max-desktop has-text-centered">

    <!-- apply now form embed code start -->
    <script charset="utf-8" type="text/javascript" src="<?php the_field('form_url', 'options') ?>"></script>
    <script>
        hbspt.forms.create({
            region: "na1",
            portalId: "39620010",
            formId: "5a5cb464-7641-47f1-ae79-24334eb7afa4",
        });
    </script>
    <!-- apply now form embed code ends -->
</div>
<!--apply now form ends-->

<div class="has-background-light">
    <div class="container is-max-desktop" id="contact-us">
        <br />
        <p class="title has-text-centered has-text-red is-size-1">
            *****
        </p>

        <p class="title is-3 is-size-4-touch has-text-centered">
            <span class="has-text-red"> <?php the_field('form_heading_2', 'options') ?> </span>
        </p>
        <br />
        <p class="subtitle is-6 is-size-6-touch has-text-centered">
            <?php the_field('form_subheading_2', 'options') ?>
        </p>
        <br />

        <!--contact us list starts-->

        <!--contact list row start -->
        <?php if (have_rows('contact_info')) : ?>
            <?php while (have_rows('contact_info')) : the_row(); ?>
                <meta property="<?php echo esc_attr(get_sub_field('property')); ?>" content="<?php echo esc_attr(get_sub_field('content')); ?>">
                <hr class="has-background-grey-lighter" />

                <div class="columns">
                    <div class="column">
                        <!--contact name starts -->
                        <p class="title is-size-4-desktop is-size-5-tablet is-size-5-mobile">
                            <?php echo esc_attr(get_sub_field('name')); ?>
                        </p>
                        <!--contact name ends -->
                    </div>
                    <div class="column has-text-centered has-text-left-mobile">
                        <!--contact email starts -->
                        <a href="mailto: <?php echo esc_attr(get_sub_field('email')) ?>" class="subtitle is-6 has-text-centered has-text-left-mobile">
                            <?php echo esc_attr(get_sub_field('email')); ?>
                        </a>
                        <!--contact email ends -->
                    </div>
                    <div class="column has-text-right has-text-left-mobile">
                        <!--contact mobile starts -->
                        <a href="tel: <?php echo esc_attr(get_sub_field('telephone')); ?>" class="subtitle is-6 has-text-right has-text-left-mobile">
                            <?php echo esc_attr(get_sub_field('telephone')); ?>
                        </a>
                        <!--contact mobile ends -->
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <!--contact list row ends -->
        <!--contact us list ends-->
    </div>
</div>






<?php

get_footer();
?>