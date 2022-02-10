<?php
include 'connection.php';
include 'disperror.php';
$pilihan = $_POST['pilihan'];
date_default_timezone_set('Asia/Jakarta');
$timestamp = date('h:i A d/m/Y' . " WIB");
?>
<?php /*
$nama = $_POST['nama'];
$judul = $_POST['judul'];
$isi = $_POST['link'];
$instvid = "INSERT INTO `FILES`(`judul`,`file_type_id`,`isi`,`created_at`) VALUES ('$judul','$pilihan','$isi','$timestamp')";
$run = mysqli_query($conn, $instvid);
*/?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#format'
        });
    </script>
</head>

<body>
    <form action="" method="post">
        <select name="pilihan" onchange="this.form.submit()">
            <option disabled selected value="">Select an Option</option>
            <option value="Video">Video</option>
            <option value="Artikel">Artikel</option>
        </select>
    </form>
    <br><br>
    <?php
    if ($pilihan == "Video") { ?>`
    <!-- <form action="" method="post">
        <input type="text" name="nama" placeholder="Masukan nama" id=""><br>
        <input type="text" name="judul" placeholder="Masukan judul" id=""><br>
        <input type="url" name="link" placeholder="Masukan URL" id=""><br>
        <!-- <input type="url" name="" id="">
        <input type="submit" value="Submit">
    </form> -->
    <?php include 'inputvid.php'; ?>
<?php } ?>


<?php if ($pilihan == "Artikel") : ?>
    <form action="" method="post">
        <input type="text" name="nama2" id="" placeholder="Masukan nama"><br>
        <input type="text" name="judul2" placeholder="masukan judul" id=""><br>
        <textarea style="width: 360px;" name="isi2" id="format" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    $nama2 = $_POST['nama2'];
    $judul2 = $_POST['judul2'];
    $isi2 = $_POST['isi2'];
    $instart = "INSERT INTO `FILES`(`judul`,`file_type_id`,`isi`,`created_at`) VALUES ('$judul2','$pilihan','$isi2','$timestamp')";
    $run2 = mysqli_query($conn, $instart);
    ?>
<?php endif ?>
</body>

</html>