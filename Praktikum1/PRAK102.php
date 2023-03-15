<!-- HTML -->
<!DOCTYPE html>
<html>
    <head>      
         <title>PRAKTIKUM 1 NO 2</title>
    </head>
    <body> 
        <!-- PHP --> 
        <?php
            // Deklrasi variabel 
            // NIM : 2110817120011
            $akhirNIM = 1;
            $Jari = 4.2;
            $Tinggi = 5.4;
            $Panjang = 8.9;
            $Lebar = 14.7;
            $Sisi = 7.9;
            $AlasPrisma = 6;
            $TinggiPrisma = 7;
            $TinggiLimas = 10;
            $phi = 3.14;

            // Deklrasi variabel yang diisi dengan rumus volume bangun ruang
            $volumeTabung = $phi * $Jari * $Jari * $Tinggi;
            $volumeKerucut = 1/3 * $phi * $Jari * $Jari * $Tinggi;
            $volumeBola = 4/3 * $phi * $Jari * $Jari * $Jari;
            $volumePrismaSegitiga = (1/2 * $AlasPrisma * $Tinggi) * $TinggiPrisma;
            $volumeLimasPersegiPanjang = 1/3 * $Panjang * $Lebar * $TinggiLimas;
   
            // mencetak nilai volume bangun ruang menggunakan pengkondisian switch statement
            switch($akhirNIM) {
                case($akhirNIM == 0 || $akhirNIM == 1):
                    echo number_format($volumeTabung,3). " m3";
                    break;
                case($akhirNIM == 2 || $akhirNIM == 3):
                    echo number_format($volumeKerucut,3). " m3";
                    break; 
                case($akhirNIM == 4 || $akhirNIM == 5):
                    echo number_format($volumeBola,3). " m3";
                    break; 
                case($akhirNIM == 6 || $akhirNIM == 7):
                    echo number_format($volumePrismaSegitiga,3). " m3";
                    break;  
                case($akhirNIM == 8 || $akhirNIM == 9):
                    echo number_format($volumeLimasPersegiPanjang,3). " m3";
                    break;
                default:
                    echo "Tidak Ditemukan Nilai";
            } 
        ?>
    </body>
</html>