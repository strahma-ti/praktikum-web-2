<!DOCTYPE html>
<html>
<head>
	<title>Sorting Names</title>
</head>
<body>
	<form method="post" action="">
		Nama: 1 <input type="text" name="nama1"><br>
		Nama: 2 <input type="text" name="nama2"><br>
		Nama: 3 <input type="text" name="nama3"><br>
		<input type="submit" name="submit" value="Urutkan">
	</form>

	<?php
	if(isset($_POST['submit'])){
		$nama1 = isset($_POST['nama1']) ? trim($_POST['nama1']) : '';
		$nama2 = isset($_POST['nama2']) ? trim($_POST['nama2']) : '';
		$nama3 = isset($_POST['nama3']) ? trim($_POST['nama3']) : '';
		$urutan = array();
		
		if(!empty($nama1)) {
			array_push($urutan, $nama1);
		}
		if(!empty($nama2)) {
			array_push($urutan, $nama2);
		}
		if(!empty($nama3)) {
			array_push($urutan, $nama3);
		}
		
		// Mengurutkan array berdasarkan abjad dengan fungsi sort()
		sort($urutan);
		
		// Menampilkan urutan nama ke layar
		foreach($urutan as $nama) {
			echo $nama."<br>";
    	}
	}
	?>	
</body>
</html>