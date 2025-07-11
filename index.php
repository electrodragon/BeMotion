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
        const images = [
            '/assets/images/loving-hens.jpg',
            '/assets/images/chickens-different-colors-farmyard-daytime.jpeg',
            '/assets/images/cookreyan.png'
        ];

        let currentIndex = 0;

        const section = document.querySelector('.benefits');
        const leftBtn = document.querySelector('.benefits-nav.left');
        const rightBtn = document.querySelector('.benefits-nav.right');

        // // Preload images
        images.forEach(src => {
            const img = new Image();
            img.src = src;
        });

        // Function to update background
        function updateBackground(index) {
            section.style.backgroundImage = `url('${images[index]}')`;
        }

        // Next image
        rightBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % images.length;
            updateBackground(currentIndex);
        });

        // Previous image
        leftBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateBackground(currentIndex);
        });

        // Set initial background explicitly (if not already set in CSS)
        updateBackground(currentIndex);
    </script>


    <?php
}

include('includes/partials/footer.php'); // Partials ?>
