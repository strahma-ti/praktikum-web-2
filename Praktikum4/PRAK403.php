<?php
// membuat array data mahasiswa
$mahasiswa = array(
    array(
        'no' => 1,
        'nama' => 'Ridho',
        'mata_kuliah' => array(
            array('nama' => 'Pemrograman I', 'sks' => 2),
            array('nama' => 'Praktikum Pemrograman I', 'sks' => 1),
            array('nama' => 'Pengantar Lingkungan Lahan Basah', 'sks' => 2),
            array('nama' => 'Arsitektur Komputer', 'sks' => 3),
        ),
    ),
    array(
        'no' => 2,
        'nama' => 'Ratna',
        'mata_kuliah' => array(
            array('nama' => 'Basis Data I', 'sks' => 2),
            array('nama' => 'Praktikum Basis Data I', 'sks' => 1),
            array('nama' => 'Kalkulus', 'sks' => 3),
        ),
    ),
    array(
        'no' => 3,
        'nama' => 'Tono',
        'mata_kuliah' => array(
            array('nama' => 'Rekayasa Perangkat Lunak', 'sks' => 3),
            array('nama' => 'Analisis dan Perancangan Sistem', 'sks' => 3),
            array('nama' => 'Komputasi Awan', 'sks' => 3),
            array('nama' => 'Kecerdasan Bisnis', 'sks' => 3),
        ),
    ),
);

for ($i = 0; $i < count($mahasiswa); $i++) {
    $jumlahSKS = 0;
    for ($j = 0; $j < count($mahasiswa[$i]['mata_kuliah']); $j++) {
        $jumlahSKS += $mahasiswa[$i]['mata_kuliah'][$j]['sks'];
    }
    $mahasiswa[$i]['jumlahSKS'] = $jumlahSKS;
    if ($mahasiswa[$i]['jumlahSKS'] < 7) {
        $mahasiswa[$i]['keterangan'] = 'Revisi KRS';
    } else {
        $mahasiswa[$i]['keterangan'] = 'Tidak Revisi KRS';
    }
}
?>
<!-- tampilkan data dalam tabel -->
<html>
<head>
    <title>PRAK403.php</title>
    <style>
        table,
        tr,
        td,
        th {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 7px;
        }

        .red {
            background-color: red;
        }

        .green {
            background-color: green;
        }
    </style>
</head>
<body>
    <table>
        <tr bgcolor="CCCDCC">
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php
        //perulangan sebanyak data mahasiswa dalam array $mahasiswa
        for ($i = 0; $i < count($mahasiswa); $i++) {
            //perulangan sebanyak jumlah mata kuliah yang diambil
            for ($j = 0; $j < count($mahasiswa[$i]["mata_kuliah"]); $j++) {
                echo "<tr>";
                //switch case untuk menampilkan data pada tabel
                switch ($j) {
                    case 0:
                        echo "<td>" . $mahasiswa[$i]["no"] . "</td>";
                        echo "<td>" . $mahasiswa[$i]["nama"] . "</td>";
                        echo "<td>" . $mahasiswa[$i]["mata_kuliah"][$j]["nama"] . "</td>";
                        echo "<td>" . $mahasiswa[$i]["mata_kuliah"][$j]["sks"] . "</td>";
                        echo "<td>" . $mahasiswa[$i]["jumlahSKS"] . "</td>";
                        if ($mahasiswa[$i]["keterangan"] == "Revisi KRS") {
                            echo "<td style='background-color:red'>" . $mahasiswa[$i]["keterangan"] . "</td>";

                        } else {
                            echo "<td style='background-color:green'>" . $mahasiswa[$i]["keterangan"] . "</td>";
                        }
                        break;
                    default:
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td>" . $mahasiswa[$i]["mata_kuliah"][$j]["nama"] . "</td>";
                        echo "<td>" . $mahasiswa[$i]["mata_kuliah"][$j]["sks"] . "</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                        break;
                }
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>