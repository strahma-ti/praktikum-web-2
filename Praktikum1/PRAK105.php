<!-- PHP -->
<?php
    // mendeklarasikan array jenis associative
    $key = array("SGS22", "SGS22P", "SGA03", "SGX5");
    $value = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");

    // array combine untuk mengkombinasi array key dan value menjadi array samsung
    $samsung = array_combine($key, $value);
?>

<!-- HTML -->
<!DOCTYPE html>
<html>
    <head>
        <title>PRAKTIKUM 1 NO 4</title>   
        <!-- CSS -->
        <!-- CSS untuk mengatur tampilan pada head -->
        <style>
        th {
            background-color: red;
            text-align: left;
            font-weight: bold;
            font-size: large;
            padding: 20px 0px;
        }
        td {
            text-align: left;
        }
    </style>
    </head>
    <body>
        <table border="1">
            <tr> <th>Daftar Smartphone Samsung</th> </tr>
            <?php 
            // Menggunakan foreach loop untuk mengakses array dan mencetak data ke dalam tabel
                foreach($samsung as $smartphone){ 
            ?>
            <tr><td> <?php echo $smartphone; ?> </td></tr>
            <?php } ?>
        </table>
    </body>
</html>