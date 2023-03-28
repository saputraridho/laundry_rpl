<?php
include "koneksi.php";
$kode_konsumen = $_GET['kode_konsumen'];
$query = mysqli_query($koneksi, "delete from konsumen where kode_konsumen='$kode_konsumen'");
header('location:index.php');