<?php
include "koneksi.php";
?>

<div class="text-center"><h1>Data Jenis Laundry</h1></div>
<div class="container">
<button type="button" class="btn btn-success mb-2"><a style="color: white; text-decoration: none;" href="?page=jenis_laundry/tambah">Tambah Data</a></button>
    <table class="table table-striped-columns" border="3" cellpadding="6" cellspacing="0">
    <tr align="center" >
            <td>Id Jenis Laundry</td>
            <td>Nama Jenis Laundry</td>
            <td>Tarif</td>
            <td colspan="2">Aksi</td>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "select * from jenis_laundry");
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr align="center">
            <td><?php echo $data['id_jenislaundry'] ?></td>
            <td><?php echo $data['nama_jenislaundry'] ?></td>
            <td><?php echo $data['tarif'] ?></td>
            <td><button class="btn btn-danger btn-sm"><a style="color: white; text-decoration: none;" href="?page=jenis_laundry/hapus&id_jenislaundry=<?php echo $data['id_jenislaundry'] ?>">Hapus</a></button></td>
            <td><button class="btn btn-info btn-sm"><a style="color: black; text-decoration: none;" href="?page=jenis_laundry/edit&id_jenislaundry=<?php echo $data['id_jenislaundry'] ?>">Edit</a></button></td>
            </tr>
        <?php    
        }
        ?>
    </table>
</div>