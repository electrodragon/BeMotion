<?php include('includes/partials/header.php'); page_header('BeMotion - Home');// Partials ?>

    <?php include('includes/components/header.php'); // Component ?>

    <?php include('includes/pages/home/hero.php'); ?>
    <?php include('includes/pages/home/features.php'); ?>
    <?php include('includes/pages/home/explore.php'); ?>
    <?php include('includes/pages/home/dealership.php'); ?>
    <?php include('includes/pages/home/company.php'); ?>
    <?php include('includes/pages/home/get_dealership.php'); ?>
    <?php include('includes/pages/home/our_team.php'); ?>
    <?php include('includes/pages/home/our_team_next.php'); ?>
    <?php include('includes/pages/home/team.php'); ?>
    <?php include('includes/pages/home/benefits.php'); ?>
    <?php include('includes/pages/home/contact.php'); ?>

    <?php include('includes/components/footer.php'); // Component ?>

<?php
function custom_page_scripts() {
    aos_scripts();
    bootstrap_scripts();
    glider_script(); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Glider(document.querySelector('.company-cards'), {
                slidesToShow: 'auto',
                slidesToScroll: 1,
                draggable: true,
                arrows: false, // 🔥 Disable arrows
                scrollLock: true,
            });
        });
    </script>

    <?php
}

include('includes/partials/footer.php'); // Partials ?>
