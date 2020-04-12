<?php 
    session_start();
    require '../koneksi.php';

    if(!isset($_SESSION['login'])) {
        header("Location: index.php");
    }

    $api_corona = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi/');

    $data = json_decode($api_corona, true);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Halo <?php echo $_SESSION['admin']['username']; ?></h1>
    <a onclick="return confirm('Apakah anda ingin logout ?')" href="../logout.php">Logout</a>
</body>
</html>