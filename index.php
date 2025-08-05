<?php
// Force cache to clear every time
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
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
            '/assets/images/loving-hens.webp',
            '/assets/images/chickens-different-colors-farmyard-daytime.jpeg',
            '/assets/images/cookreyan.webp'
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

    <script>
        const buttons = document.querySelectorAll(".interest-tags button");
        const interestInput = document.getElementById("interestInput");

        buttons.forEach((btn) => {
            btn.addEventListener("click", () => {
                buttons.forEach(b => b.classList.remove("active"));
                btn.classList.add("active");
                interestInput.value = btn.innerText.trim();
            });
        });
    </script>

    <script>
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('success') === 'true') {
            alert("✅ Form submitted successfully!");
        }
    </script>

    <?php
}

include('includes/partials/footer.php'); // Partials ?>
