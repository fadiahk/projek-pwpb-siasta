<?php
    $koneksi = mysqli_connect("localhost", "root", "", "siasta");

    if (mysqli_connect_error()) {
        echo "koneksi database gagal".mysqli_connect();
    }
?>