<!DOCTYPE html>
<html>
<head>
	<title>Soal No 2</title>
	<!-- Style untuk pesan error -->
	<style>
		.error {
			color: red;
		}
	</style>
</head>
<body>
	<?php
	// Membuat pesan error
	$nama_error = $nim_error = $jk_error = '';
	$nama = $nim = $jkelamin = '';
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["nama"])) {
			$nama_error = "nama tidak boleh kosong";
		} else {
			$nama = test_input($_POST["nama"]);
		}
		if (empty($_POST["nim"])) {
			$nim_error = "nim tidak boleh kosong";
		} else {
			$nim = test_input($_POST["nim"]);
		}
		if (empty($_POST["jkelamin"])) {
			$jk_error = "jenis kelamin tidak boleh kosong";
		} else {
			$jkelamin = test_input($_POST["jkelamin"]);
		}
	}

	// Function untuk mengembalikan data yang sudah diinput
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	?>

	<!-- Membuat form untuk menginpu data -->
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<!-- Input nama -->
		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama" value="<?php echo $nama;?>">
		<span class="error">* <?php echo $nama_error;?></span><br>
		<!-- Input NIM -->
		<label for="nim">Nim:</label>
		<input type="text" id="nim" name="nim" value="<?php echo $nim;?>">
		<span class="error">* <?php echo $nim_error;?></span><br>
		<!-- Jenis Kelamin -->
		<label for="jkelamin">Jenis Kelamin:</label>
		<span class="error">* <?php echo $jk_error;?></span><br>
		<!-- Input jenis kelamin laki-laki -->
		<input type="radio" id="laki-laki" name="jkelamin" value="Laki-Laki" 
		<?php if ($jkelamin == "Laki-Laki") echo "checked"; ?>>
		<label for="laki-laki">Laki-Laki</label><br>
		<!-- Input jenis kelamin perempuan -->
		<input type="radio" id="perempuan" name="jkelamin" value="Perempuan" 
		<?php if ($jkelamin == "Perempuan") echo "checked"; ?>>
		<label for="perempuan">Perempuan</label><br>
		<!-- Membuat button submit untuk mengirim data -->
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
	// Menampilkan data yang telah diinput user
	if ($nama_error == '' && $nim_error == '' && $jk_error == '') {
		echo "<h2>Output:</h2>";
		echo "$nama <br>";
		echo "$nim <br>";
		echo "$jkelamin";
	}
	?>
</body>
</html>
