<!DOCTYPE html>
<html>
<head>
	<title>PRAKTIKUM 2 NO 3</title>
</head>
<body>
    <!-- Membuat form untuk menginput nilai suhu -->
	<form method="post" action="">
		<label for="suhu">Nilai : </label>
		<input type="number" name="suhu" id="suhu" required><br>
		<label for="suhu_awal">Dari : </label> <br>
            <!-- Membuat opsi suhu awal yang akan dikonversi -->
            <input type = "radio" name = 'suhu_awal' value = "C">Celcius</input><br>
            <input type = "radio" name = 'suhu_awal' value = "F">Fahrenheit</input><br>
            <input type = "radio" name = 'suhu_awal' value = "R">Rheamur</input><br>
            <input type = "radio" name = 'suhu_awal' value = "K">Kelvin</input> <br>
		<label for="suhu_akhir">Ke :</label><br>
            <!-- Membuat opsi suhu akhir -->
            <input type = "radio" name = 'suhu_akhir' value = "C">Celcius</input><br>
            <input type = "radio" name = 'suhu_akhir' value = "F">Fahrenheit</input><br>
            <input type = "radio" name = 'suhu_akhir' value = "R">Rheamur</input><br>
            <input type = "radio" name = 'suhu_akhir' value = "K">Kelvin</input> <br>
        <!-- Membuat button submit untuk mengkonversi suhu -->
        <input type="submit" name="submit" value="Konversi">
	</form>

    <?php
    // Mengambil nilai yang diinput untuk disimpan dalam variabel
	if(isset($_POST['submit'])){
		$suhu = $_POST['suhu'];
		$suhu_awal = $_POST['suhu_awal'];
        $suhu_akhir = $_POST['suhu_akhir'];

        // Pengkondisian jika suhu awalnya adalah celcius
        if ($suhu_awal == "C") {
            if ($suhu_akhir == "F") {
                $suhu = ($suhu * 9/5) + 32;
                echo "<h2>Hasil Konversi: ".$suhu." °F<h2>";
            } elseif ($suhu_akhir == "R") {
                $suhu = ($suhu * 4/5);
                echo "<h2>Hasil Konversi: ".$suhu." °R<h2>";
            } elseif ($suhu_akhir == "K") {
                $suhu = ($suhu + 273);
                echo "<h2>Hasil Konversi: ".$suhu." °K<h2>";
            } else {
                echo "<h2>Hasil Konversi: ".$suhu." °C<h2>";
            }
        }

        // Pengkondisian jika suhu awalnya adalah fahrenheit
        if ($suhu_awal == "F") {
            if ($suhu_akhir == "C") {
                $suhu = 5/9 * ($suhu - 32);
                echo "<h2>Hasil Konversi: ".$suhu." °C<h2>";
            } elseif ($suhu_akhir == "R") {
                $suhu = 4/9 * ($suhu - 32);
                echo "<h2>Hasil Konversi: ".$suhu." °R<h2>";
            } elseif ($suhu_akhir == "K") {
                $suhu = 5/9 * ($suhu - 32) + 273;
                echo "<h2>Hasil Konversi: ".$suhu." °K<h2>";
            } else {
                echo "<h2>Hasil Konversi: ".$suhu." °F<h2>";
            }
        }

        // Pengkondisian jika suhu awalnya adalah Rheamur
        if ($suhu_awal == "R") {
            if ($suhu_akhir == "C") {
                $suhu = (5/4 * $suhu);
                echo "<h2>Hasil Konversi: ".$suhu." °C<h2>";
            } elseif ($suhu_akhir == "F") {
                $suhu = (9/4 * $suhu) + 32;
                echo "<h2>Hasil Konversi: ".$suhu." °F<h2>";
            } elseif ($suhu_akhir == "K") {
                $suhu = (5/4 * $suhu) + 273;
                echo "<h2>Hasil Konversi: ".$suhu." °K<h2>";
            } else {
                echo "<h2>Hasil Konversi: ".$suhu." °R<h2>";
            }
        }

        // Pengkondisian jika suhu awalnya adalah kelvin
        if ($suhu_awal == "K") {
            if ($suhu_akhir == "C") {
                $suhu = ($suhu - 273);
                echo "<h2>Hasil Konversi: ".$suhu." °C<h2>";
            } elseif ($suhu_akhir == "F") {
                $suhu = 9/5 * ($suhu - 273) + 32;
                echo "<h2>Hasil Konversi: ".$suhu." °F<h2>";
            } elseif ($suhu_akhir == "R") {
                $suhu = 4/5 * ($suhu - 273);
                echo "<h2>Hasil Konversi: ".$suhu." °R<h2>";
            } else {
                echo "<h2>Hasil Konversi: ".$suhu." °K<h2>";
            }
        }
    }
    ?>
</body>
</html>
