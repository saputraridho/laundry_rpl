<?php
session_start();
if($_SESSION['status'] <> "sukses"){
    header('location:logout.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAUNDRY RPL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg" style="background-color: #09D2FA;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: white; text-decoration: none;">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=sekolah_putra" style="color: white; text-decoration: none;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=jenis_laundry/index" style="color: white; text-decoration: none;">jenis_laundry</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=konsumen/index" style="color: white; text-decoration: none;">Konsumen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=transaksi/index" style="color: white; text-decoration: none;">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="color: white; text-decoration: none;">Logout</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
    <?php include"isi.php" ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>