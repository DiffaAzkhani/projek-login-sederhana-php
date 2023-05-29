<?php

// Memulai session
session_start();

// menghapus session yang ada di browser
session_unset();

// menghapus session yang ada di server php
session_destroy();

// pindah halaman (redirect) ke index.php
header('location: index.php');
