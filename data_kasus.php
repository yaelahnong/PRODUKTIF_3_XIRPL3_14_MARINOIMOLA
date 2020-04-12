<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 INFO CENTER</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        .container-fluid {
            width: 90%;
        }
    </style>
</head>
<body>
    <!-- Image and text -->
    <?php include 'header.php'; ?>

    <div class="container-fluid pt-5">
        <h1 class="pb-5">Data Kasus Virus Corona di Indonesia Berdasarkan Provinsi</h1>

        <div class="content">
            <div class="row">
                <div class="col-6">
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
                            <tbody id="table-content">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-6">
                    <div class="img">
                        <img src="assets/img/2889_yuk_cegah_virus_corona_2.jpg">
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/script.js"></script>
</html>