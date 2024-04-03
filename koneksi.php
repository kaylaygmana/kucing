<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'daftaanggota';

$koneksi = mysqli_connect($servername, $username, $password, $database);

if (!$koneksi){
    die('koneksi gagal'. mysqli_connect_error());
}

// echo 'Koneksi berhasil';