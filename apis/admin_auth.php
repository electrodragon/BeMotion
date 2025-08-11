<?php session_start();

// Define admin credentials
$adminUser = 'root';
$adminPass = 'toor';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and sanitize input values
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Validate credentials
    if ($username === $adminUser && $password === $adminPass) {
        // Grant access
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;

        // Redirect to admin dashboard
        header('Location: /admin.php');
        exit;
    } else {
        // Invalid credentials
        $_SESSION['admin_logged_in'] = false;

        // Optional: Set error message in session to show on login page
        $_SESSION['login_error'] = 'Invalid username or password.';

        // Redirect back to login page
        header('Location: /admin_login.php');
        exit;
    }
} else {
    // If accessed directly without POST, redirect to login page
    header('Location: /admin_login.php');
    exit;
}
