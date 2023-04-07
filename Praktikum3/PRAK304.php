<?php
// Inisialisasi variabel 
$star = isset($_POST['star']) ? $_POST['star'] : 0;
$imageSrc = "star-img.png";

// Jika tombol tambah ditekan. nilai variabel star bertambah
if (isset($_POST['add'])) {
    $star++;
}

// Jika tombol kurang ditekan. nilai variabel star bertambah
if (isset($_POST['subtract'])) {
    $star--;
}
?>

<p>Jumlah bintang : <?php echo $star; ?></p>

<?php 
    // loop untuk menampilkan gambar bintang
    for($i=0; $i<$star; $i++) { ?>
    <img src="<?php echo $imageSrc; ?>" width="75px" height="75px">
<?php } ?>

<?php if ($star == 0) : ?>
    <!-- form untuk menginput jumlah bintang -->
    <form action=" " method="POST">
        Jumlah bintang <input type="number" name="star" required><br>
        <button type="submit">Submit</button><br>
    </form>
<?php endif; ?>

<?php if ($star != 0) : ?>
    <!-- form untuk tombol tambah dan kurang -->
    <form action="" method="POST">
        <button name="add">Tambah</button>
        <input type="hidden" name="star" value="<?= $star; ?>"/>
        <button name="subtract">Kurang</button>
    </form>
<?php endif; ?>
