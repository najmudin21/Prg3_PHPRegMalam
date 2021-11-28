<?php
include("koneksi.php");

if (isset($_POST['save'])) {
    $query_input = mysqli_query($koneksi, "insert into kategori(id_kategori,nama)
values(
'" . $_POST['id_kategori'] . "',
'" . $_POST['nama'] . "')");

    if ($query_input) {
        header('location:view_kategori.php');
    } else {
        echo mysqli_error();
    }
}
?>
<form method="POST">
    <table class="table table-bordered" border="1">
        <tr>
            <td>Id Kategori</td>
            <td><input type="text" name="id_kategori" class="form-control"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" class="form-control"></td>
        </tr>
        <tr>
            <td><input type="submit" name="save" class="btn btn-danger"></td>
            <td><input type="reset" name="reset"></td>
        </tr>
    </table>
</form>