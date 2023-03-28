<?php
include "koneksi.php";
$kode_konsumen=$_GET['kode_konsumen'];
$query=mysqli_query($koneksi,"select * from konsumen where kode_konsumen='$kode_konsumen'");
$data=mysqli_fetch_array($query);
?>

<h1>Edit Data</h1>
<form action="update.php" METHOD="POST">
    <label>Kode Konsumen</label>
    <input type="text" name="kode_konsumen" value="<?php echo $data['kode_konsumen'] ?>">
    <br>
    <label>Nama Konsumen</label>
    <input type="text" name="nama_konsumen" value="<?php echo $data['nama_konsumen'] ?>">
    <br>
    <label>Alamat Konsumen</label>
    <input type="text" name="alamat_konsumen" value="<?php echo $data['alamat_konsumen'] ?>">
    <br>
    <label>Telp Konsumen</label>
    <input type="text" name="telp_konsumen" value="<?php echo $data['telp_konsumen'] ?>">
    <br>
    <button>Simpan</button>
</form>