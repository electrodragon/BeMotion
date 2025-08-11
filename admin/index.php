<?php
require '../connection.php';

// Force cache to clear every time
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<?php include('../includes/partials/header.php'); page_header('BeMotion - Home');// Partials ?>

<?php $current_page = isset($_GET['page']) ? $_GET['page'] : 'home'; ?>

<div class="d-flex min-vh-100" id="admin-layout">
    <!-- Sidebar -->
    <aside class="sidebar bg-dark text-white p-3">
        <h4 class="mb-4">Admin</h4>
        <ul class="nav flex-column gap-2">
            <li>
                <a href="/admin/index.php?page=dealership"
                   class="nav-link text-white <?php echo ($current_page == 'dealership') ? 'active-link' : ''; ?>">
                    Dealership data
                </a>
            </li>
            <li>
                <a href="/admin/index.php?page=products"
                   class="nav-link text-white <?php echo ($current_page == 'products') ? 'active-link' : ''; ?>">
                    Products Entry
                </a>
            </li>
            <li>
                <a href="/admin/index.php?page=blogs"
                   class="nav-link text-white <?php echo ($current_page == 'blogs') ? 'active-link' : ''; ?>">
                    Blogs Entry
                </a>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="flex-grow-1">
        <!-- Top Navbar -->
        <header class="navbar navbar-light bg-light justify-content-end px-4">
            <img src="/assets/images/main-logo.png" alt="Logo" class="logo">
        </header>

        <!-- Content Area -->
        <main class="p-4">
            <?php if (isset($_GET['status']) && isset($_GET['source'])): ?>
                <?php
                $status = $_GET['status'];
                $source = $_GET['source'];
                $isBlog = $source === 'blog';
                $isProduct = $source === 'product';
                ?>

                <?php if ($status === 'success'): ?>
                    <div class="alert alert-success">✅ <?= $isBlog ? 'Blog' : 'Product' ?> added successfully!</div>
                <?php elseif ($status === 'error'): ?>
                    <div class="alert alert-danger">❌ <?= $isBlog ? 'Blog' : 'Product' ?> image upload failed!</div>
                <?php elseif ($status === 'deleted'): ?>
                    <div class="alert alert-danger">🗑️ <?= $isBlog ? 'Blog' : 'Product' ?> deleted!</div>
                <?php elseif ($status === 'updated'): ?>
                    <div class="alert alert-info">✏️ <?= $isBlog ? 'Blog' : 'Product' ?> updated successfully!</div>
                <?php elseif ($status === 'failed'): ?>
                    <div class="alert alert-danger">⚠️ <?= $isBlog ? 'Blog' : 'Product' ?> operation failed! Try again.</div>
                <?php endif; ?>
            <?php endif; ?>


            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';

            switch ($page) {
                case 'dealership':
                    require '../includes/pages/admin/get_dealership_data.php';
                    break;
                case 'products':
                    require '../includes/pages/admin/products_entry.php';
                    break;
                case 'blogs':
                    require '../includes/pages/admin/blogs_entry.php';
                    break;
                default:
                    echo "<h2>Welcome to Admin Panel</h2><p>This is your dashboard content.</p>";
            }
            ?>
        </main>

    </div>
</div>

<script>
    setTimeout(() => {
        const alert = document.querySelector('.alert');
        if (alert) alert.remove();
    }, 3000); // 3 seconds
</script>


<?php include('includes/partials/footer.php'); // Partials ?>
