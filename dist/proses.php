<?php

include("../config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['daftar'])) {

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    // $uangp = $_POST['uang_pendaftaran'];
    // $uangk = $_POST['uang_kas'];
    // $uangs = $_POST['uang_sumbangan'];

    // buat query
    $sql = "INSERT INTO pegawai (nama, alamat, uang_pendaftaran, uang_kas, uang_sumbangan) VALUE ('$nama', '$alamat')";
    $query = mysqli_query($dbname, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ../dist/tablepegawai.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ../dist/tablepegawai.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
