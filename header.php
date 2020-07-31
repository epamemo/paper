<?php
include 'config.php';
date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['newMessage'])) {
    $nama = $_POST['nama'];
    $pesan = $_POST['pesan'];
    $tanggal = $_POST['tanggal'];
    mysqli_query($mysqli, "INSERT INTO pesan VALUES('', '$nama', '$pesan', '$tanggal')");

    header("location:thanks.html");
}

$batas = 1;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;
$data = mysqli_query($mysqli, "select * from pesan");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$pesan = mysqli_query($mysqli, "select * from pesan limit $halaman_awal, $batas");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Paper</title>
</head>

<body>
<div class="book">
    <a id="prev_page_button" <?php if ($halaman > 1) {echo "href='?halaman=$previous'";}?>>Previous</a>
    <a id="next_page_button" <?php if ($halaman < $total_halaman) {echo "href='?halaman=$next'";} ?>>Next</a>
</div>
    <div id="paper">
        <div id="line">
            <div id="content">