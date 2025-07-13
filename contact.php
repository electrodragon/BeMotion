<?php header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");?>
<?php include('includes/partials/header.php'); page_header('BeMotion - Home');// Partials ?>

    <?php include('includes/components/header.php'); // Component ?>
    <?php include('includes/components/page_identifier.php'); pageIdentifier('Contact', 'Contact US'); ?>
    <?php include('includes/pages/contact/contact.php'); ?>
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
