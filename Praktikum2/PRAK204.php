<!DOCTYPE html>
<html>
<head>
	<title>Soal 4</title>
</head>
<body>
    <!-- Membuat form untuk menginput data -->
	<form method="post">
		<label for="nilai">Nilai : </label>
		<input type="number" name="nilai" id="nilai" required>
		<br>
		<input type="submit" value="Konversi">
	</form>
	<?php
		if(isset($_POST['nilai'])){
			$nilai = $_POST['nilai'];

			// Cek apakah nilai melebihi limit
			if($nilai > 999){
				echo "Anda Menginput Melebihi Limit Bilangan ";
			}
			else{
				// Cek jenis bilangan dari nilai yang diinput
				if($nilai == 0){
					echo "<h2> Hasil: nol <h2>";
				}
				elseif($nilai < 10){
					echo "<h2> Hasil: satuan <h2>";
				}
				elseif($nilai < 20){
					echo "<h2> Hasil: belasan <h2>";
				}
				elseif($nilai < 100){
					echo "<h2> Hasil: puluhan <h2>";
				}
				elseif($nilai < 1000){
					echo "<h2> Hasil: ratusan <h2>";
				}
			}
		}
	?>
</body>
</html>
