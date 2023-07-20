<script>
    // Get the parent element with the class "wiswig-editor"
    var wiswigEditor = document.querySelector(".editor");
    if (wiswigEditor) {
        // Get all the h1 elements within the "wiswig-editor" element
        var h1Elements = wiswigEditor.querySelectorAll("h1");

        // Add classes to each h1 element
        h1Elements.forEach(function(h1) {
            h1.classList.add(
                "title",
                "is-size-3-desktop",
                "is-size-3-tablet",
                "is-size-4-mobile",
                "has-text-centered"
            );
        });

        // Get all the hr tags within the "wiswig-editor" element
        var hrTags = wiswigEditor.querySelectorAll("hr");

        // Add classes to each hr tag
        hrTags.forEach(function(hr) {
            hr.classList.add("has-background-grey-lighter");
        });

        // Get all the li tags within the "wiswig-editor" element
        var liTags = wiswigEditor.querySelectorAll("li");

        // Add classes to each li tag
        liTags.forEach(function(li) {
            li.classList.add("subtitle", "is-6");
        });
    }
</script>



<?php

$homepage = get_the_permalink(8);
$applynow = get_the_permalink(32);
$fashion = get_the_permalink(11);
$graphics = get_the_permalink(35);
$photograpghy = get_the_permalink(38);
$workshop = get_the_permalink(41);
$admission = get_the_permalink(44);
$payment = get_the_permalink(47);
$termsandconditions = get_the_permalink(50);
$aboutus = get_the_permalink(53);
$ourfaculty = get_the_permalink(56);
$news = get_the_permalink(59);
$studentstories = get_the_permalink(182);
$design = get_the_permalink(66);
$contact = get_the_permalink(32) . "#contact-us";
$whatsapp = get_field("social_media_links", "options")["whatsapp_link"]; //https://wa.me/message/7M46CARTRNEJI1
$instagram = get_field("social_media_links", "options")["instagram_link"]; //https://www.instagram.com/and_fashionschool/
$facebook = get_field("social_media_links", "options")["facebook_link"]; //https://www.facebook.com/ANDnegombo/
$tiktok = get_field("social_media_links", "options")["tiktok_link"]; //https://www.tiktok.com/@andfashionschoolsl
$googlemaps = get_field("google_maps", "options"); //

?>

<!-- whatsapp floating link -->
<a href="<?php echo $whatsapp ?>" target="_blank">
    <p class="float">
        <i class="uil uil-whatsapp my-float"></i>
    </p>
</a>
<!-- whatsapp floating link -->

<!--google map embed starts-->
<iframe src="<?php echo $googlemaps ?>" width="100%" height="450" style="border: 0;" allowfullscreen="" loading="lazy"></iframe>
<!--google map embed ends-->

<div class="has-background-red">
    <div class="container">
        <div class="columns is-mobile">
            <div class="column">
                <!-- instagram social link starts-->
                <p class="subtitle is-6 is-size-6-mobile has-text-light has-text-right has-text-centered-mobile">
                    <a href="<?php echo $instagram ?>" target="blank" class="has-text-white">
                        <i class="uil uil-instagram"></i>&nbsp;<span class="is-hidden-tablet"><br /></span>Instagram
                    </a>
                </p>
                <!-- instagram social link ends-->
            </div>

            <div class="column">
                <!-- facebook social link starts-->
                <p class="subtitle is-6 is-size-6-mobile has-text-light has-text-centered has-text-centered-mobile">
                    <a href="<?php echo $facebook ?>" target="blank" class="has-text-white">
                        <i class="uil uil-facebook"></i>&nbsp;<span class="is-hidden-tablet"><br /></span>Facebook
                    </a>
                </p>
                <!-- facebook social link ends-->
            </div>

            <div class="column">
                <!-- tiktok social link starts-->
                <p class="subtitle is-6 is-size-6-mobile has-text-light has-text-left has-text-centered-mobile">
                    <a href="<?php echo $tiktok ?>" target="blank" class="has-text-white">
                        <i class="uil uil-tumblr-square"></i>&nbsp;<span class="is-hidden-tablet"><br /></span>Tiktok
                    </a>
                </p>
                <!-- tiktok social link ends-->
            </div>
        </div>
    </div>
