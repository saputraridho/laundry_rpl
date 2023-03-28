<?php
include "koneksi.php";
$kode_konsumen=$_POST['kode_konsumen'];
$nama_konsumen=$_POST['nama_konsumen'];
$alamat_konsumen=$_POST['alamat_konsumen'];
$telp_konsumen=$_POST['telp_konsumen'];
$query=mysqli_query($koneksi,"update konsumen set nama_konsumen='$nama_konsumen',alamat_konsumen='$alamat_konsumen',telp_konsumen='$telp_konsumen' where kode_konsumen=$kode_konsumen");
header('location:index.php');
?>