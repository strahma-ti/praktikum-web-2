<?php
// array data mahasiswa
$data_mahasiswa = array(
  array("nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65),
  array("nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79),
  array("nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41),
  array("nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75),
);

// hitung nilai akhir dan konversi ke huruf
foreach($data_mahasiswa as $key => $mahasiswa) {
  $nilai_akhir = 0.4 * $mahasiswa['uts'] + 0.6 * $mahasiswa['uas'];
  $data_mahasiswa[$key]['nilai_akhir'] = $nilai_akhir;

  // pengkondisian konversi nilai ke huruf
  if($nilai_akhir >= 80) {
    $data_mahasiswa[$key]['nilai_huruf'] = 'A';
  } else if($nilai_akhir >= 70) {
    $data_mahasiswa[$key]['nilai_huruf'] = 'B';
  } else if($nilai_akhir >= 60) {
    $data_mahasiswa[$key]['nilai_huruf'] = 'C';
  } else if($nilai_akhir >= 50) {
    $data_mahasiswa[$key]['nilai_huruf'] = 'D';
  } else {
    $data_mahasiswa[$key]['nilai_huruf'] = 'E';
  }
}

// tampilkan data dalam tabel
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo 
    "<tr>
        <th style='background-color: #D0CECE;'>Nama</th>
        <th style='background-color: #D0CECE;'>NIM</th>
        <th style='background-color: #D0CECE;'>Nilai UTS</th>
        <th style='background-color: #D0CECE;'>Nilai UAS</th>
        <th style='background-color: #D0CECE;'>Nilai Akhir</th>
        <th style='background-color: #D0CECE;'>Huruf</th>
    </tr>";
// perulangan untuk menampilkan data mahasiswa
foreach($data_mahasiswa as $mahasiswa) {
  echo "<tr>";
  echo "<td>" . $mahasiswa['nama'] . "</td>";
  echo "<td>" . $mahasiswa['nim'] . "</td>";
  echo "<td>" . $mahasiswa['uts'] . "</td>";
  echo "<td>" . $mahasiswa['uas'] . "</td>";
  echo "<td>" . $mahasiswa['nilai_akhir'] . "</td>";
  echo "<td>" . $mahasiswa['nilai_huruf'] . "</td>";
  echo "</tr>";
}
echo "</table>";
?>
