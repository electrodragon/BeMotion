<?php
require 'vendor/autoload.php';
require_once 'DatabaseConfig.php';

use RedBeanPHP\R;

R::setup(
    'mysql:host=' . DatabaseConfig::$DB_HOST . ';dbname=' . DatabaseConfig::$DB_NAME,
    DatabaseConfig::$DB_USER,
    DatabaseConfig::$DB_PASS
);

R::freeze(false);

if (!R::testConnection()) {
    die('Database connection failed!');
}
