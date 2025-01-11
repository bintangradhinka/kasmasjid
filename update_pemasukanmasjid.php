<?php
include 'koneksi.php'; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tanggal = $_POST['tgl_km'];
    $keterangan = $_POST['keterangan_km'];
    $masuk = $_POST['masuk'];

    $query = "INSERT INTO kas_masjid (tgl_km, keterangan_km, masuk, jenis) 
            VALUES ('$tanggal', '$keterangan', '$masuk', 'Masuk')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Pemasukan berhasil ditambahkan!'); window.location.href = 'pemasukan_masjid.php';</script>";
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
    <title>Tambah Pemasukan Masjid</title>
</head>
<body>
    <h1>Tambah Pemasukan Masjid</h1>
    <form method="POST" action="update_pemasukanmasjid.php">
        <label>Tanggal:</label><br>
        <input type="date" name="tgl_km" required><br>
        <label>Keterangan:</label><br>
        <input type="text" name="keterangan_km" required><br>
        <label>Jumlah Pemasukan:</label><br>
        <input type="number" step="0.01" name="masuk" required><br><br>
        <button type="submit">Tambah Pemasukan</button>
    </form>
    <a href="pemasukan_masjid.php">
        <button>Kembali ke Daftar Pemasukan</button>
    </a><br><br>
</body>
</html>
