<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM kas_masjid WHERE id_km = $id";
    if (mysqli_query($conn, $query)) {
        header("Location: pemasukan_masjid.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
