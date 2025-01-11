<?php
include 'koneksi.php';
$query = "SELECT * FROM kas_masjid WHERE jenis = 'Keluar' ORDER BY tgl_km DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabel.css">
    <title>Rekap Pengeluaran Masjid</title>
</head>
<body>
    <h1>Rekap Pengeluaran Masjid</h1>
    <a href="update_pengeluaranmasjid.php" class="tambah-pengeluaran">Tambah Pengeluaran</a><br><br>
    </a><br><br>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Jumlah</th>
                <th>Aksi</th>
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
                echo "<td>Rp " . number_format($row['keluar'], 2, ',', '.') . "</td>";
                echo "<td class='action-buttons'>
                        <a href='edit_pengeluaranmasjid.php?id=" . $row['id_km'] . "' class='edit'>Edit</a>
                        <a href='delete_pengeluaranmasjid.php?id=" . $row['id_km'] . "' class='delete' onclick='return confirm(\"Hapus data ini?\")'>Delete</a>
                        </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="dashboard.php">
    <button>Kembali ke Dashboard</button>    
</body>
</html>
