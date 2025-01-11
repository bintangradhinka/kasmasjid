<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="gelo.css">
</head>
<body>
    <div class="sidebar">
        <div class="welcome">
            <h2>Selamat Datang,</h2>
            <h3><?php echo $_SESSION['username']; ?></h3>
        </div>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li class="has-submenu">
                <a href="#">Kas Masjid</a>
                <ul class="submenu">
                    <li><a href="pemasukan_masjid.php">Pemasukan</a></li>
                    <li><a href="pengeluaran_masjid.php">Pengeluaran</a></li>
                    <li><a href="rekap_masjid.php">Rekap Kas Masjid</a></li>
                </ul>
            </li>
            <li class="has-submenu">
                <a href="#">Kas Sosial</a>
                <ul class="submenu">
                    <li><a href="pemasukan_sosial.php">Pemasukan</a></li>
                    <li><a href="pengeluaran_sosial.php">Pengeluaran</a></li>
                    <li><a href="rekap_sosial.php">Rekap Kas Sosial</a></li>
                </ul>
            </li>
            <li class="has-submenu">
                <a href="#">Laporan Kas</a>
                <ul class="submenu">
                    <li><a href="laporan_masjid.php">Laporan Kas Masjid</a></li>
                    <li><a href="laporan_sosial.php">Laporan Kas Sosial</a></li>
                </ul>
            </li>
            <li><a href="pengguna.php">Kelola Pengguna</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>Manajemen Kas Masjid Al Ikhlas</h1>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>

    </div>

    <footer>
        <p>&copy; 2024 Bintang Radhinka Megara. All rights reserved.</p>
    </footer>

    <script>
        document.querySelectorAll('.has-submenu > a').forEach(menu => {
            menu.addEventListener('click', (e) => {
                e.preventDefault();
                const submenu = menu.nextElementSibling;
                submenu.classList.toggle('active');
            });
        });
    </script>
</body>
</html>
