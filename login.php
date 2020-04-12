<?php 
    require 'koneksi.php';
    session_start();

    if(isset($_SESSION['login'])) {
        header("Location: admin/index.php");
    }


    if(isset($_POST['admin'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

        if(mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if($password == $row['password']) {
                $_SESSION['login'] = true;
                $_SESSION['admin'] = $row;
                header("Location: admin/index.php");
                exit;
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px
        }
        thead th {
            padding: 5px;
        }
        input {
            padding: 2px;
            margin: 2px;
        }
        .container { 
            display: flex;
            width: 100%;
            min-height: 560px;
        }
        .login-form {
            margin: auto;
            padding: 20px;
        }
        marquee{
            background-color: #28a745;
            padding: 5px;
        }
        tfoot td {
            padding: 5px;
            font-size: 12px;
            letter-spacing: 0.2px;
        }
        .bottom-line {
            background-color: #28a745;
            padding: 3px;
            box-sizing: border-box;
        }
        .btn-login {
            padding: 2.5px 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-form">
            <form action="" method="post">
                <table border="0" style="border: 1px solid green">
                    <thead>
                        <tr>
                            <td colspan="4" style="padding: 5px"><marquee direction="left">Welcome to Covid-19 Information Center</marquee></td>
                        </tr>
                        <tr>
                            <th colspan="4">Login Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="right" width="100px">Username</td>
                            <td><input type="text" name="username" placeholder="Username"></td>
                            <td width="40px"></td>
                            <td width="40px"></td>
                        </tr>
                        <tr>
                            <td align="right">Password</td>
                            <td><input type="password" name="password" placeholder="Password"></td>
                            <td><button type="submit" name="admin" class="btn-login">Login</button></td>
                            <td width="40px"></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr align="center">
                            <td colspan="4">Website by Marino Imola</td>
                        </tr>
                        <tr>
                            <td colspan="4"><div class="bottom-line"></div></td>
                        </tr>
                    </tfoot>
                </table>
            </form>
        </div>
    </div>
</body>
</html>