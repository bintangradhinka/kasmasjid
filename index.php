<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Kas Masjid</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        header a {
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            background: #007BFF;
            border-radius: 5px;
            transition: background 0.3s;
        }

        header a:hover {
            background: #0056b3;
        }

        .hero {
            font-family: Arial, sans-serif;
            background: linear-gradient(rgba(255, 255, 255, 0.5), rgba(7, 36, 122, 0.41)), 
                url('masjid.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
            text-align: center;
            flex-direction: column;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            opacity: 0;
            transform: translateY(50px);
            animation: fadeIn 2s ease-out forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero p {
            font-size: 1.2rem;
            margin-top: 10px;
            opacity: 0;
            animation: fadeIn 2s ease-out forwards 1.5s;
        }

        .info {
            background: #f4f4f9;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            margin: 30px auto;
            width: 80%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .info h2 {
            margin-bottom: 10px;
            color: #333;
        }

        .info p {
            margin-bottom: 5px;
            color: #555;
            line-height: 1.6;
        }

        .info i {
            color: #007BFF;
            margin-right: 8px;
        }

        footer {
            background: #222;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <h1>Masjid Ikhlas</h1>
        </div>
        <div>
            <a href="login.php">Login</a>
        </div>
    </header>

    <div class="hero">
        <h1>Sistem Kas Masjid Al-Ikhlas</h1>
        <p>Mengelola keuangan masjid dengan transparansi dan amanah</p>
    </div>

    <div class="info">
        <h2>Hubungi Kami</h2>
        <p><i class="fas fa-map-marker-alt"></i> Jl. Raya Masjid No. 123, Kota Mangga</p>
        <p><i class="fas fa-phone"></i> 0851-5678-8792</p>
        <p><i class="fas fa-envelope"></i> donasimasjidalikhlas@gmail.com </p>
    </div>

    <footer>
        <p>&copy; 2024 Bintang Radhinka Megara. All Rights Reserved.</p>
    </footer>
</body>
</html>
