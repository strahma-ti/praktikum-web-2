<?php require('Model.php');
if (isset($_GET['id_member'])) {
    editmember();
}
?>
<!DOCTYPE html>
<html>
<head>
   <?php echo (isset($_GET['id_member'])) ? "<title>Edit Member</title>": "<title>Tambah Member</title>" ?> 
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
    <h2>Form Member</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>ID Member</td>
                <td><input type="text" name="id_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["id_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Nama Member</td>
                <td><input type="text" name="Nama" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nama_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Nomor Member</td>
                <td><input type="text" name="nomor" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nomor_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["alamat"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal Daftar</td>
                <td><input type="datetime-local" name="daftar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["tgl_mendaftar"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal bayar Terakhir</td>
                <td><input type="date" name="bayar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>
                    <?php 
                    if (isset($_GET['id_member'])) {
                        echo "<button type=\"submit\" name=\"update\">Edit</button>";
                    }else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        tambahmember($_POST['id_member'],$_POST['Nama'], $_POST['nomor'], $_POST['alamat'], $_POST['daftar'],$_POST['bayar']);
    }
    if (isset($_POST['update'])) {
       updatemember($_POST['id_member'],$_POST['Nama'], $_POST['nomor'], $_POST['alamat'], $_POST['daftar'],$_POST['bayar']);
    }
    ?>
</body>
</html>