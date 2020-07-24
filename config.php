<?php
$host = 'localhost';
$db = 'paper';
$username = 'root';
$password = '';

$mysqli = mysqli_connect($host, $username, $password, $db);
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
