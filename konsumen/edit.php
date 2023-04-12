<?php
include "koneksi.php";
$kode_konsumen=$_GET['kode_konsumen'];
$query=mysqli_query($koneksi,"select * from konsumen where kode_konsumen='$kode_konsumen'");
$data=mysqli_fetch_array($query);
?>

<div class="mt-2 text-center">
    <h1>Edit Data</h1>
</div>
<form action="?page=konsumen/update"method="POST">
<div class="mb-2">
    <label class="form-label">Kode Konsumen</label>
    <input type="text" class="form-control" name="kode_konsumen">
  </div>
  <div class="mb-2">
    <label class="form-label">Nama Konsumen</label>
    <input type="text" class="form-control" name="nama_konsumen">
  </div>
  <div class="mb-2">
    <label class="form-label">Alamat Konsumen</label>
    <input type="text" class="form-control" name="alamat_konsumen">
  </div>
  <div class="mb-2">
    <label class="form-label">Telp Konsumen</label>
    <input type="text" class="form-control" name="telp_konsumen">
  </div>
    <div class="modal-footer text-center">
    <button class="btn btn-primary">Simpan</button>
    </div>
</form>