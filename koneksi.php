<?php
    $koneksi = mysqli_connect("localhost", "root", "", "app_ppdb");

    // cek koneksi
    if(mysqli_connect_errno()){
        echo "Koneksi database gagal:" . mysqli_connect_errno();
    }


?>