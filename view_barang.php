<?php
include("koneksi.php");
$query_view = mysqli_query($koneksi, "SELECT * FROM barang");

?>
</br>
<a href="input_barang.php" class="btn btn-danger">Tambah barang</a>&nbsp;&nbsp;
<a href="Home.php" class="btn btn-danger">Halaman utama</a>
<br>
<table width="400" border="1">
    <tr>
        <td align="center">No</td>
        <td align="left">Id Barang</td>
        <td align="left">Id kategori</td>
        <td align="left">Nama</td>
        <td colspan="4" align="center">Action</td>
    </tr>

    <div class="text-center">
        <?php
        $no = 1;
        while ($tampil = mysqli_fetch_array($query_view)) { ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $tampil['id_barang']; ?></td>
                <td><?php echo $tampil['id_kategori']; ?></td>
                <td><?php echo $tampil['nama']; ?></td>
                <td align="center"><a href="edit_barang.php?id_barang= <?php echo $tampil['id_barang']; ?>">Edit</a></td>
                <td align="center"><a href="hapus_barang.php?id_barang= <?php echo $tampil['id_barang']; ?>" onclick="return confirm('apakah data ini mau dihapus?')">Hapus</a></td>

            </tr>
        <?php } ?>
    </div>
</table>