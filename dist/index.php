<?php include "../config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Komunitas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
         <link rel="stylesheet" href="st.css">
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        // variabel global marker 
        var marker;
        function taruhMarker(peta, posisiTitik) {
            if (marker) {
                // pindahkan marker       
                marker.setPosition(posisiTitik);
            } else {
                // buat marker baru       
                marker = new google.maps.Marker({
                    position: posisiTitik,
                    map: peta,
                    animation: google.maps.Animation.BOUNCE
                });
            }

        }
        function initialize() {
            var propertiPeta = {
                center: new google.maps.LatLng(-3.7605517, 102.273931),
                zoom: 19,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var peta = new google.maps.Map(document.getElementById("googleMap"),
                propertiPeta);
            // even listner ketika peta diklik   
            google.maps.event.addListener(peta, 'click', function (event) {
                taruhMarker(this, event.latLng);
            });

        }


        // event jendela di-load   
        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
</head>
<body>
    <header>
        <img src="../assets/Untitled-1.png" width="70px">
       <!-- <a href="" class="logo">Portofolio</a> -->
            <div class="toggle" onclick="toggleMenu()"></div>
            <ul class="menu">
                <li><a href="index.php" onclick="toggleMenu();">Home</a></li>
                <li><a href="#berita" onclick="toggleMenu();">Article</a></li>
                <li><a href="tablepegawai.php" onclick="toggleMenu();">Tabel Anggota</a></li>
                <li><a href="#agenda" onclick="toggleMenu();">Agenda</a></li>
                <li><a href="../login.php" onclick="toggleMenu();">Login</a></li>
            </ul>
    </header>

    <section class="banner">
        <div class="textBx">
            <h2>World's Style Motorcyle</h2>
            <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Numquam ipsum provident doloremque!<br> Consequatur eum, totam nam incidunt enim nostrum.</h3>
            <a href="" class="btn">More >></a>
        </div>
    </section>

        <!-- ------Berita----- -->
    <section id="berita">
    <div class="container">
        <div class="row text-center">
            <div class="col pt-3">
                <h2>LATEST NEWS</h2>
            </div>
        </div>
        <div class="row">
        <?php

        $result = mysqli_connect($servername, $username, $password) or die("Could not connect to database." . mysqli_error());
        mysqli_select_db($result, $dbname) or die("Could not select the databse." . mysqli_error());
        $image_query = mysqli_query($result, "select judul,image,article from news");
        while ($rows = mysqli_fetch_array($image_query)) {

            $img_name = $rows['judul'];
            $img_src = $rows['image'];
            $article = $rows['article'];

        ?>
            <div class="col-md-4 d-flex justify-content-around pt-5 pb-3">
                    <div class="card w-100 h-auto d-inline-block" style="height: 100px;">
                        <h3><strong><?php echo $img_name; ?></strong></h3>
                        <img src="<?php echo $img_src; ?>" class="card-img-top justify-content-around">
                        <div class="card-body">
                            <p class="card-text justify-content-around"><?php echo $article; ?></p>
                            <a href="#" class="btn btn-primary fixed-bottom">Go somewhere</a>
                        </div>
                    </div>
                </div>
            

            <?php
        }
            ?>
        </div>
    </div>
</section>
<!-- -----vidio----- -->
<div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>Vidio Activity</h2>
            </div>
        </div>
    <div class="row">
        <div class="col-md-4 mt-5 pr-3 pl-3 pb-5">
            <iframe width="360" height="315" src="https://www.youtube.com/embed/UvmFABoTj_A" 
            frameborder="0" allow="accelerometer; 
            autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-md-4 mt-5 pr-3 pl-3 pb-5">
            <iframe width="360" height="315" src="https://www.youtube.com/embed/znwzzLOxef4" 
            frameborder="0" allow="accelerometer;
            autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
<div class="col-md-4 mt-5 pr-3 pl-3 pb-5">
<iframe width="360" height="315" src="https://www.youtube.com/embed/e3T8RB4jv6A" 
frameborder="0" allow="accelerometer; 
autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
</div>

<!-- -----!vidio----- -->

           <section id="agenda" class="pb-5">   
                    <h1 class="mt-4 text-center ">AGENDA</h1>
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
                        <p class="text-center pb-5 border-bottom "><?php echo $waktu; ?></p>

                    <?php
                    }
                    ?>
         </section>

    <div id="googleMap" class="map" style="width:100%;height:380px;"></div>

<!-- --------footer------ -->
            <footer>
                <div class="container">
                    <div class="sec aboutus">
                        <h2>About Us</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Consequatur expedita aut commodi blanditiis id esse, tenetur,
                            sapiente corrupti quasi excepturi illum nesciunt accusantium minima.
                            Ab corporis accusantium modi voluptatibus eveniet!
                        </p>
                        <ul class="sci">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCIO3PWx7jutj9T5MBq6H_9Q"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="sec quickLink">
                        <h2>Quick Links</h2>
                        <ul>
                            <li><a href="">About</a></li>
                            <li><a href="">Faq</a></li>
                            <li><a href="">Terms & Conditions</a></li>
                            <li><a href="">Help</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                    <div class="sec contact">
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <li>
                                <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                <span>nbnsb streat Dc <br>
                                    kdkjvsdkvjksja, PA 99289,<br>USA</span>
                            </li>
                            <li>
                                <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <p><a href="12345673276">+76 3294372732</a><br>
                                    <a href="12345673276">+76 3294372732</a>
                                </p>
                            </li>
                            <li>
                                <span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                <p><a href="saya@gmail.com">Komunitas@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
            <div class="copyrightText">
                <p>CopyRight 2021 Muhammad Aldy Alfarish & Muhammad Ridho Hauzan. ALL Rights Reserved</p>
            </div>


    <script type="text/javascript">
        window.addEventListener('scroll', function () {
            var header = document.querySelector('header');
            header.classList.toggle('sticky', window.scrollY > 0);
        });

        function toggleMenu() {
            var menuToggle = document.querySelector('.toggle');
            var menu = document.querySelector('.menu');
            menuToggle.classList.toggle('active');
            menu.classList.toggle('active');
        }
    </script>
</body>
</html>