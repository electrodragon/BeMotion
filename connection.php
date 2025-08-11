<?php

require 'vendor/autoload.php';

use RedBeanPHP\R;

// Database configuration
$db_host = 'localhost';
$db_name = 'am_bemotion';
$db_user = 'root';
$db_pass = 'toor';

// Setup RedBeanPHP connection
R::setup(
    "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4",
    $db_user,
    $db_pass
);

// Optional: freeze schema in production
R::freeze(false); // true in production

// Optional: set debug mode
R::debug(false);

// Check connection
if (!R::testConnection()) {
    die('Could not connect to the database.');
}
