<?php
require "connection.php";
use RedBeanPHP\R;

// === FORM ROUTER ===
$formType = $_POST['form'] ?? '';

switch ($formType) {
    case 'dealership':
        insertDealership();
        break;

    // case 'product':
    //     insertProduct();
    //     break;

    // case 'blog':
    //     insertBlog();
    //     break;

    default:
        echo "❌ Unknown form type.";
}

// === FUNCTION: Insert Dealership ===
function insertDealership() {
    $interest = $_POST['interest'] ?? '';
    $name     = $_POST['name']     ?? '';
    $email    = $_POST['email']    ?? '';
    $message  = $_POST['message']  ?? '';

    $dealership = R::dispense('dealership'); // Table name auto-handled

    $dealership->interest = $interest;
    $dealership->name     = $name;
    $dealership->email    = $email;
    $dealership->message  = $message;
    $dealership->created_at = date('d-m-Y');

    R::store($dealership);

    header("Location: index.php?success=true");
    exit;
}
?>
