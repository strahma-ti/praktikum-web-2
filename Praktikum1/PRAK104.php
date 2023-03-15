<!-- PHP -->
    <?php
        // deklarasi array jenis indexed
        $list = array("Samsung Galaxy S22",
            "Samsung Galaxy S22+",
            "Samsung Galaxy A03",
            "Samsung Galaxy Xcover 5"
        );
    ?>

<!-- HTML -->
<!DOCTYPE html>
<html>
    <head>       
        <title>PRAKTIKUM 1 NO 4</title>   
         <!-- CSS -->
         <style>
            table, th, tr, td {
                border: 1px solid black;
                text-align: left;
            }
            th{
                font-weight: bold;
            }
            tr {
                font-weight: normal;
            }

        </style>
    </head>
    <body>
        <table>
            <tr><th> Daftar Smartphone Samsung</th></tr>
            <tr><td><?php echo $list[0]; ?></td></tr>
            <tr><td><?php echo $list[1]; ?></td></tr>
            <tr><td><?php echo $list[2]; ?></td></tr>
            <tr><td><?php echo $list[3]; ?></td></tr>
        </table>
    </body>
    </html>