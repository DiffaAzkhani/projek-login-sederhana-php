<?php
include 'koneksi.php';

session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $query = "SELECT * FROM user WHERE username = '$_SESSION[username]'";
    $result = mysqli_query($koneksi, $query);

    $ambilData = mysqli_fetch_assoc($result);
    $status = $ambilData['status'];
    switch ($status) {
        case 'admin':
            header('location: home-admin.php');
            break;
        case 'lecturer':
            header('location: home-lecturer.php');
            break;
        case 'student':
            header('location: home-student.php');
    }
    exit;
} else {
    header('location: login.php');
}

mysqli_close($koneksi);
