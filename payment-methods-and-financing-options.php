<?php

/**
 * Template Name: payment-methods-and-financing-options
 */
get_header();


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
            <span>
                <p class="subtitle is-6 has-text-black is-faded">
                    <?php the_field('header_text') ?>
                </p>
            </span>
            <p class="title is-2 is-size-3-touch has-text-red">
                <?php the_field('heading') ?>
            </p>
        </div>
    </div>
</section>
<!-- page title ends -->

<!-- intro starts -->
<div class="container is-max-desktop ">
    <div class="columns">
        <div class="column">
            <p class="subtitle is-size-6">
                <?php the_field('description') ?>
            </p>
        </div>
    </div>
</div>
<!--intro ends -->


<div class="container is-max-desktop editor">
    <?php the_content() ?>
</div>



<!--contact and apply now section starts-->
<?php include 'partials/actions.php'; ?>
<!--contact and apply now section ends-->










<?php
get_footer();
