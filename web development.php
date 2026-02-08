<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Deskripsi Lomba Web Development</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            padding: 40px 0;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            overflow: hidden;
        }

        .header {
            background: #2c3e50;
            color: #fff;
            padding: 25px;
            text-align: center;
        }

        .content {
            display: flex;
            gap: 30px;
            padding: 30px;
        }

        .image-box {
            flex: 1;
        }

        .image-box img {
            width: 100%;
            border-radius: 12px;
        }

        .text-box {
            flex: 1.2;
        }

        .text-box h2 {
            color: #2c3e50;
            margin-bottom: 10px;
            margin-top: 15px;
        }

        .text-box p, .text-box li {
            line-height: 1.7;
            color: #333;
        }

        ul {
            margin-left: 20px;
        }

        .btn-back {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background: #667eea;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        .btn-back:hover {
            background: #5563d6;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .content {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Lomba Web Development</h1>
        <p>INNOVATIVE • CREATIVE</p>
    </div>

    <div class="content">
        <!-- KIRI: GAMBAR -->
        <div class="image-box">
            <img src="../gambar/web dev.jpeg" alt="Web Development">
        </div>

        <!-- KANAN: DESKRIPSI -->
        <div class="text-box">
            <h2>📌 Deskripsi Lomba</h2>
            <p>
                Lomba Web Development adalah kompetisi untuk menguji kemampuan
                peserta dalam merancang dan membangun website yang modern,
                responsif, dan mudah digunakan.
            </p>

            <h2>🎯 Tujuan</h2>
            <ul>
                <li>Meningkatkan kemampuan pengembangan web</li>
                <li>Mengasah kreativitas dan inovasi</li>
                <li>Menerapkan konsep UI/UX yang baik</li>
            </ul>

            <h2>🛠️ Teknologi</h2>
            <ul>
                <li>HTML, CSS, JavaScript</li>
                <li>PHP & MySQL (opsional)</li>
                <li>Framework diperbolehkan</li>
            </ul>

            <h2>🏆 Penilaian</h2>
            <ul>
                <li>Desain & tampilan</li>
                <li>Fungsionalitas</li>
                <li>Kerapihan kode</li>
            </ul>

            <a href="../dashboard.php" class="btn-back">⬅ Kembali ke Dashboard</a>
        </div>
    </div>
</div>

</body>
</html>
