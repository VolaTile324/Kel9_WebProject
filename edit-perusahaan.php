<?php
    include_once("dbconnect.php");

    $id = $_POST['id_perusahaan'];
    $nama = $_POST['nama'];
    $pemilik = $_POST['pemilik'];
    $desc = $_POST['deskripsi'];
    $status = $_POST['status'];
    $kategori = $_POST['kategori'];

    //query
    $logoName = $_FILES['logo']['name'];
    $tempName = $_FILES['logo']['tmp_name'];
    $folder = "image/logo/" . $logoName;

    if($tempName != ""){
        if(move_uploaded_file($tempName, $folder)){
            $queryupdate =  mysqli_query($conn, "UPDATE daftar_perusahaan SET nama = '$nama', logo = '$logoName', pemilik = '$pemilik', deskripsi = '$desc', kategori = '$kategori', status_perusahaan = '$status' WHERE id_perusahaan = '$id'");
            if($queryupdate){
                echo "<script>alert('Data berhasil diubah');document.location.href='data-perusahaan.php'</script>";
            }else{
                echo "<script>alert('Data gagal diubah');document.location.href='data-perusahaan.php'</script>";
            }
        }else{
            echo "<script>alert('Data gagal diubah');document.location.href='data-perusahaan.php'</script>";
        }
    }else{
        $queryupdate =  mysqli_query($conn, "UPDATE daftar_perusahaan SET nama = '$nama', pemilik = '$pemilik', deskripsi = '$desc', kategori = '$kategori', status_perusahaan = '$status' WHERE id_perusahaan = '$id'");
        if($queryupdate){
            echo "<script>alert('Data berhasil diubah');document.location.href='data-perusahaan.php'</script>";
        }else{
            echo "<script>alert('Data gagal diubah');document.location.href='data-perusahaan.php'</script>";
        }
    }
?>