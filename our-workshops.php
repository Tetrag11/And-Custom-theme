<?php

/**
 * Template Name: Our-workshops
 */
get_header();


$applynow = get_the_permalink(32);
?>

<br><br><br><br><br>
<section class="hero is-black school-of-fashion-design-cover is-medium" style="background-image: url('<?php the_field('cover_image') ?>');">

    <div class="hero-body">
        <div class="container has-text-centered">
            <p class="title is-1 is-size-3-mobile">
                <?php the_field('header_text') ?>
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

<div class="container">

    <?php
    $page_id = get_queried_object_id();
    $program_types = get_field('program_types', $page_id);

    if ($program_types) {
        foreach ($program_types as $program_type) {
            $program_name = $program_type['program_name'];
            $program_type = $program_type['program_type'];

            // echo '<p>' . $program_name . '</p>';
    ?>
            <!--course group header start -->
            <p class="title  is-size-4-desktop is-size-5-tablet is-size-5-mobile ">
                <?php echo $program_name ?>
            </p>
            <hr class="has-background-grey-lighter has-text-left-mobile">
            <!--course group header ends -->


            <?php

            foreach ($program_type as $type) {

                $id = $type->ID;
                $link = get_permalink($id);
                // echo "<a href='$link'>" . $type->post_name . "</a>";
            ?>

                <!--group course row start -->
                <a href="<?php
                            if ($type->post_content !== '') {
                                echo $link;
                            } else {
                                echo $applynow;
                            }

                            ?>" class="subtitle is-6 link-fullwidth">
                    <span class="has-text-red"><?php echo $type->post_title ?></span>
                </a>
                <hr class="has-background-grey-lighter has-text-left-mobile">
                <!--group course row ends -->
    <?php
            }
        }
    }
    ?>


</div>

<!--contact and apply now section starts-->
<?php include 'partials/actions.php'; ?>
<!--contact and apply now section ends-->


<?php
get_footer();
?>