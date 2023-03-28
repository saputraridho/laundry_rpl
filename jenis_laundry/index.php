<?php
include "koneksi.php";
?>

<h1>Data Jenis Laundry</h1>
<button type="button"><a style="color: black; text-decoration: none;" href="tambah.php">Tambah Data</a></button>
<table border="3" cellpadding="6" cellspacing="0">
<tr align="center" >
        <td>id jenis laundry</td>
        <td>nama jenis laundry</td>
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
        <td><a href="hapus.php?id_jenislaundry=<?php echo $data['id_jenislaundry'] ?>">Hapus</a></td>
        <td><a href="edit.php?id_jenislaundry=<?php echo $data['id_jenislaundry'] ?>">Edit</a>  </td>
        </tr>
    <?php    
    }
    ?>
</table>