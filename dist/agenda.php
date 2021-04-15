<?php include "../config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Admin</title>
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body>

   
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4 text-center">AGENDA</h1>
                    <?php

                    $result = mysqli_connect($servername, $username, $password) or die("Could not connect to database." . mysqli_error());
                    mysqli_select_db($result, $dbname) or die("Could not select the databse." . mysqli_error());
                    $image_query = mysqli_query($result, "select kegiatan,tgl,waktu from agenda");
                    while ($rows = mysqli_fetch_array($image_query)) {

                        $kgt = $rows['kegiatan'];
                        $date = $rows['tgl'];
                        $waktu = $rows['waktu'];
                    ?>
                        <h4 class="text-center font-weight-bold pt-4 border-top"><?php echo $kgt; ?></h4>
                        <p class="text-center"><?php echo $date; ?></p>
                        <p class="text-center border-bottom"><?php echo $waktu; ?></p>

                    <?php
                    }
                    ?>
                </div>
            </main>
        </div>
</body>

</html>