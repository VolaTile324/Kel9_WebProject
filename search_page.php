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
                    <div class="search-box">
                        <div class="dropdown-menu" onclick="showDropdown()">
                            <div id="dropdown-default">Categories</div>
                            <div id="dropdown-list">
                                <ul>
                                    <li onclick="setBlog()">Blog</li>
                                    <li onclick="setForum()">Forum</li>
                                    <li onclick="setNews()">News</li>
                                    <li onclick="setShopping()">Shopping</li>
                                    <li onclick="setTravel()">Travel</li>
                                </ul>
                            </div>
                        </div>
                        <div class="search-form">
                            <input id="search-input" type="text" placeholder="Search for..." value=""/>
                            <i class="fa fa-search" onclick="initSearch()"></i>
                        </div>    
                    </div>
                </div>
            </div>

            <div id="modal-idn" class="modal" onclick="closeModal()">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <div class="modal-pic-style">
                        <img src="image/logo/idn_times.png" alt="modal-idn-picture" />
                    </div>
                    <h1>IDN Times</h1>
                    <p>
                        IDN Times is a leading Indonesia news media, 
                        publishing news and information on the latest events in Indonesia.
                        <br><br>
                        It was founded in 2014 from parent organization of IDN Media, 
                        usually consisting news closely related to Millenials and Gen-Z.
                    </p>
                    <button class="modal-company-btn">Learn More</button>
                </div>
            </div>

            <div id="modal-tokopedia" class="modal" onclick="closeModal()">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <div class="modal-pic-style">
                        <img src="image/logo/tokopedia.png" alt="modal-tokopedia-picture" />
                    </div>
                    <h1>Tokopedia</h1>
                    <p>
                        Tokopedia is an online marketplace that allows people to shop their favorite 
                        items easily through the Internet.
                        <br><br>
                        It was founded in 2009 by William Tanuwijaya, this online marketplace recently 
                        merged with Gojek, forming the new enterprise known as GoTo Group.
                    </p>
                    <button class="modal-company-btn">Learn More</button>
                </div>
            </div>

            <div id="modal-gojek" class="modal" onclick="closeModal()">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <div class="modal-pic-style">
                        <img src="image/logo/gojek.png" alt="modal-gojek-picture" />
                    </div>
                    <h1>Gojek</h1>
                    <p>
                        Gojek is an online delivery service that connects people with goods and services 
                        through motorcycle transport.
                        <br><br>
                        It was founded in 2010 by Nadiem Makarim, Gojek adopted Super App model, providing
                        even more services not only as delivery services, but also online payment.
                    </p>
                    <button class="modal-company-btn">Learn More</button>
                </div>
            </div>
            
            <!-- <div class="result-background">
                <div class="result-wrapper" id="entry1-idntimes">
                    <div class="result-img">
                        <img src="image/logo/idn_times.png" alt="result-img" />
                    </div>
                    <div class="result-content">
                        <div class="result-title" onclick="openModalIDN()">IDN Times</div>
                            <a href="#" class="result-tags">Blog</a>
                            <a href="#" class="result-tags">News</a>
                            <p>
                                IDN Times is a leading Indonesian news media, 
                                publishing news and information on the latest events in Indonesia.
                            </p>
                            <div class="result-assets">
                                <img src="image/asset/atom.png" alt="result-assets-1" />
                                <img src="image/asset/git.png" alt="result-assets-2" />
                                <img src="image/asset/instagram.png" alt="result-assets-3" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="result-wrapper" id="entry2-tokopedia">
                    <div class="result-img">
                        <img src="image/logo/tokopedia.png" alt="result-img" />
                    </div>
                    <div class="result-content">
                        <div class="result-title" onclick="openModalTokopedia()">Tokopedia</div>
                            <a href="#" class="result-tags">Shopping</a>
                            <p>
                                Tokopedia is a leading online marketplace for Indonesia's 
                                largest and fastest growing retail market.
                            </p>
                            <div class="result-assets">
                                <img src="image/asset/atom.png" alt="result-assets-1" />
                                <img src="image/asset/git.png" alt="result-assets-2" />
                                <img src="image/asset/instagram.png" alt="result-assets-3" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="result-wrapper" id="entry3-gojek">
                    <div class="result-img">
                        <img src="image/logo/gojek.png" alt="result-img" />
                    </div>
                    <div class="result-content">
                        <div class="result-title" onclick="openModalGojek()">Gojek</div>
                            <a href="#" class="result-tags">Travel</a>
                            <a href="#" class="result-tags">Shopping</a>
                            <p>
                                Gojek is a leading online transportation for Indonesia's 
                                daily transportation and delivery needs.
                            </p>
                            <div class="result-assets">
                                <img src="image/asset/atom.png" alt="result-assets-1" />
                                <img src="image/asset/git.png" alt="result-assets-2" />
                                <img src="image/asset/instagram.png" alt="result-assets-3" />
                            </div>
                        </div>
                    </div>
                </div>
                            onclick="openModal'.$row['id'].'()"
            </div> -->
            <div class="result-background">
                <?php
                    $search_query = "SELECT * FROM daftar_perusahaan";
                    $search_result = mysqli_query($conn, $search_query);
                    while($row = mysqli_fetch_array($search_result)){
                        echo '
                            <div class="result-wrapper" id="entry'.$row['id_perusahaan'].'">
                                <div class="result-img">
                                    <img src="image/logo/'.$row['logo'].'" alt="result-img" />
                                </div>
                                
                                <div class="result-content">
                                    <div class="result-title">'.$row['nama'].'</div>
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