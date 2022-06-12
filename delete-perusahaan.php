<?php
    include "dbconnect.php";

    $id = $_GET['id_perusahaan'];

    //query hapus
    $querydelete = mysqli_query($conn, "DELETE FROM daftar_perusahaan WHERE id_perusahaan = '$id'");

    if ($querydelete) {
        echo "<script>alert('Data Berhasil Dihapus');document.location.href='data-perusahaan.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Dihapus');document.location.href='data-perusahaan.php'</script>";
    }
?>