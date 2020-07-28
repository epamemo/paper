<?php
include 'header.php';
?>
<p>Template teks sambutan,</p>
<?php

$batas = 1;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;
$data = mysqli_query($mysqli, "select * from pesan");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$pesan = mysqli_query($mysqli, "select * from pesan limit $halaman_awal, $batas");

while ($p = mysqli_fetch_array($pesan)) {
?>
    <p id="pesan"><?php echo $p['pesan']; ?></p>
    <p class="right-align">Dari : <?php echo $p['nama']; ?></p>
<?php
}
?>
<nav>
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" <?php if ($halaman > 1) {
                                        echo "href='?halaman=$previous'";
                                    } ?>>Previous</a>
        </li>
        <li class="page-item">
            <a class="page-link" <?php if ($halaman < $total_halaman) {
                                        echo "href='?halaman=$next'";
                                    } ?>>Next</a>
        </li>
    </ul>
</nav>
<?php
include 'footer.php';
?>