<?php
 include 'dbconnect.php';
// Session start
session_start();
  
// Condition if not logged in, redirect to login page
if (!isset($_SESSION['session_user'])) {
    header("Location: login.php");
}
else if($_SESSION['user_type'] != 2) {
    header("Location: index.php");
}
  
// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['session_user']);
    header("location: login.php");
}
?>

<!DOCTYPE html>

    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata:400">
		<link rel="stylesheet" type="text/css" href="css/index.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!----======== CSS ======== -->
        <link rel="stylesheet" href="css/admin-css.css">

        <!----===== Import Iconscout CSS ===== -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <!----===== Import Datatables===== -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        
        
        <!----===== Title ===== -->
        <title>Admin Panel | Seek Stack</title>
	</head>

    <body>
        <nav>
            <div class="logo-name">
                <div class="logo-image">
                    <img src="image/logo-admin.png" alt="">
                </div>
    
                <span class="logo_name">Seek Stack</span>
            </div>
            <div class="logo-name">
                <div class="logo-image">
                </div>
                <span class="logo_sub">Admin Panel</span>
            </div>
    
            <div class="menu-items">
                <ul class="nav-links">
                    <li><a href="admin.php">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dahsboard</span>
                    </a></li>
                    <li><a href="data-perusahaan.php">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="link-name">Data Perusahaan</span>
                    </a></li>
                    <li><a href="data-kategori.php">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Kategori</span>
                    </a></li>
                    <li><a href="#">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="link-name">Menu 4</span>
                    </a></li>
                    <li><a href="#">
                        <i class="uil uil-comments"></i>
                        <span class="link-name">Menu 5</span>
                    </a></li>
                    <li><a href="#">
                        <i class="uil uil-share"></i>
                        <span class="link-name">Menu 6</span>
                    </a></li>
                </ul>
                
                <ul class="logout-mode">
                    <!-- The IF condition is probably unnecessary,
                    but Rhizka always have a backup plan :) -->
                    <!-- <?php if(!isset($_SESSION['session_user'])) : ?>
                        <li>
                            <a href="login.php">
                            <i class="uil uil-signin-alt"></i>
                            <span class="link-name">Login</span>
                            </a>
                        </li>
                    <?php else : ?> -->
                        <li>
                            <a href="index.php?logout='1'">
                            <i class="uil uil-signout"></i>
                            <span class="link-name">Logout</span>
                            </a>
                        </li>
                    <!-- <?php endif ?> -->
                    
                    <!-- dark mode disabled because of the css conflict with datatables css.
                    yes very sad -->
                   
                </ul>
            </div>
        </nav>


        
        <!-- navbar top & search -->

        <section class="dashboard">
            <div class="top">
                <i class="uil uil-bars sidebar-toggle"></i>
    
                <!-- <div class="search-box">
                    <i class="uil uil-search"></i>
                    <input type="text" placeholder="Search here...">
                </div> -->
                <!-- The IF condition is probably unnecessary,
                but Rhizka always have a backup plan :) -->
                <?php  if (!isset($_SESSION['session_user'])) : ?>
                    <span class="user" style="margin-left: 800px;">Please login first!</span>
                <?php else : ?>
                    <span class="user" style="margin-left: 800px;">
                    Welcome, <?php echo $_SESSION['session_user']; ?>
                    </span>
                <img src="image/profile-admin.png" alt="">
                <?php endif ?>
            </div>
            
            <!-- Dashboard / Isi Konten - Section -->
            <div class="dash-content">
                <div class="overview">
                    <div class="title">
                        <i class="uil uil-tachometer-fast-alt"></i>
                        <span class="text">Dashboard</span>
                    </div>
                    <?php 
                                       
                    $query1 = mysqli_query($conn, "SELECT COUNT(id_perusahaan) as total FROM daftar_perusahaan");
                    while($row = $query1->fetch_assoc()){
                        $total_perusahaan = $row['total'];
                    }
                    $query2 = mysqli_query($conn, "SELECT COUNT(id_kategori) as total FROM daftar_kategori");
                    while($row = $query2->fetch_assoc()){
                        $total_kat = $row['total'];
                    }
                    $query3 = mysqli_query($conn, "SELECT COUNT(id) as total FROM users");
                    while($row = $query3->fetch_assoc()){
                        $total_user = $row['total'];
                    }
                    $query4 = mysqli_query($conn, "SELECT COUNT(id_perusahaan) as total FROM daftar_perusahaan");
                    while($row = $query4->fetch_assoc()){
                        $total_perusahaan = $row['total'];
                    }
                    $query5 = mysqli_query($conn, "SELECT COUNT(id_perusahaan) as total FROM daftar_perusahaan");
                    while($row = $query5->fetch_assoc()){
                        $total_perusahaan = $row['total'];
                    }
                    ?>
                    <div class="boxes">
                        <div class="box box1">
                            <i class="uil uil-files-landscapes"></i>
                            <span class="text">Total Perusahaan</span>
                            <span class="number"><?php echo $total_perusahaan?></span>
                        </div>
                        <div class="box box2">
                            <i class="uil uil-chart"></i>
                            <span class="text">Total Kategori</span>
                            <span class="number"><?php echo $total_kat?></span>
                        </div>
                        <div class="box box3">
                            <i class="uil uil-user"></i>
                            <span class="text">Total Client</span>
                            <span class="number"><?php echo $total_user?></span>
                        </div>
                        <div class="box box4">
                            <i class="uil uil-thumbs-up"></i>
                            <span class="text">Total Subscriber</span>
                            <span class="number">1,120</span>
                        </div>
                        <div class="box box5">
                            <i class="uil uil-thumbs-up"></i>
                            <span class="text">Total Transaksi</span>
                            <span class="number">52,230</span>
                        </div> 
                    </div>
                </div>
                

                <div class="activity">
                    <div class="title">
                        <i class="uil uil-clock-three"></i>
                        <span class="text">Aktivitas Terakhir</span>
                    </div>
                    <script>
                        $(document).ready(function(){
                            $('#dataTable').DataTable();
                        });
                    </script>
                    <div class="activity-data">
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                    <tr>
                                        
                                        <th  style="text-align: center;">ID Log</th>
                                        <th  style="text-align: center;">Keterangan</th>
                                        <th  style="text-align: center;">Jenis Data</th>
                                        <th  style="text-align: center;">ID Data</th>
                                        <th  style="text-align: center;">Nama Data</th>
                                        <th  style="text-align: right;">Waktu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <div class="data email"></div>
                                    <?php 
                                       
                                        $query = mysqli_query($conn, "SELECT * FROM log_activity ORDER BY id DESC");
                                        while($row = $query->fetch_assoc()){
                                          echo 
                                          "<tr>
                                          <td>".$row['id']."</td>
                                          <td>".$row['keterangan']."</td>
                                          <td>".$row['data_type']."</td>
                                          <td>".$row['id_data']."</td>
                                          <td>".$row['data_name']."</td>
                                          <td>".$row['waktu']."</td>
                                          </tr>";
                                           
                                         }               
                                         ?>           
                                </tbody>
                            </table>
                        </div>
                    </div>
                       
                </div>
            </div>
        </section>
    
        <script type="text/javascript" src="js/admin.js"></script>
        
    </body>
</html>