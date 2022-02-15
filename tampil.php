<?php
include 'connection.php';
$sql = "SELECT * FROM `FILES` WHERE file_type_id='Video'";
$sql2 = "SELECT * FROM `FILES` WHERE file_type_id='Artikel'";
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <div>
        <table border="1">
            <tr>
                <td style="text-align: center; height:80px" colspan="6">
                    <h1>Video</h1>
                </td>
            </tr>
            <tr style="text-align: center;">
                <td>id</td>
                <td>judul</td>
                <td>type</td>
                <td>isi</td>
                <td>create time</td>
                <td>update at</td>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) :
                $id = $row['id'];
                $judul = $row['judul'];
                $type = $row['file_type_id'];
                $isi = $row['isi'];
                $create = $row['created_at'];
                $update = $row['update_at'];
            ?>
                <tr>
                    <td><?= $id; ?></td>
                    <td><?= $judul; ?></td>
                    <td><?= $type; ?></td>
                    <td><iframe width="640" height="360" src="<?= $isi; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    <td><?= $create; ?></td>
                    <td><?= $update; ?></td>
                </tr>
            <?php endwhile ?>
        </table>
    </div>
    <br><br>
    <div>
        <table border="1">
            <tr>
                <td style="text-align: center; height:80px" colspan="6">
                    <h1>Artikel</h1>
                </td>
            </tr>
            <tr style="text-align: center;">
                <td>id</td>
                <td>judul</td>
                <td>type</td>
                <td>isi</td>
                <td>create time</td>
                <td>update at</td>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result2)) :
                $id = $row['id'];
                $judul = $row['judul'];
                $type = $row['file_type_id'];
                $isi = $row['isi'];
                $create = $row['created_at'];
                $update = $row['update_at'];
            ?>
                <tr>
                    <td><?= $id; ?></td>
                    <td><?= $judul; ?></td>
                    <td><?= $type; ?></td>
                    <td><?= $isi; ?></td>
                    <td><?= $create; ?></td>
                    <td><?= $update; ?></td>
                </tr>
            <?php endwhile ?>
        </table>

    </div>
</body>

</html>
