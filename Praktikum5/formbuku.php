<?php require('Model.php');
if (isset($_GET['id_buku'])) {
    editbuku();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
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
    <?php echo (isset($_GET['id_buku'])) ? "<title>Edit Buku</title>" : "<title>Tambah Buku</title>" ?>
</head>
<body>
    <h2>Form Buku</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>ID Buku</td>
                <td><input type="text" name="id_buku" value="<?php echo (isset($_GET['id_buku'])) ? $result[0]['id_buku'] : ''; ?>" required></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul" value="<?php echo (isset($_GET['id_buku'])) ? $result[0]['judul_buku'] : ''; ?>" required></td>
            </tr>
            <tr>
                <td>Nama Penulis</td>
                <td><input type="text" name="penulis" value="<?php echo (isset($_GET['id_buku'])) ? $result[0]['penulis'] : ''; ?>" required></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" value="<?php echo (isset($_GET['id_buku'])) ? $result[0]['penerbit'] : ''; ?>" required></td>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="thnterbit" value="<?php echo (isset($_GET['id_buku'])) ? $result[0]['tahun_terbit'] : ''; ?>" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <?php 
                    if (isset($_GET['id_buku'])) {
                        echo '<button type="submit" name="update">Edit</button>';
                    } else {
                        echo '<button type="submit" name="submit">Tambah</button>';
                    }
                    ?>
                    <a href="index.php" class="button-back">Kembali</a>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        tambahbuku($_POST['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
    }
    if (isset($_POST['update'])) {
       updatebuku($_GET['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
    }
    ?>
</body>
</html>
