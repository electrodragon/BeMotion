<?php
// Force cache to clear every time
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

session_start();

// Redirect if already logged in
if (!empty($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: /admin.php');
    exit;
}
?>

<?php include('includes/partials/header.php'); page_header('BeMotion - Admin LOGIN');// Partials ?>

<section class="admin-login-section d-flex align-items-center justify-content-center">
    <div class="card shadow-lg p-4" style="max-width: 400px; width: 90%;">
        <h2 class="text-center mb-4">Admin Login</h2>

        <?php if (!empty($_SESSION['login_error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= htmlspecialchars($_SESSION['login_error']); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['login_error']); ?>
        <?php endif; ?>

        <form method="POST" action="/apis/admin_auth.php" novalidate>
            <div class="mb-3">
                <label for="adminUsername" class="form-label">Username</label>
                <input type="text" class="form-control" id="adminUsername" name="username" placeholder="Enter admin username" required autofocus>
            </div>
            <div class="mb-4">
                <label for="adminPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="adminPassword" name="password" placeholder="Enter password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</section>

<style>
    .admin-login-section {
        min-height: 100vh;
        background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
        padding: 2rem;
    }
    .card {
        border-radius: 12px;
        background-color: #ffffffdd;
    }
    .form-control:focus {
        box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.5);
        border-color: #4e73df;
    }
</style>

<?php function custom_page_scripts() {
    aos_scripts();
    bootstrap_scripts();
    glider_script(); ?>

    <script>
        // Write Your Script Contents Here...
    </script>

    <?php
}

include('includes/partials/footer.php'); // Partials ?>
