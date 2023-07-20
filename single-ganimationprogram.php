<?php

get_header();

?>

<div class="has-background-black">
    <br><br><br><br> <br><span class="is-hidden-touch"> <br><br> </span>
    <section class="hero is-small">

        <div class="hero-body">
            <div class="container is-max-desktop has-text-centered">
                <a href="school-of-fashion.php">
                    <p class="subtitle is-6 has-text-light is-faded">
                        School of Graphics & Animation /
                    </p>
                </a>
                <br>
                <p class="title is-2 is-size-3-touch has-text-white">
                    <?php the_title() ?>
                </p>
            </div>
        </div>
    </section>
    <span class="is-hidden-touch"> <br> </span>

    <!--course overview starts-->
    <div class="container">
        <div class="columns">
            <div class="column">
                <p class="subtitle is-6 is-size-6-mobile has-text-white has-text-right has-text-centered-mobile">
                    <i class="uil uil-university has-text-red"></i>&nbsp;&nbsp; <?php the_field('certification') ?>
                </p>
            </div>
            <div class="column">
                <p class="subtitle is-6 is-size-6-mobile has-text-white has-text-centered has-text-centered-mobile">
                    <i class="uil uil-triangle has-text-red"></i>&nbsp;&nbsp; <?php the_field('course_no') ?>
                </p>
            </div>
            <div class="column">
                <p class="subtitle is-6 is-size-6-mobile has-text-white has-text-left has-text-centered-mobile">
                    <i class="uil uil-analysis has-text-red"></i>&nbsp;&nbsp; <?php the_field('duration') ?>
                </p>
            </div>

        </div>


    </div>
</div>

<figure class="image   has-image-centered">
    <img src="<?php the_field('blog_image') ?>">
</figure>


<!--course section starts -->
<div class="container  is-max-desktop editor">
    <?php the_content() ?>
</div>
<!--course section ends -->


<!--contact and apply now section starts-->
<?php include 'partials/actions-apply-now.php'; ?>
<!--contact and apply now section ends-->








<?php

get_footer();

?>