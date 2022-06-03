<?php
    $namaserver="localhost";
    $userdb="root";
    $passdb="";
    $namadb="muslih_jwd";
    $koneksi=mysqli_connect($namaserver,$userdb,$passdb,$namadb);

    if(!$koneksi) {
        die("Koneksi ke database gagal" . mysqli_connect_error());
    }
?>