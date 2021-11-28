<?php
include("koneksi.php");
$query_view = mysqli_query($koneksi, "SELECT * FROM kategori");
?>
<br>
<a href="input_kategori.php" class="btn btn-danger">Input Kategori</a>&nbsp;&nbsp;
<a href="Home.php" class="btn btn-danger">Halaman utama</a>
<br>
<table width="300" border="1">
    <tr>
        <td align="center">No.</td>
        <td align="center">Id Kategori</td>
        <td align="center">Nama</td>
        <td colspan="4" align="center">Action</td>
    </tr>

    <?php
    $no = 1;
    while ($tampil = mysqli_fetch_array($query_view)) { ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $tampil['id_kategori']; ?></td>
            <td><?php echo $tampil['nama']; ?></td>
            <td><a href="edit_kategori.php?id_kategori=<?php echo $tampil['id_kategori']; ?>">Edit</a></td>
            <td><a href="hapus_kategori.php?id_kategori=<?php echo $tampil['id_kategori']; ?>">Hapus</a></td>
        </tr>
    <?php } ?>
</table>