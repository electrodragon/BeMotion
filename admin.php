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


<div class="d-flex" id="admin-layout">
    <!-- Sidebar -->
    <aside class="sidebar bg-dark text-white p-3">
        <h4 class="mb-4">Admin</h4>
        <ul class="nav flex-column gap-2">
            <li><a href="#" class="nav-link text-white">Dealership data</a></li>
            <li><a href="#" class="nav-link text-white">Products Entry</a></li>
            <li><a href="#" class="nav-link text-white">Blogs Entry</a></li>
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
            <h2>Welcome to Admin Panel</h2>
            <p>This is your dashboard content.</p>
        </main>
    </div>
</div>


<?php include('includes/partials/footer.php'); // Partials ?>
