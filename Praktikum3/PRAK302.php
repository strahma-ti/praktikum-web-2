<!DOCTYPE html>
<html>
<head>
	<title>PRAKTIKUM 3 SOAL 2</title>
</head>
<body>
    <!-- Membuat form untuk menginput nilai -->
	<form method="post" style="margin-bottom: 20px;">
		<label>Tinggi :</label>
		<input type="number" name="tinggi"><br>
		<label>Alamat Gambar :</label>
		<input type="text" name="gambar"><br>
		<input type="submit" value="Cetak">
	</form>
	<?php
		// Mendapatkan nilai tinggi segitiga dan link gambar dari form
		if(isset($_POST['tinggi']) && isset($_POST['gambar'])){
			$tinggi = $_POST['tinggi'];
			$gambar = $_POST['gambar'];

			// Menampilkan segitiga dari gambar
			$i = 1;
			while($i <= $tinggi){
				$j = 1;
				while($j <= $tinggi){
					if ($j >= $i) {
						echo "<img src='$gambar' width='20px' height='20px'>";
					} else {
						echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					}
					$j++;
				}
				echo "<br>";
				$i++;
			}
		}
	?>
</body>
</html>
