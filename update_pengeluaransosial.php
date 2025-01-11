<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tanggal = $_POST['tgl_ks'];
    $keterangan = $_POST['keterangan_ks'];
    $keluar = $_POST['keluar'];

    $query = "INSERT INTO kas_sosial (tgl_ks, keterangan_ks, keluar, jenis) 
            VALUES ('$tanggal', '$keterangan', '$keluar', 'Keluar')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Pengeluaran Sosial berhasil ditambahkan!'); window.location.href = 'pengeluaran_sosial.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabel.css">
    <title>Tambah Pengeluaran Sosial</title>
</head>
<body>
    <h1>Tambah Pengeluaran Sosial</h1>
    <form method="POST" action="update_pengeluaransosial.php">
        <label>Tanggal:</label><br>
        <input type="date" name="tgl_ks" required><br>
        <label>Keterangan:</label><br>
        <input type="text" name="keterangan_ks" required><br>
        <label>Jumlah Pengeluaran:</label><br>
        <input type="number" step="0.01" name="keluar" required><br><br>
        <button type="submit">Tambah Pengeluaran</button>
    </form>
    <a href="pengeluaran_sosial.php">
        <button>Kembali ke Daftar Pengeluaran Sosial</button>
    </a><br><br>
</body>
</html>
