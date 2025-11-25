<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$loginValid = false;

// Ambil data user dari file
$lines = file("users.txt", FILE_IGNORE_NEW_LINES);

foreach($lines as $line){
    list($u, $e, $p) = explode("|", $line);

    if($username == $u && password_verify($password, $p)){
        $loginValid = true;
        break;
    }
}

if($loginValid){
    echo "Login sukses! Halo $username 👋";
} else {
    $_SESSION['msg'] = "Username atau password salah!";
    header("Location: login.php");
    exit();
}
