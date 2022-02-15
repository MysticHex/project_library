<?php
include 'connection.php';
include 'disperror.php';
date_default_timezone_set('Asia/Jakarta');
$timestamp = date('h:i A d/m/Y');
$uname = (isset($_POST['username']));
$NP = (isset($_POST['namapanjang']));
$pass = (isset($_POST['pass']));
$pass2 = (isset($_POST['pass2']));
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        .inp {
            height: 100%;
            width: fit-content;
            margin-bottom: 10px;
        }

        #sub {
            width: fit-content;
        }
    </style>
</head>

<body>
    <!-- <form action="" method="post">
        <table>
            <tr>
                <td>
                    <input type="text" name="username" placeholder="Masukan Username" class="inp" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" placeholder="Masukan Nama" name="namapanjang" class="inp" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="pass" placeholder="Masukan Password" class="inp" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="pass2" class="inp" placeholder="Konfirmasi Password" id="">
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    <input class="inp" id="sub" type="submit" value="Registration" name="BtnSubmit">
                </td>
            </tr>
        </table>
    </form> -->
    <form action="" method="post">
        <input placeholder="Masukan Username" class="inp" type="text" name="username" id=""><br>
        <input placeholder="Masukan Nama" class="inp" type="text" name="namapanjang" id=""><br>
        <input placeholder="Masukan Password" class="inp" type="password" name="pass" id=""> <br>
        <input placeholder="Konfirmasi password" class="inp" type="password" name="pass2" id=""><br>
        <input class="inp" id="sub" type="submit" value="Register" name="btnSubmit">
    </form>
</body>

</html>
<?php

if (isset($_POST['btnSubmit'])) {
    if ($pass == $pass2) {
        $quer = "SELECT * FROM `users` WHERE username = '$uname' ";
        $result = mysqli_query($conn, $quer);
        // error_reporting(0);
        $num = mysqli_num_rows($result);
        if ($num == 0) {
            $reg = "INSERT INTO `users` (`username`, `password`, `fullname`, `created_at`) VALUES ('$uname','$pass','$NP','$timestamp')";
            $run = mysqli_query($conn, $reg);
            if ($run) {
                echo "<script>alert('Registration Succesful')</script>";
            } else {
                echo "<script>alert('Registration Failed')</script>";
            }
        } else {
            echo "<script>alert('Username already taken')<script>";
            header('Refresh: 0.2; URL=register.php');
        }
    } else {
        echo '<script>alert("Konfirmasi password gagal")</script>';
    }
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(0);
error_reporting(E_ALL);
?>
