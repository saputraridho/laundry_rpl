<?php
include "koneksi.php";
$kode_konsumen=$_POST ['kode_konsumen'];
$nama_konsumen=$_POST ['nama_konsumen'];
$alamat_konsumen=$_POST ['alamat_konsumen'];
$telp_konsumen=$_POST ['telp_konsumen'];
$query= mysqli_query($koneksi,"insert into konsumen(kode_konsumen,nama_konsumen,alamat_konsumen,telp_konsumen) values('$kode_konsumen','$nama_konsumen','$alamat_konsumen','$telp_konsumen')");
header('location:index.php')
?>