</div>

<div class="has-background-black">
    <br />
    <br />
    <br />
    <div class="container is-max-desktop">
        <div class="columns">
            <div class="column">
                <p class="subtitle is-size-6 has-text-white">
                    Available courses
                </p>
                <a href="<?php echo $fashion ?>" class="subtitle is-6 is-size-6-touch has-text-grey">
                    School of Fashion
                </a>
                <br />
                <br />
                <a href="<?php echo $graphics ?>" class="subtitle is-6 is-size-6-touch has-text-grey">
                    School of Graphics
                </a>
                <br />
                <br />
                <a href="<?php echo $photograpghy ?>" class="subtitle is-6 is-size-6-touch has-text-grey">
                    School of Photography
                </a>
                <br />
                <br />
                <a href="<?php echo $workshop ?>" class="subtitle is-6 is-size-6-touch has-text-grey">
                    Our Workshops
                </a>
            </div>

            <div class="column">
                <p class="subtitle is-size-6 has-text-white">
                    Admission
                </p>
                <a href="<?php echo $admission ?>" class="subtitle is-6 is-size-6-touch has-text-grey">
                    Admission Process
                </a>
                <br />
                <br />
                <a href="<?php echo $payment ?>" class="subtitle is-6 is-size-6-touch has-text-grey">
                    Payment Methods
                </a>
                <br />
                <br />
                <a href="<?php echo $termsandconditions ?>" class="subtitle is-6 is-size-6-touch has-text-grey">
                    Terms & conditions
                </a>
            </div>

            <div class="column">
                <p class="subtitle is-size-6 has-text-white">
                    Our University
                </p>
                <a href="<?php echo $aboutus ?>" class="subtitle is-6 is-size-6-touch has-text-grey">
                    About Us
                </a>
                <br />
                <br />
                <a href="<?php echo $ourfaculty ?>" class="subtitle is-6 is-size-6-touch has-text-grey">
                    Our Faculty
                </a>
                <br />
                <br />
                <a href="<?php echo $news ?>" class="subtitle is-6 is-size-6-touch has-text-grey">
                    News & Updates
                </a>
            </div>

            <div class="column">
                <p class="subtitle is-size-6 has-text-white">
                    Our Students
                </p>
                <a href="<?php echo $studentstories ?>" class="subtitle is-6 is-size-6-touch has-text-grey">
                    Student Stories
                </a>
                <br />
                <br />
                <a href="<?php echo $design ?>" class="subtitle is-6 is-size-6-touch has-text-grey">
                    Design Catalogue
                </a>
            </div>

            <div class="column">
                <p class="subtitle is-size-6 has-text-white">
                    Get In Touch
                </p>
                <a href="<?php echo $applynow ?>" class="subtitle is-6 is-size-6-touch has-text-grey">
                    Apply Online
                </a>
                <br />
                <br />
                <a href="<?php echo $contact ?>" class="subtitle is-6 is-size-6-touch has-text-grey">
                    Contact Us
                </a>
                <br />
                <br />
                <!-- footer whatsapp chat link -->
                <a href="<?php echo $whatsapp ?>" target="_blank" class="subtitle is-6 is-size-6-touch has-text-grey">
                    Chat on whatsapp
                </a>
                <!-- footer whatsapp chat link -->
            </div>
        </div>
    </div>
    <br />
    <br />
    <br />
</div>

<div class="has-background-black">
    <div class="container">
        <p class="subtitle is-6 is-size-6-mobile has-text-white has-text-left has-text-left-mobile">
            © 2023 All rights reserved. <span class="is-hidden-tablet"> <br /></span> Academy of Art and design (Private) Limited. <span class="is-hidden-tablet"> <br /></span> A TVEC Registered Training Institute
        </p>

        <hr class="has-background-dark" />

        <div class="columns">
            <div class="column">
                <p class="subtitle is-7 is-size-7-mobile has-text-left">
                    <a href="https://saytoo.media/?ref=andlk" target="blank" class="has-text-light">
                        A Website by Saytoo Media
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>

</html>