<?php
// Force cache to clear every time
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<?php
require_once 'RedBeanPHP5_7_5-mysql/rb-mysql.php'; // if not already included
?>

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

    <script>
        const buttons = document.querySelectorAll('.filter-btn');
        const products = document.querySelectorAll('.product-card');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                buttons.forEach(b => b.classList.remove('btn-pills-1'));
                btn.classList.add('btn-pills-1');

                const filterTitle = btn.getAttribute('data-title');

                products.forEach(card => {
                    const cardTitle = card.getAttribute('data-title');

                    if (filterTitle === 'all' || cardTitle === filterTitle) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>


    <?php
}

include('includes/partials/footer.php'); // Partials ?>
