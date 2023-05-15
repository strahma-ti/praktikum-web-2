<?php 
require('Model.php');
if (isset($_GET['id_peminjaman'])) {
    editpeminjaman();
}
?>
<!DOCTYPE html>
<html>
<head>
   <?php echo (isset($_GET['id_peminjaman'])) ? "<title>Edit Data Peminjaman</title>": "<title>Tambah Data Peminjaman</title>" ?> 
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
</head>
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 500px;
            margin: auto;
            font-family: 'Poppins', sans-serif;
        }

        h2 {
            text-align: center;
            margin: 20px 0;
            color: #3366CC;
        }

        form {
            background-color: #F5F5F5;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
        }

        tr > td:first-child {
            width: 120px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button[type="submit"] {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            background-color: #3366CC;
            color: #fff;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        button[type="submit"]:hover {
            background-color: #2B8DC6;
        }

        .button-back {
            display: inline-block;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            background-color: #CCCCCC;
            color: #333;
            font-size: 14px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .button-back:hover {
            background-color: #999999;
        }
    </style>
<body>
    <h2>Form Peminjaman</h2>
<form action="" method="post">
    <table>
        <tr>
            <td>ID Peminjaman</td>
            <td><input type="text" name="id_peminjaman" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["id_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
        </tr>
        <tr>
            <td>ID Member</td>
            <td><input type="text" name="id_member" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["id_member"] . "" : "value = '' "; ?> required> <br></td>
        </tr>
        <tr>
            <td>ID Buku</td>
            <td><input type="text" name="id_buku" <?php echo (isset($_GET['id_peminjaman'])) ? "value = " . $result[0]['id_buku'] . "" : "value = '' "; ?> required></td>
        </tr>
        <tr>
            <td>Tanggal Peminjaman</td>
            <td><input type="date" name="pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
        </tr>
        <tr>
            <td>Tanggal Kembalian</td>
            <td><input type="date" name="kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_kembali"] . "" : "value = '' "; ?> required> <br></td>
        </tr>
        <tr>
            <td>
                <?php 
                if (isset($_GET['id_peminjaman'])) {
                    echo "<button type=\"submit\" name=\"update\">Edit</button>";
                }else {
                    echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
                }
                ?>
                <a href="index.php" class="button-back">Kembali</a>
            </td>
        </tr>
    </table>
</form>

<?php
if (isset($_POST['submit'])) {
    tambahpeminjaman($_POST['id_peminjaman'], $_POST['id_member'], $_POST['id_buku'], $_POST['pinjam'], $_POST['kembali']);
}
if (isset($_POST['update'])) {
    updatepeminjaman($_POST['id_peminjaman'], $_POST['id_member'], $_POST['id_buku'], $_POST['pinjam'], $_POST['kembali']);
}
if (isset($_GET['id_peminjaman'])){
    hapuspeminjaman($_GET['id_peminjaman']);
}
?>
</body>
</html>
