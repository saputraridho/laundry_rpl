<?php
include "koneksi.php";
$id_jenislaundry=$_POST['id_jenislaundry'];
$nama_jenislaundry=$_POST['nama_jenislaundry'];
$tarif=$_POST['tarif'];
$query=mysqli_query($koneksi,"update jenis_laundry set nama_jenislaundry='$nama_jenislaundry',tarif='$tarif' where id_jenislaundry=$id_jenislaundry");
header('location:index.php');
?>