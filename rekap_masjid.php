<?php
include 'koneksi.php';
$query = "SELECT * FROM kas_masjid ORDER BY tgl_km DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabel.css">
    <title>Rekap Kas Masjid</title>
</head>
<body>
    <h1>Rekap Kas Masjid</h1>
    </a><br><br>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Pemasukan</th>
                <th>Pengeluaran</th>
                <th>Jenis</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $row['tgl_km'] . "</td>";
                echo "<td>" . $row['keterangan_km'] . "</td>";
                echo "<td>" . number_format($row['masuk'], 2, ',', '.') . "</td>";
                echo "<td>" . number_format($row['keluar'], 2, ',', '.') . "</td>";
                echo "<td>" . $row['jenis'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="dashboard.php">
    <button>Kembali ke Dashboard</button>
</body>
</html>
