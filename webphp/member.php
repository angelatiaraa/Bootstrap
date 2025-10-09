<?php
require 'koneksi.php'; // koneksi ke DB

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$agree = isset($_POST['agree']) ? 1 : 0;

if (!empty($name) && !empty($email) && !empty($phone)) {
    $sql = "INSERT INTO members (nama, email, phone, agree) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $name, $email, $phone, $agree);

    if ($stmt->execute()) {
        echo "Data Has Been Saved!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Semua field wajib diisi.";
}

$conn->close();
?>
