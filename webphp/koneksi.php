<?php
// Konfigurasi koneksi ke database
$host     = "localhost";    // Nama host (biasanya localhost)
$user     = "user20232006";         // Username MySQL (default: root)
$password = "lwbfOC";             // Password MySQL (default: kosong untuk XAMPP)
$database = "user20232006";   // Nama database kamu

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
