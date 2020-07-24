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
    <div id="paper">
        <div id="line">
            <div id="content">
                <p>Test</p>
                <form action="index.php" method="POST">
                    <textarea name="pesan" id="pesan" placeholder="tuliskan pesanmu disini"></textarea>
                    <label for="pengirim">from: </label>
                    <input type="text" name="nama" id="nama" placeholder="nama pengirim"><br>
                    <input type="hidden" name="tanggal" value="<?php echo date('d-m-Y H:i:s'); ?>">
                    <button type="submit" name="newMessage">Send</button>
                    <!-- <input type="submit" name="newMessage" value="new"> -->
                </form>
            </div>
        </div>
    </div>
</body>

</html>