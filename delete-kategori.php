<?php
    include "dbconnect.php";

    $id = $_GET['id_kategori'];

    $query = mysqli_query($conn, "DELETE FROM daftar_kategori WHERE id_kategori='$id'");

    if ($query) {
        echo "<script>alert('Data Berhasil Dihapus');document.location.href='data-kategori.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Dihapus');document.location.href='data-kategori.php'</script>";
    }
?>