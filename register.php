<?php
include 'connection.php';
include 'disperror.php';
date_default_timezone_set('Asia/Jakarta');
$timestamp = date('h:i A d/m/Y' . " WIB");

$uname = $_POST['username'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="sistemregister.php" method="post">
        <input type="text" placeholder="Masukan username" name="username" id=""><br>
        <input type="password" placeholder="Masukan Password" name="pass" id=""><br>
        <input type="password" placeholder="Masukan ulang password" name="pass2" id=""><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>