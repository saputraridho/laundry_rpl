<?php
include "koneksi.php";
$nik=$_POST ['nik'];
$nama_karyawan=$_POST ['nama_karyawan'];
$alamat_karyawan=$_POST ['alamat_karyawan'];
$telp_karyawan=$_POST ['telp_karyawan'];
$gender_karyawan=$_POST ['gender_karyawan'];
$username=$_POST ['username'];
$password=$_POST ['password'];
$query= mysqli_query($koneksi,"insert into karyawan(nik,nama_karyawan,alamat_karyawan,telp_karyawan,gender_karyawan,username,password) values('$nik','$nama_karyawan','$alamat_karyawan','$telp_karyawan','$gender_karyawan','$username','$password')");
header('location:login.php')
?>