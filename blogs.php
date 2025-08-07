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

<?php include('includes/partials/header.php');
page_header('BeMotion - Home');// Partials ?>

<?php include('includes/components/header.php'); // Component ?>

<?php include('includes/components/page_identifier.php');
pageIdentifier('Blogs'); ?>

<?php include('includes/pages/blogs/blog_categories_section.php'); ?>
<?php include('includes/pages/blogs/features.php'); ?>
<?php include('includes/pages/blogs/explore.php'); ?>

<?php include('includes/components/footer.php'); // Component ?>

<?php
function custom_page_scripts()
{
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
        const searchInput = document.getElementById('blogSearch');
        const searchHeading = document.querySelector('.blog-explore-layout h1');
        const majorBlogs = document.getElementById('majorBlogs');
        const noResults = document.getElementById('noResults');
        const blogCards = document.querySelectorAll('.blog-recent-card');
        const loadMoreContainer = document.querySelector('.load-more-button-container');

        searchInput.addEventListener('input', function () {
            const query = this.value.trim().toLowerCase();
            let foundAny = false;

            if (query.length > 0) {
                searchHeading.textContent = `Search: "${query}"`;
                majorBlogs?.classList.add('d-none');
                loadMoreContainer?.classList.add('d-none');
            } else {
                searchHeading.textContent = 'Recent Posts';
                majorBlogs?.classList.remove('d-none');
                loadMoreContainer?.classList.remove('d-none');
            }

            blogCards.forEach(card => {
                const heading = card.querySelector('h3')?.textContent.toLowerCase() || '';
                if (heading.includes(query)) {
                    card.style.display = 'flex';
                    foundAny = true;
                } else {
                    card.style.display = 'none';
                }
            });

            if (!foundAny && query.length > 0) {
                noResults.classList.remove('d-none');
            } else {
                noResults.classList.add('d-none');
            }
        });
    </script>
    <?php
}

include('includes/partials/footer.php'); // Partials ?>
