<!DOCTYPE html>
<html>
<head>
	<title>PRAK 401</title>
</head>
<body>
	<form method="post" action="">
		<label for="panjang">Panjang :</label>
		<input type="number" id="panjang" name="panjang" required><br>
		<label for="lebar">Lebar :</label>
		<input type="number" id="lebar" name="lebar" required><br>
		<label for="nilai_matriks">Nilai :</label>
		<input type="text" id="nilai_matriks" name="nilai_matriks" required><br>
		<input type="submit" name="submit" value="Cetak">
	</form>
    <br>
    <?php
    $panjang = 0;
    $lebar = 0;
    $matriks_input ='';

    // cek apakah form telah disubmit
    if(isset($_POST['submit'])) {
    // ambil input dari user
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $matriks_input = $_POST['nilai_matriks'];
    }
    // konversi input matriks menjadi array
    $matriks_array = explode(" ", $matriks_input);

    // cek apakah panjang dan lebar sesuai dengan jumlah elemen matriks
    if(count($matriks_array) != $panjang * $lebar) {
    echo "Panjang nilai tidak sesuai dengan ukuran matriks";
    } else {
    // tampilkan matriks dalam tabel HTML
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    for($i = 0; $i < $panjang; $i++) {
        echo "<tr>";
        for($j = 0; $j < $lebar; $j++) {
        $index = $i * $lebar + $j;
        echo "<td>" . $matriks_array[$index] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    }
    ?>
</body>
</html>
