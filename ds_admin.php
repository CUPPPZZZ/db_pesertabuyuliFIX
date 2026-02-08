<?php
session_start();
include 'koneksi.php';

// Proteksi login
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit;
}

$data = mysqli_query($koneksi, "SELECT * FROM peserta");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #f4f6f9;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            margin: 0;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            background: #e74c3c;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
        }

        /* Container */
        .container {
            padding: 30px;
        }

        .container h3 {
            margin-bottom: 20px;
            color: #2c3e50;
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        table thead {
            background: #2c3e50;
            color: white;
        }

        table th, table td {
            padding: 14px;
            text-align: center;
        }

        table tr:nth-child(even) {
            background: #f2f2f2;
        }

        table tr:hover {
            background: #e6e9ff;
        }

        /* Badge lomba */
        .badge {
            padding: 6px 14px;
            border-radius: 20px;
            color: white;
            font-size: 13px;
            font-weight: 600;
            display: inline-block;
        }

        .web { background: #3498db; }
        .mobile { background: #2ecc71; }
        .games { background: #f39c12; }
        .server { background: #9b59b6; }
        .cyber { background: #e74c3c; }

        /* Responsive */
        @media (max-width: 768px) {
            table {
                font-size: 13px;
            }
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <h2>Dashboard Admin</h2>
    <a href="logout.php">Logout</a>
</div>

<!-- CONTENT -->
<div class="container">
    <h3>Data Siswa Pendaftar Lomba</h3>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>E
                    
                
                
                
                
                
                
                
                
                
                
                
                
        
                

                <th>Email</th>
                <th>No Telp</th>
                <th>Kategori Lomba</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php while ($row = mysqli_fetch_assoc($data)) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nis'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['no_telp'] ?></td>
                <td>
                    <span class="badge <?= $row['kategori_lomba'] ?>">
                        <?= strtoupper($row['kategori_lomba']) ?>
                    </span>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>
