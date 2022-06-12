<?php
    include_once('dbconnect.php');

    $id = $_POST['id_perusahaan'];
    $nama = $_POST['nama'];
    $pemilik = $_POST['pemilik'];
    $desc = $_POST['deskripsi'];
    $status = $_POST['status'];

    //query
    $logoName = $_FILES['logo']['name'];
    $tempName = $_FILES['logo']['tmp_name'];
    $folder = "image/logo/" . $logoName;
    
    $querytambah =  mysqli_query($conn, "INSERT INTO daftar_perusahaan VALUES('$id', '$nama', '$logoName', '$pemilik', '$desc', '$status')");
    if(move_uploaded_file($tempName, $folder)){
        if($querytambah){
            echo "<script>alert('Data berhasil ditambahkan');document.location.href='data-perusahaan.php'</script>";
        }else{
        echo "<script>alert('Data gagal ditambahkan');document.location.href='data-perusahaan.php'</script>";
        }
    }else{
        echo "<script>alert('Data gagal ditambahkan');document.location.href='data-perusahaan.php'</script>";
    }
?>