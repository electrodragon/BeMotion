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
<?php require 'RedBeanPHP5_7_5-mysql/rb-mysql.php'; ?>

    <?php include('includes/components/header.php'); // Component ?>

    <?php include('includes/components/page_identifier.php'); pageIdentifier('Blogs'); ?>

    <?php include('includes/pages/blogs/blog_categories_section.php'); ?>
    <?php include('includes/pages/blogs/features.php'); ?>
    <?php include('includes/pages/blogs/explore.php'); ?>

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
            const searchInput = document.getElementById('blogSearch');
            const blogCards = document.querySelectorAll('.blog-recent-card');
            const searchHeading = document.getElementById('searchHeading');

            searchInput.addEventListener('input', function () {

                const query = this.value.trim().toLowerCase();

                if (query.length > 0) {
                    searchHeading.style.display = 'block';
                    searchHeading.textContent = `Search: "${query}"`;

                    let hasMatch = false;

                    blogCards.forEach(card => {
                        const title = card.getAttribute('data-title') || '';
                        const content = card.getAttribute('data-content') || '';
                        const combined = title.toLowerCase() + ' ' + content;

                        if (combined.includes(query)) {
                            card.style.display = 'flex'; // or '' if default is block/flex
                            hasMatch = true;
                        } else {
                            card.style.display = 'none';
                        }
                    });

                    if (!hasMatch) {
                        searchHeading.textContent = `No results found for "${query}"`;
                    }

                } else {
                    searchHeading.style.display = 'none';
                    blogCards.forEach(card => {
                        card.style.display = 'flex'; // or reset to your default display
                    });
                }
            });
        });
    </script>


    <?php
}

include('includes/partials/footer.php'); // Partials ?>
