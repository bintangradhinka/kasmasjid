<?php
include 'koneksi.php'; 

$query = "SELECT * FROM users ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
    <link rel="stylesheet" href="tabel.css">
</head>
<body>
    <h1>Daftar Pengguna</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['nama_lengkap'] . "</td>";
                echo "<td>
                        <a href='edit_pengguna.php?id=" . $row['user_id'] . "'>Edit</a> | 
                        <a href='delete_pengguna.php?id=" . $row['user_id'] . "' onclick='return confirm(\"Hapus pengguna ini?\")'>Hapus</a>
                    </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="dashboard.php">
        <button>Kembali ke Dashboard</button>
    </a>
</body>
</html>
