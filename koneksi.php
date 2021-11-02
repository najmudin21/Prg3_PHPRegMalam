<?php

$server = "localhost";
$user = "root";
$database = "phpregpagi";
$password = "";


$koneksi = mysqli_connect($server, $user, $password, $database);


if ($koneksi) {
    echo "/*ini fungsi koneksi PHP 8*/ Koneksi Sukses";
} else {
    echo "Koneksi gagal";
}
