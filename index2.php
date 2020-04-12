<?php 

    $api_corona = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi/');

    $data = json_decode($api_corona, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 INFO CENTER</title>
    <style>
        .container {
            width: 100%;
        }

        .content {
            display: flex;
        }

        .content .table {
            flex: 1;
        }

        .content .img {
            flex: 1;
            width: 50%;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Data Kasus Virus Corona di Indonesia Berdasarkan Provinsi</h1>

        <div class="content">
            <div class="table">
                <table border="1" cellpadding="10" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>PROVINSI</th>
                            <th>POSITIF</th>
                            <th>SEMBUH</th>
                            <th>MENINGGAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach($data as $row): ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $row['attributes']['Provinsi']; ?></td>
                            <td><?= $row['attributes']['Kasus_Posi']; ?></td>
                            <td><?= $row['attributes']['Kasus_Semb']; ?></td>
                            <td><?= $row['attributes']['Kasus_Meni']; ?></td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="img">
                <img src="img/2889_yuk_cegah_virus_corona_2.jpg">
            </div>
            
        </div>
    </div>
</body>
</html>