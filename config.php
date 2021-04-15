<!-- Koneksi Dari DB Ke Web Memakai mysqli_connect -->

<?php
$servername = "localhost"; //Server DB
$username = "root"; //Username DB
$password = ""; //Password DB
$dbname = "register_db"; //Nama DB

$connection = mysqli_connect($servername, $username, $password, $dbname); //Koneksi Ke DB Memakai mysqli Connect
if (!$connection){
        die("Connection Failed:".mysqli_connect_error()); // Jika Koneksi Error Maka Koneksi Gagal
    }
?>