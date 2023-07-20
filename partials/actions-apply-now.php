<div class="has-background-white">
    <br />

    <section class="hero is-small">
        <div class="hero-body">
            <div class="container has-text-centered">
                <p class="title is-3 is-size-4-touch has-text-red">
                    <?php the_field('form_heading', 'options') ?>
                </p>
                <br />
                <p class="subtitle is-6">
                    <?php the_field('form_subheading', 'options') ?>
                </p>
            </div>
        </div>
    </section>

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
        <br />
        <br />
        <br />

        <div class="container-action">
            <p class="title is-3 is-size-4-touch has-text-centered">
                <span class="has-text-red"><?php the_field('form_heading_2', 'options') ?> </span>
            </p>
            <br />
            <p class="subtitle is-6 is-size-6-touch has-text-centered">
                <?php the_field('form_subheading_2', 'options') ?>
            </p>
            <br />

            <p class="subtitle is-6 is-size-6-touch has-text-red has-text-centered">
                <a href="apply-now.php#contact-us">
                    <span class="has-text-red"> <?php the_field('contact_small_text', 'options') ?> </span>
                </a>
            </p>
        </div>

        <br />
        <br />
        <br />
    </div>
</div>