<?php
    $connect = mysqli_connect("localhost", "root", "");
    mysqli_select_db($connect, "stack_login") or die ("Tidak terhubung pada database!");
    echo "Koneksi ke server berhasil!";
?>