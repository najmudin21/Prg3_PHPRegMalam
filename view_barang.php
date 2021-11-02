<?php
include("koneksi.php");
$query_view = mysqli_query($koneksi, "SELECT * FROM barang");

?>

<table width="400" border="1">
    <tr>
        <td align="center">No</td>
        <td align="left">Id Barang</td>
        <td align="left">Id Kategori</td>
        <td align="left">Nama</td>
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
            </tr>
        <?php } ?>
    </div>
</table>