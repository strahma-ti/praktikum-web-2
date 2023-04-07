<!DOCTYPE html>
<html>
<head>
	<title>PRAKTIKUM 3 SOAL 3</title>
</head>
<body>
	<!-- Membuat form untuk menginput nilai -->
	<form method="post" style="margin-bottom: 20px">
		<label>Batas Bawah :</label>
		<input type="number" name="batas_bawah"><br>
		<label>Batas Atas :</label>
		<input type="number" name="batas_atas"><br>
		<input type="submit" value="Cetak">
	</form>

	<?php
		// Mendapatkan nilai batas bawah dan batas atas dari form
		if(isset($_POST['batas_bawah']) && isset($_POST['batas_atas'])){
			$batas_bawah = $_POST['batas_bawah'];
			$batas_atas = $_POST['batas_atas'];

			// Menampilkan deret bilangan dan hasil pengecekan
			$i = $batas_bawah;
			do{
				// Jika bilangan setelah ditambah 7 merupakan kelipatan 5
				if(($i+7) % 5 == 0){
					echo "<img src='star-img.png' width='16px' height='16px'>"; // tampilkan bintang jika kelipatan 5
				}else{
					echo $i." ";
				}
				echo "&nbsp";
				$i++;
			}while($i <= $batas_atas);
		}
	?>
</body>
</html>
