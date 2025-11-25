<?php
session_start();

$username = $_POST['username'];
$email    = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Simpan ke file
$file = fopen("users.txt", "a");
fwrite($file, "$username|$email|$password\n");
fclose($file);

$_SESSION['msg'] = "Akun berhasil dibuat!";
header("Location: login.php");
exit();
