<?php
require("koneksi.php");

function tampilbuku()
{
    $stmt = koneksi()->prepare("SELECT * FROM buku");
    $stmt->execute();
    $result = $stmt -> fetchAll();
    if(!empty($result)){
        foreach ($result as $buku) {
            echo "<tr>";
            echo "<td>". $buku['id_buku']."</td>";
            echo "<td>". $buku['judul_buku']."</td>";
            echo "<td>". $buku['penulis']."</td>";
            echo "<td>". $buku['penerbit']."</td>";
            echo "<td>". $buku['tahun_terbit']."</td>";
            echo "<td>"."<a href = 'formbuku.php?id_buku=".$buku['id_buku']."'>Edit Buku  </a><br>";
            echo "<a href='Buku.php?id_buku=" . $buku['id_buku'] . "' onclick=\"return confirm('lanjut delete ?')\">Hapus Buku </a> </td>";
            echo "</tr>";
        }
    }
}

function tambahBuku($id,$judul,$penulis,$penerbit,$tahun)
{
    $sql = "INSERT INTO buku(id_buku,judul_buku,penulis,penerbit,tahun_terbit)values(:id_b,:judul_b,:penulis,:penerbit,:tahun)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':id_b' => $id, 'judul_b'=>$judul,':penulis'=>$penulis,':penerbit'=>$penerbit,':tahun'=>$tahun));
    if (!empty($result)) {
        header('location:Buku.php');
    }
}
function editbuku(){
    $stmt = koneksi()->prepare("SELECT * FROM buku WHERE id_buku =".$_GET['id_buku']);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}
function updatebuku($id,$judul,$penulis,$penerbit,$tahun)
{
    $pdo_statement = koneksi()->prepare(
        "update buku set judul_buku='" . $judul . "', penulis='" . $penulis . "', penerbit='" . $penerbit . "', tahun_terbit='" . $tahun . "' where id_buku=" . $id
    );
    $result = $pdo_statement->execute();
    if($result){
        header('location:Buku.php');
    }
}
function hapusbuku($id_buku){
    $stmt = koneksi()->prepare("DELETE FROM buku where id_buku=" . $id_buku);
    $result = $stmt->execute();
    if ($result) {
        header('location:Buku.php');
    }
}
function tampilmember()
{
    $stmt = koneksi()->prepare("SELECT * FROM member");
    $stmt->execute();
    $result = $stmt -> fetchAll();
    if(!empty($result)){
        foreach ($result as $member) {
            echo "<tr>";
            echo "<td>". $member['id_member']."</td>";
            echo "<td>". $member['nama_member']."</td>";
            echo "<td>". $member['nomor_member']."</td>";
            echo "<td>". $member['alamat']."</td>";
            echo "<td>". $member['tgl_mendaftar']."</td>";
            echo "<td>". $member['tgl_terakhir_bayar']."</td>";
            echo "<td>"."<a href = 'formmember.php?id_member=".$member['id_member']."'>Edit Member </a><br>";
            echo "<a href='Member.php?id_member=" . $member['id_member'] . "' onclick=\"return confirm('lanjut delete ?')\">Hapus Member </a> </td>";
            echo "</tr>";
        }
    }
}

function tambahmember($id,$nama,$nomor,$alamat,$tgldaftar,$tglbayar)
{
    $sql = "INSERT INTO member(id_member,nama_member,nomor_member,alamat,tgl_mendaftar,tgl_terakhir_bayar)values(:id_m,:nama_m,:no_m,:alamat,:tgl_daf,:tgl_bay)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':id_m' => $id, 'nama_m'=>$nama,':no_m'=>$nomor,':alamat'=>$alamat,':tgl_daf'=>$tgldaftar,':tgl_bay'=>$tglbayar));
    if (!empty($result)) {
        header('location:Member.php');
    }
}
function editmember(){
    $stmt = koneksi()->prepare("SELECT * FROM member WHERE id_member =".$_GET['id_member']);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}
function updatemember($id,$nama,$no,$alamat,$tgldaftar,$tglbayar)
{
    $pdo_statement = koneksi()->prepare(
        "update member set nama_member='" . $nama . "', nomor_member ='" . $no . "', alamat='" . $alamat . "', tgl_mendaftar='" . $tgldaftar . "', tgl_terakhir_bayar='".$tglbayar."' where id_member=" . $id
    );
    $result = $pdo_statement->execute();
    if($result){
        header('location:Member.php');
    }
}
function hapusmember($id_member){
    $stmt = koneksi()->prepare("DELETE FROM member WHERE id_member=".$id_member);
    $result= $stmt->execute();
    if($result){
        header('location:Member.php');
    }
}
function tampilpeminjaman()
{
    $stmt = koneksi()->prepare("SELECT * FROM peminjaman");
    $stmt->execute();
    $result = $stmt->fetchAll();
    if (!empty($result)) {
        foreach ($result as $peminjaman) {
            echo "<tr>";
            echo "<td>". $peminjaman['id_peminjaman']."</td>";
            echo "<td>". $peminjaman['id_member']."</td>";
            echo "<td>". $peminjaman['id_buku']."</td>";
            echo "<td>". $peminjaman['tgl_peminjaman']."</td>";
            echo "<td>". $peminjaman['tgl_kembali']."</td>";
            echo "<td>";
            echo "<a href='editpeminjaman.php?id_peminjaman=".$peminjaman['id_peminjaman']."'>Edit</a><br>";
            echo "<a href='hapuspeminjaman.php?id_peminjaman=".$peminjaman['id_peminjaman']."' onclick=\"return confirm('Are you sure you want to delete this data?')\">Delete</a>";
            echo "</td>";
            echo "</tr>";
        }
    }
}


function tambahpeminjaman($id, $id_buku, $id_member, $tglpinjam, $tglbalik){
    $sql = "INSERT INTO peminjaman (id_peminjaman, id_buku, id_member, tgl_peminjaman, tgl_kembali) VALUES (:id_p, :id_buku, :id_member, :tgl_pinjam, :tgl_balik)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':id_p' => $id, ':id_buku' => $id_buku, ':id_member' => $id_member, ':tgl_pinjam' => $tglpinjam, ':tgl_balik' => $tglbalik));
    if (!empty($result)) {
        header('location:Peminjaman.php');
    }
}

function editpeminjaman()
{
    $stmt = koneksi()->prepare("SELECT * FROM peminjaman WHERE id_peminjaman =" . $_GET['id_peminjaman']);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}

function updatepeminjaman($id, $id_buku, $id_member, $tglpinjam, $tglbalik)
{
    $pdo_statement = koneksi()->prepare(
        "UPDATE peminjaman SET id_buku ='" . $id_buku . "', id_member ='" . $id_member . "', tgl_peminjaman ='" . $tglpinjam . "', tgl_kembali ='" . $tglbalik . "' WHERE id_peminjaman =" . $id
    );
    $result = $pdo_statement->execute();
    if ($result) {
        header('location:Peminjaman.php');
    }
}


function hapuspeminjaman($id_peminjaman){
    $stmt = koneksi()->prepare("DELETE FROM peminjaman WHERE id_peminjaman=".$id_peminjaman);
    $result= $stmt->execute();
    if($result){
        header('location:Peminjaman.php');
    }
}
?>