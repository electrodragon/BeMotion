<?php include('includes/partials/header.php'); page_header('BeMotion - Home');// Partials ?>

    <?php include('includes/components/header.php'); // Component ?>

    <?php include('includes/components/page_identifier.php'); pageIdentifier('About Us', 'About'); ?>
    <?php include('includes/pages/about/about_company.php'); ?>
    <?php include('includes/pages/about/what_we_do.php'); ?>
    <?php include('includes/pages/about/construction_solution.php'); ?>
    <?php include('includes/pages/about/our_team_display.php'); ?>
    <?php include('includes/pages/about/about_blogs.php'); ?>

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
