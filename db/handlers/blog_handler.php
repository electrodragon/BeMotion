<?php
require '../../RedBeanPHP5_7_5-mysql/rb-mysql.php'; // ✅ Path to RedBean

// ✅ RedBean Setup
R::setup('mysql:host=localhost;dbname=bemotion', 'root', '');

// ❗ Make sure freeze is FALSE in dev so tables & columns are auto-created
R::freeze(false);

// ✅ Create Uploads folder if it doesn’t exist
$uploadDir = 'uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// ✅ Handle Form Submission
if (isset($_POST['add_blog'])) {
    $title      = $_POST['title'] ?? '';
    $content    = $_POST['content'] ?? '';
    $tags       = $_POST['tags'] ?? '';
    $location   = $_POST['location'] ?? '';
    $created_at = $_POST['created_at'] ?? '';

    // ✅ Image Upload
    $image_name = $_FILES['image']['name'];
    $tmp_name   = $_FILES['image']['tmp_name'];
    $image_path = $uploadDir . basename($image_name);

    if (move_uploaded_file($tmp_name, $image_path)) {
        // ✅ RedBean will create the table & columns automatically if not exists
        $blog = R::dispense('blogs'); // ✅ table: blogs

        $blog->title      = $title;
        $blog->content    = $content;
        $blog->image      = $image_name;  // just filename; you can store full path if needed
        $blog->tags       = $tags;
        $blog->location   = $location;
        $blog->created_at = $created_at;

        R::store($blog);

        // ✅ Redirect back with success message
        header("Location: ../../../admin.php?status=success");
        exit;
    } else {
        // ❌ Redirect back with error message
        header("Location: ../../../admin.php?status=error");
        exit;
    }
}
?>
