<?php
// Force cache to clear every time
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<?php include('includes/partials/header.php'); page_header('BeMotion - Home');// Partials ?>

<?php //include('includes/components/header.php'); // Component ?>

<?php
$current_page = isset($_GET['page']) ? $_GET['page'] : 'home';

require 'RedBeanPHP5_7_5-mysql/rb-mysql.php';
?>

<div class="d-flex" id="admin-layout">
    <!-- Sidebar -->
    <aside class="sidebar bg-dark text-white p-3">
        <h4 class="mb-4">Admin</h4>
        <ul class="nav flex-column gap-2">
            <li>
                <a href="admin.php?page=dealership"
                   class="nav-link text-white <?php echo ($current_page == 'dealership') ? 'active-link' : ''; ?>">
                    Dealership data
                </a>
            </li>
            <li>
                <a href="admin.php?page=products"
                   class="nav-link text-white <?php echo ($current_page == 'products') ? 'active-link' : ''; ?>">
                    Products Entry
                </a>
            </li>
            <li>
                <a href="admin.php?page=blogs"
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
            <?php if (isset($_GET['status'])): ?>
                <?php if ($_GET['status'] === 'success'): ?>
                    <div class="alert alert-success">✅ Blog added successfully!</div>
                <?php elseif ($_GET['status'] === 'error'): ?>
                    <div class="alert alert-danger">❌ Failed to upload image!</div>
                <?php elseif ($_GET['status' === 'deleted']): ?>
                <div class="alert alert-danger">✅ Blog Deleted!</div>
                <?php elseif ($_GET['status' === 'updated']): ?>
                    <div class="alert alert-danger">✏️ Blog Updated Successfully!</div>
                <?php endif; ?>
            <?php endif; ?>

            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';

            switch ($page) {
                case 'dealership':
                    include('includes/pages/admin/get_dealership_data.php');
                    break;
                case 'products':
                    echo "<h2>Products Entry Page (coming soon)</h2>";
                    break;
                case 'blogs':
                    include('includes/pages/admin/blogs_entry.php');
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
