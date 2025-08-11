<?php
session_start();

// Unset all session variables related to admin
unset($_SESSION['admin_logged_in']);
unset($_SESSION['admin_username']);

// Optionally destroy the entire session
// session_destroy();

// Redirect to login page
header('Location: /admin_login.php');
exit;
