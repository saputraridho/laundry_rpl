<?php
include "koneksi.php";
$id_jenislaundry=$_GET['id_jenislaundry'];
$query=mysqli_query($koneksi,"select * from jenis_laundry where id_jenislaundry='$id_jenislaundry'");
$data=mysqli_fetch_array($query);
?>

<h1>Edit Data</h1>
<form action="update.php" METHOD="POST">
    <label>id jenis laundry</label>
    <input type="text" name="id_jenislaundry" value="<?php echo $data['id_jenislaundry'] ?>">
    <br>
    <label>nama jenis laundry</label>
    <input type="text" name="nama_jenislaundry" value="<?php echo $data['nama_jenislaundry'] ?>">
    <br>
    <label>tarif</label>
    <input type="text" name="tarif" value="<?php echo $data['tarif'] ?>">
    <br>
    <button>Simpan</button>
</form>