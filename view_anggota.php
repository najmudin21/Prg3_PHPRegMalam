<br>
<?php
include("koneksi.php");
$query_view = mysqli_query($koneksi, "SELECT * FROM anggota");

?>
<table width="400" border="1">
    <tr>
        <td align="center">Nama</td>
        <td align="left">Anggota</td>
        <td align="left">No.telpon</td>
    </tr>

    <?php
    $no = 1;
    while ($tampil = mysqli_fetch_array($query_view)) { ?>
        <tr>
            <td><?php echo $tampil['nama']; ?></td>
            <td><?php echo $tampil['alamat']; ?></td>
            <td><?php echo $tampil['no_telp']; ?></td>
        </tr>
    <?php } ?>
</table>
<br><br>
<a href="logout.php">Logout</a>