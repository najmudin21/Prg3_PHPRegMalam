<!DOCTYPE html>
<html>

<head>
    <title>Halaman Home</title>
</head>

<body>
    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] == "") {
        header("location:index.php?pesan=gagal");
    }

    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "success") {
            echo "<script>alert('Login berhasil!')</script>";
        }
    }
    ?>
    <h1>Halaman Home</h1>

    <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>

    <ul>
        <a href="view_anggota.php">
            <li>Daftar Anggota</li>
        </a>
        <a href="view_barang.php">
            <li>Daftar Barang</li>

        </a> <a href="view_kategori.php">
            <li>Daftar Kategori</li>
        </a>
    </ul>

    <br>
    <br>
    <a href="logout.php" onclick="return confirm('yakin mau keluar!')">LOGOUT</a>
    <br />

</body>

</html>