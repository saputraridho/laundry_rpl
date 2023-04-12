<?php
include "koneksi.php";
$id_jenislaundry=$_GET['id_jenislaundry'];
$query=mysqli_query($koneksi,"select * from jenis_laundry where id_jenislaundry='$id_jenislaundry'");
$data=mysqli_fetch_array($query);
?>

<div class="mt-2 text-center">
    <h1>Edit Data</h1>
</div>
<form action="?page=jenis_laundry/update"method="POST">
<div class="mb-2">
    <label class="form-label">Id Jenis Laundry</label>
    <input type="text" class="form-control" name="id_jenislaundry">
  </div>
  <div class="mb-2">
    <label class="form-label">Nama Jenis Laundry</label>
    <input type="text" class="form-control" name="nama_jenislaundry">
  </div>
  <div class="mb-2">
    <label class="form-label">Tarif</label>
    <input type="text" class="form-control" name="tarif">
  </div>
    <div class="modal-footer text-center">
    <button class="btn btn-primary">Simpan</button>
    </div>
</form>