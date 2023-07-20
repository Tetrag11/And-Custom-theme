<?php

get_header();

$news = get_the_permalink(59);
?>



<!--blog header starts -->
<div class="has-background-white">
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <section class="hero is-small">
        <div class="hero-body">
            <div class="container is-max-desktop has-text-centered">

                <!--blog type title start -->
                <a href="<?php echo $news; ?>">
                    <p class="subtitle is-6 is-faded">
                        News & updates /
                    </p>
                </a>
                <!--blog type title ends -->
                <br />

                <!--blog title start -->
                <p class="title is-2 is-size-3-touch is-spaced">
                    <?php the_title() ?>
                </p>
                <!--blog title start -->

                <!--blog publish date start -->
                <p class="subtitle is-6">
                    Published on <?php echo get_the_date('F j, Y'); ?>
                </p>
                <!--blog publish date start -->

            </div>
        </div>
    </section>
    <span class="is-hidden-touch"> <br /> </span>

</div>
<!--blog header ends -->


<!--blog cover image starts -->
<figure class="image has-image-centered">
    <img src="<?php the_field('cover_image'); ?>" />
</figure>
<!--blog cover image starts -->

<!--blog body section row starts -->
<div class="container is-max-desktop editor">
    <?php the_content(); ?>
    <!--section body ends -->
</div>
<!-- blog body section row ends -->


<!--go back to blog post list link starts -->
<div class="container is-max-desktop">
    <a href="<?php echo $news; ?>">
        <hr class="has-background-grey-lighter" />
        <p class="title has-text-black is-size-4">
            + Back to blog
        </p>
    </a>
</div>



<!--contact and apply now section starts-->
<?php include 'partials/actions.php'; ?>
<!--contact and apply now section ends-->











<?php

get_footer();

?>