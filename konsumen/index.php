<?php
include "koneksi.php";
?>

<div class="text-center"><h1>Data Konsumen</h1></div>
<div class="container">
<button type="button" class="btn btn-success mb-2"><a style="color: white; text-decoration: none;" href="?page=konsumen/tambah">Tambah Data</a></button>
    <table class="table table-striped-columns" border="3" cellpadding="6" cellspacing="0">
    <tr align="center" >
            <td>Kode Konsumen</td>
            <td>Nama Konsumen</td>
            <td>Alamat Konsumen</td>
            <td>telp Konsumen</td>
            <td colspan="2">Aksi</td>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "select * from konsumen");
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr align="center">
            <td><?php echo $data['kode_konsumen'] ?></td>
            <td><?php echo $data['nama_konsumen'] ?></td>
            <td><?php echo $data['alamat_konsumen'] ?></td>
            <td><?php echo $data['telp_konsumen'] ?></td>
            <td><button class="btn btn-danger btn-sm"><a style="color: white; text-decoration: none;" href="?page=konsumen/hapus&kode_konsumen=<?php echo $data['kode_konsumen'] ?>">Hapus</a></button></td>
            <td><button class="btn btn-info btn-sm"><a style="color: black; text-decoration: none;" href="?page=konsumen/edit&kode_konsumen=<?php echo $data['kode_konsumen'] ?>">Edit</a></button></td>
            </tr>
        <?php    
        }
        ?>
    </table>
</div>