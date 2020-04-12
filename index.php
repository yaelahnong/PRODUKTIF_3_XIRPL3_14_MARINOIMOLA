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
            /* padding-bottom: 120px; */
        }

        .footer {
            position: fixed;
            bottom: 0;
            right: 0;
            left: 0;
            padding: 10px;
        }
        
        .text-heading {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 600;
        }

        .text-list {
            font-size: 18px;
            letter-spacing: 0.5px;
            list-style: none;
            display: flex;
            font-size: 16px;
        }

    </style>
</head>
<body>
    <!-- Image and text -->
    
    <?php include 'header.php'; ?>

    <div class="container-fluid">
        <div class="content">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-6">
                        <h2 class="text-heading pb-2">Cegah Penyebaran Virus !</h2>
                        <p class="lead"><strong>COVID-19 dapat menyebar dari orang ke orang melalui tetesan kecil (droplet) saat batuk atau bersin. Maka yang bisa Anda lakukan adalah:</strong></p>
                        <li class="text-list">
                            <div class="icon pr-3">
                                <img src="assets/img/shield.svg" alt="" width="20px">
                            </div>
                            <p>Sering cuci tangan dengan sabun atau hand-sanitizer</p>
                        </li>
                        <li class="text-list">
                            <div class="icon pr-3">
                                <img src="assets/img/shield.svg" alt="" width="20px">
                            </div>
                            <p>Hindari menyentuh wajah, terutama hidung, mulut, dan mata</p>
                        </li>
                        <li class="text-list">
                            <div class="icon pr-3">
                                <img src="assets/img/shield.svg" alt="" width="20px">
                            </div>
                            <p>Bersihkan permukaan benda yang disentuh banyak orang</p>
                        </li>
                        <li class="text-list">
                            <div class="icon pr-3">
                                <img src="assets/img/shield.svg" alt="" width="20px">
                            </div>
                            <p>Social Distancing! Minimalisir kontak fisik dengan sesama</p>
                        </li>
                        <li class="text-list">
                            <div class="icon pr-3">
                                <img src="assets/img/shield.svg" alt="" width="20px">
                            </div>
                            <p>Jaga jarak 1-3 meter dengan orang yang sakit</p>
                        </li>
                        <li class="text-list">
                            <div class="icon pr-3">
                                <img src="assets/img/shield.svg" alt="" width="20px">
                            </div>
                            <p>Jika sakit, maka: 
                            <br>1. Tinggal di rumah <br> 2. Gun  akan masker</p>
                        </li>
                    </div>
                    <div class="col-6">
                        <img src="assets/img/manwshield.jpg" width="560px">
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