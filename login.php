<?php
include 'koneksi.php';

session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordmd5 = md5($password);

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$passwordmd5'";
    $result = mysqli_query($koneksi, $query);
    $ambilData = mysqli_fetch_array($result);

    if ($username === $ambilData['username'] and $passwordmd5 = $ambilData['password']) {
        $_SESSION['username'] = $username;

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
    }
}

mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1 style="text-align: center">Program Login (Session)</h1>
    <h1 style="text-align: center">Diffa Azkhani (A12.2020.06496)</h1>

    <h3>Login</h3>

    <form action="" method="post">
        <table>
            <tr>
                <td><label for="">Username</label></td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td><label for="">Password</label></td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Login" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>