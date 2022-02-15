<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "db_bukutamu";

    $konek = mysqli_connect($host, $user, $pass, $database);

    if(!$konek){
        die("Koneksi Gagal " . mysqli_connect_error());
    }
?>