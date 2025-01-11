<?php
include 'koneksi.php';

$queryMasuk = "SELECT SUM(masuk) AS total_masuk FROM kas_masjid WHERE jenis = 'Masuk'";
$resultMasuk = mysqli_query($conn, $queryMasuk);
$totalMasuk = mysqli_fetch_assoc($resultMasuk)['total_masuk'];


$queryKeluar = "SELECT SUM(keluar) AS total_keluar FROM kas_masjid WHERE jenis = 'Keluar'";
$resultKeluar = mysqli_query($conn, $queryKeluar);
$totalKeluar = mysqli_fetch_assoc($resultKeluar)['total_keluar'];


$saldoAkhir = $totalMasuk - $totalKeluar;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Kas Masjid</title>

    <link rel="stylesheet" href="tabel.css">
</head>
<body>
    <h1>Laporan Kas Masjid</h1>
    <table>
        <tr>
            <th>Total Pemasukan</th>
            <th>Total Pengeluaran</th>
            <th>Saldo Akhir</th>
        </tr>
        <tr>
            <td>Rp <?= number_format($totalMasuk, 2, ',', '.') ?></td>
            <td>Rp <?= number_format($totalKeluar, 2, ',', '.') ?></td>
            <td>Rp <?= number_format($saldoAkhir, 2, ',', '.') ?></td>
        </tr>
    </table>

    <!-- Tombol untuk mencetak laporan -->
    <button onclick="window.print()">Cetak Laporan</button><br><br>

    <!-- Tombol Kembali -->
    <a href="dashboard.php">
        <button>Kembali ke Dashboard</button>
    </a>
</body>
</html>
