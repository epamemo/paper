<?php
include 'header.php';
?>
<p>Template teks sambutan,</p>
<?php


while ($p = mysqli_fetch_array($pesan)) {
?>
    <p id="pesan"><?php echo $p['pesan']; ?></p>
    <p class="right-align">Dari : <?php echo $p['nama']; ?></p>
<?php
}
?>

<?php
include 'footer.php';
?>