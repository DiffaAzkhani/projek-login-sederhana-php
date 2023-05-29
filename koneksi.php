<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'db_user';

$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_errno($koneksi));
