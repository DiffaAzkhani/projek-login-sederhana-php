<?php
include 'koneksi.php';
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