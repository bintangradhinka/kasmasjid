<?php
include 'koneksi.php'; // Include connection file

// Ambil data pengeluaran sosial untuk ditampilkan
$query = "SELECT * FROM kas_sosial WHERE jenis = 'Keluar' ORDER BY tgl_ks DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabel.css">
    <title>Rekap Pengeluaran Sosial</title>
</head>
<body>
    <h1>Rekap Pengeluaran Sosial</h1>
    <a href="update_pengeluaransosial.php" class="tambah-pengeluaran">Tambah Pengeluaran Sosial</a><br><br>
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
                echo "<td>" . $row['tgl_ks'] . "</td>";
                echo "<td>" . $row['keterangan_ks'] . "</td>";
                echo "<td>Rp " . number_format($row['keluar'], 2, ',', '.') . "</td>";
                echo "<td class='action-buttons'>
                        <a href='edit_pengeluaransosial.php?id=" . $row['id_ks'] . "' class='edit'>Edit</a>
                        <a href='delete_pengeluaransosial.php?id=" . $row['id_ks'] . "' class='delete' onclick='return confirm(\"Hapus data ini?\")'>Delete</a>
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
