<?php include('includes/partials/header.php'); page_header('BeMotion - Product');// Partials ?>

    <?php include('includes/components/header.php'); // Component ?>
    <?php include('includes/components/page_identifier.php'); pageIdentifier('Product');; // Component ?>
    <?php include('includes/pages/product/display_product.php'); ?>
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

    <?php
}

include('includes/partials/footer.php'); // Partials ?>
