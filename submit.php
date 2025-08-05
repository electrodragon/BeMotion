<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "bemotion";
$tableName = "get_dealership";

$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

$conn->query("CREATE DATABASE IF NOT EXISTS $dbName");
$conn->select_db($dbName);

$createTableSQL = "
CREATE TABLE IF NOT EXISTS $tableName (
    id INT AUTO_INCREMENT PRIMARY KEY,
    interest VARCHAR(100),
    name VARCHAR(100),
    email VARCHAR(100),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($createTableSQL);

// Form data
$interest = isset($_POST['interest']) ? $_POST['interest'] : '';
$name     = isset($_POST['name'])     ? $_POST['name']     : '';
$email    = isset($_POST['email'])    ? $_POST['email']    : '';
$message  = isset($_POST['message'])  ? $_POST['message']  : '';

$sql = "INSERT INTO $tableName (interest, name, email, message) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);


if ($stmt) {
    $stmt->bind_param("ssss", $interest, $name, $email, $message);

    if ($stmt->execute()) {
        // ✅ Success → redirect
        header("Location: index.php?success=true");
        exit;
    } else {
        // ❌ Insert error
        echo "❌ Database insert error: " . $stmt->error;
    }

    $stmt->close();
} else {
    // ❌ Prepare failed
    echo "❌ Prepare failed: " . $conn->error;
}


$conn->close();
?>
