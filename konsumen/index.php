<?php
include "koneksi.php";
?>

<h1>Data Konsumen</h1>
<button type="button"><a style="color: black; text-decoration: none;" href="tambah.php">Tambah Data</a></button>
<table border="3" cellpadding="6" cellspacing="0">
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
        <td><a href="hapus.php?kode_konsumen=<?php echo $data['kode_konsumen'] ?>">Hapus</a></td>
        <td><a href="edit.php?kode_konsumen=<?php echo $data['kode_konsumen'] ?>">Edit</a>  </td>
        </tr>
    <?php    
    }
    ?>
</table>