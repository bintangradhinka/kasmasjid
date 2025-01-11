<?php
include 'koneksi.php';
$id = $_GET['id'];

$query = "SELECT * FROM kas_masjid WHERE id_km = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);


if (!$data) {
    echo "Data tidak ditemukan!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tgl_km = $_POST['tgl_km']; 
    $keterangan_km = $_POST['keterangan_km'];
    $keluar = $_POST['keluar'];

    $sql = "UPDATE kas_masjid SET tgl_km = '$tgl_km', keterangan_km = '$keterangan_km', keluar = '$keluar' WHERE id_km = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: pengeluaran_masjid.php");
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
    <title>Edit Pengeluaran Masjid</title>
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
    <h2>Edit Data Pengeluaran Masjid</h2>
    <form method="POST" action="">
        <label for="tgl_km">Tanggal</label>
        <input type="date" name="tgl_km" id="tgl_km" value="<?= htmlspecialchars($data['tgl_km']); ?>" required>

        <label for="keterangan_km">Keterangan</label>
        <input type="text" name="keterangan_km" id="keterangan_km" value="<?= htmlspecialchars($data['keterangan_km']); ?>" required>

        <label for="keluar">Jumlah Pengeluaran</label>
        <input type="number" name="keluar" id="keluar" step="0.01" value="<?= htmlspecialchars($data['keluar']); ?>" required>

        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>
