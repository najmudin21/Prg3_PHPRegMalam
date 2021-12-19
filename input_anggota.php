<?php
include("koneksi.php");

if (isset($_POST['save'])) {
    $query_input = mysqli_query($koneksi, "insert into anggota(nama,alamat,no_telp)
values(
'" . $_POST['nama'] . "',
'" . $_POST['alamat'] . "',
'" . $_POST['no_telp'] . "')");

    if ($query_input) {
        header('location:view_anggota.php');
    } else {
        echo mysqli_error($koneksi);
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BERAG</title>
    <script src="dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="dist/sweetalert2.min.css">
</head>

<body>
    <form method="POST">
        <table class="table table-bordered" border="1">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" class="form-control"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" class="form-control"></td>
            </tr>
            <tr>
                <td>No Tlpn</td>
                <td><input type="number" name="no_telp" class="form-control"></td>
            </tr>
            <tr>
                <td><input type="submit" onclick="succes()" name="save" class="btn btn-danger"></td>
            </tr>
        </table>
    </form>


    <button class="btn btn-danger">Sweet Alert Warning succes</button><br>
    <script type="text/javascript">
        function succes() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
            })
        }
    </script>
    <script src="script.js"></script>

</body>

</html>