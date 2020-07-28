<?php
include 'header.php';
?>
<p>Test</p>
<form class="right-align" action="" method="POST">
    <textarea name="pesan" id="pesan" placeholder="tuliskan pesanmu disini"></textarea>
    <label for="pengirim">from: </label>
    <input type="text" name="nama" id="nama" placeholder="nama pengirim"><br>
    <input type="hidden" name="tanggal" value="<?php echo date('d-m-Y H:i:s'); ?>">
    <button type="submit" name="newMessage">Send</button>
    <!-- <input type="submit" name="newMessage" value="new"> -->
</form>

<?php
include 'footer.php';
?>