<?php
include_once('dbconnect.php');

 $id = $_POST['id_kategori'];
 $nama = $_POST['nama_kategori'];
 //query
 $querytambah =  mysqli_query($conn, "INSERT INTO daftar_kategori VALUES('$id','$nama')");

 if($querytambah){
    echo "<script>alert('Data berhasil ditambahkan');document.location.href='data-kategori.php'</script>";
}else{
    echo "<script>alert('Data gagal ditambahkan');document.location.href='data-kategori.php'</script>";
}
?>