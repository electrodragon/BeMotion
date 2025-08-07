<?php
require 'vendor/autoload.php';
use RedBeanPHP\R;

$dbFile = __DIR__ . "/xyz__.sqlite";
// Force cache to clear every time
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<?php include('includes/partials/header.php'); page_header('BeMotion - Home');// Partials ?>

    <?php include('includes/components/header.php'); // Component ?>

    <?php include('includes/components/page_identifier.php'); pageIdentifier('Product Detail'); ?>
    <?php include('includes/pages/product_detail/product_description.php'); ?>
    <?php include('includes/pages/product_detail/product_features.php'); ?>
    <?php include('includes/pages/product_detail/product_review.php'); ?>
    <?php include('includes/pages/product_detail/product_faq.php'); ?>
    <?php include('includes/pages/product_detail/stay_connected.php'); ?>
    <?php include('includes/pages/product_detail/product_detail_contact.php'); ?>


    <?php include('includes/components/footer.php'); // Component ?>

<?php
function custom_page_scripts() {
    aos_scripts();
    bootstrap_scripts();
    glider_script(); ?>

    <script>
        // document.addEventListener('DOMContentLoaded', function () {
        //     new Glider(document.querySelector('.company-cards'), {
        //         slidesToShow: 'auto',
        //         slidesToScroll: 1,
        //         draggable: true,
        //         arrows: false, // 🔥 Disable arrows
        //         scrollLock: true,
        //     });
        // });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mainImage = document.getElementById('mainProductImage');
            const thumbnails = document.querySelectorAll('.thumbnail-img');

            thumbnails.forEach(thumb => {
                thumb.addEventListener('click', () => {
                    // Update main image
                    mainImage.src = thumb.src;

                    // Remove "selected" class from all
                    thumbnails.forEach(img => img.classList.remove('selected'));

                    // Add "selected" to clicked one
                    thumb.classList.add('selected');
                });
            });
        });
    </script>



    <?php
}

include('includes/partials/footer.php'); // Partials ?>
