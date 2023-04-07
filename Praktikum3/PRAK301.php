<html>
<head>
	<title>PRAKTIKUM 3 SOAL 1</title>
</head>
<body>
    <!-- Membuat form untuk menginput nilai -->
	<form method="post">
		<label>Jumlah Peserta :</label>
		<input type="number" name="jumlah"><br>
		<input type="submit" name="submit" value="Cetak">
	</form>
	<?php
    // Pengecekan apakah tombol cetak sudah ditekan
	if(isset($_POST['submit'])){
        // Operasi data yang sudah diinput dari form
		$jumlah = $_POST['jumlah'];
		$i = 1;
        // Perulangan while untuk menampilkan output
		while($i <= $jumlah){
            // Pengkondisian untuk menentukan warna dan teks
			if($i % 2 == 0){
				echo "<h2> <font color='green'> Peserta ke-$i </h2>";
			}
			else{
				echo "<h2> <font color='red'> Peserta ke-$i</h2>";
			}
			$i++;
		}
	}
	?>
</body>
</html>
