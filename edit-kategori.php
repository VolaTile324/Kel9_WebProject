<?php
    include "dbconnect.php";

    $id = $_POST['id_kategori'];
	$nama = $_POST['nama_kategori'];
    

    $sql = mysqli_query($conn, "UPDATE daftar_kategori SET nama_kategori='$nama' WHERE id_kategori='$id'");
	
    if($sql){
        echo "<script>alert('Data berhasil diupdate');document.location.href='data-kategori.php'</script>";
    }else{
        echo "<script>alert('Data gagal diupdate');document.location.href='data-kategori.php'</script>";
    }

?>