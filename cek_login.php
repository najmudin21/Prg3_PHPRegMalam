<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from tb_login where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['level'] == "admin") {

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:home.php?pesan=success");

        // cek jika user login sebagai pegawai
    } else if ($data['level'] == "karyawan") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "karyawan";
        // alihkan ke halaman dashboard karyawan
        header("location:home.php?pesan=success");

        // cek jika user login sebagai pengurus
    } else if ($data['level'] == "atasan") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "atasan";
        // alihkan ke halaman dashboard atasan
        header("location:home.php?pesan=success");
    } else {

        // alihkan ke halaman login kembali
        header("location:index.php?pesan=gagal");
    }
} else {
    header("location:index.php?pesan=gagal");
}
