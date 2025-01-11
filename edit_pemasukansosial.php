<?php
include 'koneksi.php';
$id = $_GET['id'];

$query = "SELECT * FROM kas_sosial WHERE id_ks = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "Data tidak ditemukan!";
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tgl_ks = $_POST['tgl_ks']; 
    $keterangan_ks = $_POST['keterangan_ks'];
    $masuk = $_POST['masuk'];
    $sql = "UPDATE kas_sosial SET tgl_ks = '$tgl_ks', keterangan_ks = '$keterangan_ks', masuk = '$masuk' WHERE id_ks = $id";
    if (mysqli_query($conn, $sql)) {
        header("Location: pemasukan_sosial.php");
        exit; 
    } else {
        echo "Gagal mengubah data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pemasukan Sosial</title>
    <link rel="stylesheet" href="tabel.css">
</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 20px;
}

h2 {
    color: #2e6a47;  
    text-align: center;
    font-size: 2em;
    margin-bottom: 20px;
}

form {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    margin: 0 auto;
}

form label {
    font-size: 1em;
    color: #333;
    display: block;
    margin-bottom: 10px;
}

form input {
    width: 100%;
    padding: 10px;
    font-size: 1em;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form input[type="submit"] {
    background-color: #2e6a47;  
    color: white;
    border: none;
    cursor: pointer;
    padding: 12px;
    font-size: 1em;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

form input[type="submit"]:hover {
    background-color: #3c7a59;  
}

@media (max-width: 600px) {
    form {
        width: 90%;
    }

    h2 {
        font-size: 1.5em;
    }
}

</style>
<body>
    <h2>Edit Data Pemasukan Sosial</h2>
    <form method="POST" action="">
        <label for="tgl_ks">Tanggal</label>
        <input type="date" name="tgl_ks" id="tgl_ks" value="<?= htmlspecialchars($data['tgl_ks']); ?>" required>

        <label for="keterangan_ks">Keterangan</label>
        <input type="text" name="keterangan_ks" id="keterangan_ks" value="<?= htmlspecialchars($data['keterangan_ks']); ?>" required>

        <label for="masuk">Jumlah Pemasukan</label>
        <input type="number" name="masuk" id="masuk" step="0.01" value="<?= htmlspecialchars($data['masuk']); ?>" required>

        <input type="submit" value="Simpan Perubahan">
    </form>
    <a href="pemasukan_sosial.php">
        <button>Kembali ke Daftar Pemasukan</button>
    </a><br><br>
</body>
</html>
