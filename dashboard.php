<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'user') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Perlombaan</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: #2c3e50;
            color: white;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar h2 { font-size: 28px; }
        .navbar ul { list-style: none; display: flex; gap: 30px; }
        .navbar a { color: white; text-decoration: none; font-size: 16px; transition: 0.3s; }
        .navbar a:hover { color: #3498db; }

        /* --- STYLE BARU UNTUK BANNER --- */
        .banner-section {
            max-width: 1200px;
            margin: 30px auto 0; /* Memberi jarak dari navbar */
            padding: 0 20px;
            width: 100%;
        }

        .banner-section img {
            width: 100%;
            height: auto;
            border-radius: 15px; /* Membuat sudut gambar melengkung */
            box-shadow: 0 10px 30px rgba(0,0,0,0.3); /* Memberi efek bayangan */
            display: block;
        }
        /* ------------------------------- */

        .card-container {
            flex: 1;
            max-width: 1200px;
            margin: 40px auto; 
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            padding: 0 20px 40px;
        }

        .card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            transition: 0.3s;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            background: #f5f5f5;
        }

        .card h4 {
            padding: 15px;
            text-align: center;
            color: #2c3e50;
        }

        .btn-daftar {
            background: #667eea;
            color: white;
            border: none;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
        }

        /* Modal Styles tetap sama... */
        .modal { display: none; position: fixed; z-index: 100; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.4); }
        .modal-content { background-color: white; margin: 10% auto; padding: 30px; border-radius: 10px; width: 80%; max-width: 500px; }
    </style>
</head>
<body>

<nav class="navbar">
    <h2>Dashboard Lomba</h2>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Kategori</a></li>
    </ul>
</nav>

<div class="banner-section">
    <img src="gambar/BANNERYT.png" alt="Layanan Kami Banner">
</div>

<div class="card-container">
    <div class="card">
        <img src="gambar/web dev.jpeg">
        <h4>Web Development</h4>
        <a href="deskripsi/web development.php" class="btn-daftar">Lihat Deskripsi</a>
    </div>

    <div class="card">
        <img src="gambar/mobile app.jpeg">
        <h4>Mobile App</h4>
        <a href="deskripsi/mobile app.php" class="btn-daftar">Lihat Deskripsi</a>
    </div>

    <div class="card">
        <img src="gambar/games.jpeg">
        <h4>Games</h4>
        <a href="deskripsi.php?lomba=games" class="btn-daftar">Lihat Deskripsi</a>
    </div>

    <div class="card">
        <img src="gambar/serveradminis.jpeg">
        <h4>Administrasi Server</h4>
        <a href="deskripsi.php?lomba=server" class="btn-daftar">Lihat Deskripsi</a>
    </div>

    <div class="card">
        <img src="gambar/CYBER .jpeg">
        <h4>Cyber Security</h4>
        <a href="deskripsi.php?lomba=cyber" class="btn-daftar">Lihat Deskripsi</a>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>