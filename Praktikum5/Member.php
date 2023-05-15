<?php 
require('model.php');
if (isset($_GET['id_member'])){
    hapusmember($_GET['id_member']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
    <title>Member Perpus</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 900px;
            margin: auto;
            font-family: 'Poppins', sans-serif;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            color: #3366CC;
        }

        nav {
            background-color: #3366CC;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            padding: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        nav a {
            color: var(--blue-color);
            text-decoration: none;
            margin: 0 10px;
            padding: 10px;
            border-radius: 5px;
            background-color: #fff;
            transition: background-color 0.3s ease-in-out;
        }

        nav a:hover {
            background-color: var(--blue-color);
            color: #fff;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background-color: #F5F5F5;
            color: #333;
            font-weight: bold;
        }

        td {
            background-color: #FFF;
        }

        a.button {
            display: inline-block;
            margin-bottom: 10px;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            background-color: #3366CC;
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.3s ease-in-out;
        }

        a.button:hover {
            background-color: #2B8DC6;
        }
    </style>
    <title>Member Perpus</title>
</head>
<body>
    <h1>Daftar Member</h1>
    <nav>
        <a href="Buku.php">Daftar Buku</a>
        <a href="Peminjaman.php">Peminjaman</a>
    </nav>
        <a href="index.php" class="button">Kembali</a>
    <table>
        <thead>
            <tr>
                <th>ID Member</th>
                <th>Nama</th>
                <th>Nomor</th>
                <th>Alamat</th>
                <th>Tanggal Daftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilmember();
            ?>
        </tbody>
    </table>
    <div>
        <a href="formmember.php" class="button">Tambah Member</a>
    </div>
</body>
</html>
