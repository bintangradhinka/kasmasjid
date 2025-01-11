<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE user_id = $id";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    if (!$data) {
        echo "Data tidak ditemukan!";
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $password = $_POST['password'] ? password_hash($_POST['password'], PASSWORD_DEFAULT) : $data['password'];
        $sql = "UPDATE users SET username = '$username', nama_lengkap = '$nama_lengkap', password = '$password' WHERE user_id = $id";
        if (mysqli_query($conn, $sql)) {
            header("Location: pengguna.php");
            exit;
        } else {
            echo "Gagal mengubah data: " . mysqli_error($conn);
        }
    }
} else {
    echo "ID tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengguna</title>
    <link rel="stylesheet" href="tabel.css">
</head>
<body>
    <h1>Edit Pengguna</h1>

    <form method="POST" action="">
        <label for="username">Username:</label><br>
        <input type="text" name="username" value="<?= htmlspecialchars($data['username']); ?>" required><br>

        <label for="nama_lengkap">Nama Lengkap:</label><br>
        <input type="text" name="nama_lengkap" value="<?= htmlspecialchars($data['nama_lengkap']); ?>" required><br>

        <label for="password">Password (Kosongkan jika tidak ingin diubah):</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <a href="pengguna.php">
        <button>Kembali</button>
    </a>
</body>
</html>
