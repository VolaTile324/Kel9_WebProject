<?php
 
// Session start
session_start();
  
// Condition if not logged in, redirect to login page
if (!isset($_SESSION['session_user'])) {
    header("Location: login.php");
}
  
// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['session_user']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata:400">
		<link rel="stylesheet" type="text/css" href="css/index.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

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
                    <li><a href="#">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dahsboard</span>
                    </a></li>
                    <li><a href="#">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="link-name">Data Perusahaan</span>
                    </a></li>
                    <li><a href="#">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Menu 3</span>
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
                    <?php if(!isset($_SESSION['session_user'])) : ?>
                        <li>
                            <a href="login.php">
                            <i class="uil uil-signin-alt"></i>
                            <span class="link-name">Login</span>
                            </a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="index.php?logout='1'">
                            <i class="uil uil-signout"></i>
                            <span class="link-name">Logout</span>
                            </a>
                        </li>
                    <?php endif ?>
                    
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
    
                    <div class="boxes">
                        <div class="box box1">
                            <i class="uil uil-thumbs-up"></i>
                            <span class="text">Total Perusahaan</span>
                            <span class="number">50,120</span>
                        </div>
                        <div class="box box2">
                            <i class="uil uil-comments"></i>
                            <span class="text">Data Dummy</span>
                            <span class="number">20,120</span>
                        </div>
                        <div class="box box3">
                            <i class="uil uil-share"></i>
                            <span class="text">Total Client</span>
                            <span class="number">10,120</span>
                        </div>
                        <div class="box box4">
                            <i class="uil uil-thumbs-up"></i>
                            <span class="text">Total Subscriber</span>
                            <span class="number">1,120</span>
                        </div>
                        <div class="box box5">
                            <i class="uil uil-thumbs-up"></i>
                            <span class="text">Total Karyawan</span>
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
                                        <th  style="text-align: center;">Company</th>
                                        <th  style="text-align: center;">Detail</th>
                                        <th  style="text-align: center;">Added</th>
                                        <th  style="text-align: center;">Type</th>
                                        <th  style="text-align: center;">Status</th>
                                        <th  style="text-align: right;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <div class="data email"></div>
                                    <tr>
                                        <td class="align-middle">Gojek</td>
                                        <td class="align-middle">Gojek is a technology company from Indonesia that serves transportation through motorcycle taxi services.</td>
                                        <td class="align-middle">2022-02-12</td>
                                        <td class="align-middle">New</td>
                                        <td class="align-middle">Active</td>                                      
                                        <td style="text-align: right;">
                                            <a href="<?= base_url(); ?>index.php/admin/siswa/ubah/<?= $data->rizky_nisn?>"
                                             class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?= base_url(); ?>index.php/admin/siswa/hapusDataSiswa/<?= $data->rizky_nisn?>')"
                                             href="#!" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td class="align-middle">Gojek</td>
                                        <td class="align-middle">Ini adalah deskripsi dari perusahaan</td>
                                        <td class="align-middle">2022-02-12</td>
                                        <td class="align-middle">New</td>
                                        <td class="align-middle">Active</td>                                      
                                        <td style="text-align: right;">
                                            <a href="<?= base_url(); ?>index.php/admin/siswa/ubah/<?= $data->rizky_nisn?>"
                                             class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?= base_url(); ?>index.php/admin/siswa/hapusDataSiswa/<?= $data->rizky_nisn?>')"
                                             href="#!" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">Gojek</td>
                                        <td class="align-middle">Ini adalah deskripsi dari perusahaan</td>
                                        <td class="align-middle">2022-02-12</td>
                                        <td class="align-middle">New</td>
                                        <td class="align-middle">Active</td>                                      
                                        <td style="text-align: right;">
                                            <a href="<?= base_url(); ?>index.php/admin/siswa/ubah/<?= $data->rizky_nisn?>"
                                             class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?= base_url(); ?>index.php/admin/siswa/hapusDataSiswa/<?= $data->rizky_nisn?>')"
                                             href="#!" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="align-middle">Gojek</td>
                                        <td class="align-middle">Ini adalah deskripsi dari perusahaan</td>
                                        <td class="align-middle">2022-02-12</td>
                                        <td class="align-middle">New</td>
                                        <td class="align-middle">Active</td>                                      
                                        <td style="text-align: right;">
                                            <a href="<?= base_url(); ?>index.php/admin/siswa/ubah/<?= $data->rizky_nisn?>"
                                             class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?= base_url(); ?>index.php/admin/siswa/hapusDataSiswa/<?= $data->rizky_nisn?>')"
                                             href="#!" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">Gojek</td>
                                        <td class="align-middle">Ini adalah deskripsi dari perusahaan</td>
                                        <td class="align-middle">2022-02-12</td>
                                        <td class="align-middle">New</td>
                                        <td class="align-middle">Active</td>                                      
                                        <td style="text-align: right;">
                                            <a href="<?= base_url(); ?>index.php/admin/siswa/ubah/<?= $data->rizky_nisn?>"
                                             class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?= base_url(); ?>index.php/admin/siswa/hapusDataSiswa/<?= $data->rizky_nisn?>')"
                                             href="#!" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">Gojek</td>
                                        <td class="align-middle">Ini adalah deskripsi dari perusahaan</td>
                                        <td class="align-middle">2022-02-12</td>
                                        <td class="align-middle">New</td>
                                        <td class="align-middle">Active</td>                                      
                                        <td style="text-align: right;">
                                            <a href="<?= base_url(); ?>index.php/admin/siswa/ubah/<?= $data->rizky_nisn?>"
                                             class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?= base_url(); ?>index.php/admin/siswa/hapusDataSiswa/<?= $data->rizky_nisn?>')"
                                             href="#!" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">Instagram</td>
                                        <td class="align-middle">Instagram is an American photo and video sharing social networking service founded by Kevin Systrom and Mike Krieger.</td>
                                        <td class="align-middle">2022-02-14</td>
                                        <td class="align-middle">New</td>
                                        <td class="align-middle">Active</td>                                      
                                        <td style="text-align: right;">
                                            <a href="<?= base_url(); ?>index.php/admin/siswa/ubah/<?= $data->rizky_nisn?>"
                                             class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?= base_url(); ?>index.php/admin/siswa/hapusDataSiswa/<?= $data->rizky_nisn?>')"
                                             href="#!" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr> -->
                                    
                                </div>

                                </tbody>
                            </table>
                        </div>
                    </div>
                        <!-- <div class="data names">
                            <span class="data-title">Company</span>
                            <span class="data-list">Gojek</span>
                            <span class="data-list">Instagram</span>
                            <span class="data-list">Microsoft</span>
                            <span class="data-list">Google</span>
                            <span class="data-list">WhatsApp</span>
                            <span class="data-list">Lorem Ipsum</span>
                            <span class="data-list">Lorem Ipsum</span>
                        </div>
                        <div class="data email">
                            <span class="data-title">Detail</span>
                            <span class="data-list">Lorem Ipsum</span>
                            <span class="data-list">Lorem Ipsum</span>
                            <span class="data-list">Lorem Ipsum</span>
                            <span class="data-list">Lorem Ipsum</span>
                            <span class="data-list">Lorem Ipsum</span>
                            <span class="data-list">Lorem Ipsum</span>
                            <span class="data-list">Lorem Ipsum</span>
                        </div>
                        <div class="data joined">
                            <span class="data-title">Added</span>
                            <span class="data-list">2022-02-12</span>
                            <span class="data-list">2022-02-12</span>
                            <span class="data-list">2022-02-13</span>
                            <span class="data-list">2022-02-13</span>
                            <span class="data-list">2022-02-14</span>
                            <span class="data-list">2022-02-14</span>
                            <span class="data-list">2022-02-15</span>
                        </div>
                        <div class="data type">
                            <span class="data-title">Type</span>
                            <span class="data-list">New</span>
                            <span class="data-list">Member</span>
                            <span class="data-list">Member</span>
                            <span class="data-list">New</span>
                            <span class="data-list">Member</span>
                            <span class="data-list">New</span>
                            <span class="data-list">Member</span>
                        </div>
                        <div class="data status">
                            <span class="data-title">Status</span>
                            <span class="data-list">Lorem Ipsum</span>
                            <span class="data-list">Lorem Ipsum</span>
                            <span class="data-list">Lorem Ipsum</span>
                            <span class="data-list">Lorem Ipsum</span>
                            <span class="data-list">Lorem Ipsum</span>
                            <span class="data-list">Lorem Ipsum</span>
                            <span class="data-list">Lorem Ipsum</span>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
    
        <script src="js/admin.js"></script>
    </body>
</html>