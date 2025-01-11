<?php
include 'koneksi.php'; 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM kas_sosial WHERE id_ks = $id";
    if (mysqli_query($conn, $query)) {
        header("Location: pemasukan_sosial.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
