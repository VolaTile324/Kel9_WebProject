<?php
// Session start
session_start();
include 'dbconnect.php';
  
// Condition if not logged in, redirect to login page
if (!isset($_SESSION['session_user'])) {
    header("location: login.php");
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
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Seek Stack</title>
        <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata:400">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/search_page.css" rel="stylesheet" type="text/css" />
        <link href="css/general.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header id="header">
            <div class="container">
                <div class="header">
                    <div id="logo">
                        <h1>Seek Stack</h1>
                    </div>
                    <nav class="nav">
                        <a href="index.php" class="link">Home</a>
                        <a href="#" class="link">About Us</a>
                        <a href="#" class="link">Contact Us</a>
                        <!-- This part requires login first, Rhizka thinks user must be redirected to login page
                        Sooo... this IF condition might be unnecessary, but backup plan is always nice! -->
                        <?php  if (!isset($_SESSION['session_user'])) : ?>
                            <a href="login.php" class="button-login">Sign In / Sign Up</a>
                        <?php else : ?>
                            <p>
                                Welcome
                                <strong>
                                    <?php echo $_SESSION['session_user']; ?>
                                </strong>
                            </p>
                            <p>
                                <a href="index.php?logout='1'" class="button-logout">Sign Out</a>
                            </p>
                        <?php endif ?>
                    </nav>

                </div>
            </div>
		</header>
        
        <main>
            <div class="container">
                <div class="banner-main">
                    <img src="image/banner-searchpage.jpg" alt="banner" />
                    <form action="search_page.php" method="post">
                    <div class="search-box">
                        <div class="dropdown-menu">
                            <div id="dropdown-default">
                                <select class="kategori-select" name="kategori">
                                    <option value="0">Select Category</option>
                                    <?php
                                        $category_sql = "SELECT * FROM daftar_kategori";
                                        $result = mysqli_query($conn, $category_sql);
                                        while($row = mysqli_fetch_assoc($result)) {
                                            echo '<option value="'.$row['nama_kategori'].'">'.$row['nama_kategori'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="search-form">
                                <input id="search-input" type="text" name="search" placeholder="Search for..." value=""/>
                        </div>
                        <button class="search-btn" type="submit">Search</button>    
                    </div>
                    </form>
                </div>
            </div>
            
            <div class="result-background">
                <?php
                    if(isset($_POST['search']) && isset($_POST['kategori'])){
                        $search = $_POST['search'];
                        $kategori = $_POST['kategori'];
                        if($kategori == 0){
                            $search_query = "SELECT * FROM daftar_perusahaan WHERE nama LIKE '%$search%'";
                        }
                        else{
                            $search_query = "SELECT * FROM daftar_perusahaan WHERE nama LIKE '%$search%' AND kategori LIKE '%$kategori%'";
                        }
                    }
                    else{
                        $search_query = "SELECT * FROM daftar_perusahaan";
                    }
                    $search_result = mysqli_query($conn, $search_query);
                    while($row = mysqli_fetch_array($search_result)){
                        echo '
                            <div class="result-wrapper" id="entry'.$row['id_perusahaan'].'">
                                <div class="result-img">
                                    <img src="image/logo/'.$row['logo'].'" alt="result-img" />
                                </div>
                                <div class="result-content">
                                    <div class="result-title" onclick="openModal'.$row['id_perusahaan'].'()">'.$row['nama'].'</div>
                                        <a href="#" class="result-tags">'.$row['kategori'].'</a>
                                        <p>
                                            '.$row['deskripsi'].'
                                        </p>
                                        <div class="result-assets">
                                            <img src="image/asset/atom.png" alt="result-assets-1" />
                                            <img src="image/asset/git.png" alt="result-assets-2" />
                                            <img src="image/asset/instagram.png" alt="result-assets-3" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';

                        echo '
                            <div id="modal-'.$row['id_perusahaan'].'" class="modal">
                                <div class="modal-content">
                                    <span class="close" onclick="closeModal'.$row['id_perusahaan'].'()">&times;</span>
                                    <div class="modal-pic-style">
                                        <img src="image/logo/'.$row['logo'].'" alt="modal-'.$row['id_perusahaan'].'-picture" />
                                    </div>
                                    <h1>'.$row['nama'].'</h1>
                                    <div class="modal-info">
                                        <p>
                                            <b>Kategori</b><br>'.$row['kategori'].'
                                        </p>
                                        <p>
                                            <b>Pemilik</b><br>'.$row['pemilik'].'
                                        </p>
                                        <p>
                                            <b>Status</b><br>'.$row['status_perusahaan'].'
                                        </p>
                                    </div>
                                    <p>
                                        '.$row['deskripsi'].'
                                    </p>
                                    <button class="modal-company-btn">Learn More</button>
                                </div>
                            </div>
                            <script>
                                function openModal'.$row['id_perusahaan'].'() {
                                    document.getElementById("modal-'.$row['id_perusahaan'].'").style.display = "block";
                                }
                                function closeModal'.$row['id_perusahaan'].'() {
                                    document.getElementById("modal-'.$row['id_perusahaan'].'").style.display = "none";
                                }
                            </script>
                        ';
                    }
                ?>
            </div>
        </main>

        <footer id="footer" class="footer">
            <div class="container">
               <div class="footer-content">
                   <div class="footer-menu">
                       <a href="#" class="footer-menu-link">Terms of Use</a>
                       <a href="#" class="footer-menu-link">Privacy Policy</a>
                       <a href="#" class="footer-menu-link">Cyber Guideline</a>
                   </div>
                   <p class="footer-copyright">
                       Copyright &copy; 2022 | <strong>Kelompok 9</strong>
                   </p> 
               </div>
           </div>
       </footer>
       <script src="js/search-filter.js"></script>
    </body>
</html>