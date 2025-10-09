<?php
include 'koneksi.php';

$query = "SELECT nama, angka, warna FROM chart ORDER BY id ASC";
$result = $conn->query($query);

$labels = [];
$data = [];
$chartcolors = [];

while ($row = $result->fetch_assoc()) {
    $labels[] = $row['nama'];
    $data[] = $row['angka'];
    $chartcolors[] = $row['warna'];
}

// Gabungkan dalam satu objek
$output = [
    'labels' => $labels,
    'data' => $data,
    'chartcolors' => $chartcolors
];

// Output sebagai JSON
header('Content-Type: application/json');
echo json_encode($output);
?>
