<?php

$_HOST = 'localhost';
$_USERNAME = 'root';
$_PASSWORD = '';
$_DATABASE = 'portofolio';

$koneksi = mysqli_connect($_HOST, $_USERNAME, $_PASSWORD, $_DATABASE);

if (!$koneksi) {
    echo " Koneksi gagal";
}
