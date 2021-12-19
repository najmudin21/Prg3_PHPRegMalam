<br>
<?php
include("koneksi.php");
$query_view = mysqli_query($koneksi, "SELECT * FROM anggota");

?>
</br>
<a href="input_anggota.php" class="btn btn-danger">Tambah anggota</a>&nbsp;&nbsp;
<a href="Home.php" class="btn btn-danger">Halaman utama</a>
<br>
<table width="400" border="1">
    <tr>
        <td align="center">Nama</td>
        <td align="left">Anggota</td>
        <td align="left">No.telpon</td>
        <td colspan="4" align="center">Action</td>
    </tr>

    <?php
    $no = 1;
    while ($tampil = mysqli_fetch_array($query_view)) { ?>
        <tr>
            <td><?php echo $tampil['nama']; ?></td>
            <td><?php echo $tampil['alamat']; ?></td>
            <td><?php echo $tampil['no_telp']; ?></td>
            <td align="center"><a href="edit_anggota.php?id_anggota= <?php echo $tampil['id_anggota']; ?>">Edit</a></td>
            <td align="center"><a href="hapus_anggota.php?id_anggota= <?php echo $tampil['id_anggota']; ?>" onclick="return confirm('apakah data ini mau dihapus?')">Hapus</a></td>
        </tr>
    <?php } ?>
</table>
<a href="logout.php">Logout</a>