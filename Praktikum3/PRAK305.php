<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAKTIKUM 3 SOAL 5</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="teks" required>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    // jika tombol submit ditekan, jalankan kode di bawahnya
    if (isset($_POST['submit'])) {
        // ambil input teks dari form
        $teks = $_POST['teks'];
        // hitung panjang string input
        $panjang = strlen($teks);
        // pisahkan setiap karakter pada string input ke dalam array yang terpisah
        $input = str_split($teks);
        // inisialisasi variabel untuk indeks karakter dan jumlah karakter yang telah dicetak
        $j = 0;
        $k = 0;
        // tampilkan input dari pengguna
        echo "<h2> Input: </h2> $teks <br> <h2> Output: </h2>";
        // cetak setiap karakter pada string dengan aturan yang telah dijelaskan
        while ($k < $panjang) {
            echo strtoupper($input[$j]); // cetak karakter pertama kapital
            for ($i = 1; $i < $panjang; $i++) {
                echo strtolower($input[$j]); // cetak karakter lainnya tidak kapital
            }
            $k++; // tambahkan jumlah karakter yang telah dicetak
            $j++; // pindah ke karakter berikutnya pada array input
        }
    }
    ?>
</body>
</html>
