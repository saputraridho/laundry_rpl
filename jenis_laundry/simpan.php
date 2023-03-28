<?php
include "koneksi.php";
$id_jenislaundry=$_POST ['id_jenislaundry'];
$nama_jenislaundry=$_POST ['nama_jenislaundry'];
$tarif=$_POST ['tarif'];
$query= mysqli_query($koneksi,"insert into jenis_laundry(id_jenislaundry,nama_jenislaundry,tarif) values('$id_jenislaundry','$nama_jenislaundry','$tarif')");
header('location:index.php')
?>