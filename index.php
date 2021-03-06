<?php
// Session start
session_start();
  
// Condition if not logged in, redirect to login page
// Renewed into a login button that will appear, refer to line 50-52
/* if (!isset($_SESSION['session_user'])) {
    $_SESSION['msg'] = "You have to log in first";
} */
  

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['session_user']);
    setcookie("user", "", time() - 3600);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<!-- Template by html.am -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata:400">
		<link rel="stylesheet" type="text/css" href="css/general.css" />
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <title>Seek Stack</title>
	</head>
	
	<body>		

		<header id="header">
            <div class="container">
                <div class="header">
                    <div id="logo">
                        <h1>Seek Stack</h1>
                    </div>
                    <nav class="nav">
                        <a href="#" class="link">Home</a>
                        <a href="search_page.php" class="link"><b>Company Lookup</b></a>
                        <a href="index_aboutus.php" class="link">About Us</a>
                        <a href="#" class="link">Contact Us</a>
                        <?php  if (!isset($_SESSION['session_user'])) : ?>
                            <a href="login.php" class="button-login">Sign In / Sign Up</a>
                        <?php else : ?>
                            <p>
                                Welcome
                                <strong>
                                    <?php echo $_SESSION['session_user']; ?>
                                !</strong>
                            </p>
                            <p>
                                <a href="index.php?logout='1'" class="button-logout">Sign Out</a>
                            </p>
                        <?php endif ?>
                        <!-- <div class="search-box-smol">
                            <form action="search_page.php" method="post">
                                <input id="search-input-smol" type="text" name="search" placeholder="Search for..." value=""/>
                                <button class="search-btn-smol" type="submit" name="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div> -->
                    </nav>

                </div>
            </div>
		</header>
				
		<main>
			<div class="container">
                <div class="banner-image"> 
                    <div class="banner">
                        <h1>Seek Stack</h1>
                        <p class="bannerdesc">Seek Stack memberikan pandangan orang dalam tentang produk dan 
                            layanan apa yang digunakan perusahaan secara internal. 
                            Basis data produk perangkat lunak dan pelanggan yang terkemuka digunakan oleh 
                            manajer produk, pemasar, analis, dan investor yang ingin memahami tren adopsi perangkat lunak.
                        </p>
                        <a href="subscribe.php" class="subsbutton">Subscribe Now!</a>
                    </div>
                    <img src="image/banner.png"/>
                </div>
            </div>
            
            <div class="companycontent">
                <div class="container">
                    <h2 id="content-title">Mereka Menggunakan Apa?</h2>
                    <p id="content-desc">
                        Berikut adalah contoh produk dan layanan yang digunakan oleh perusahaan secara internal.
                    </p>
                    <div class="cmplist-blockset">
                        <div class="cmplist-container">
                            <div class="cmplist-upper-container">
                                <div class="cmplist-img-container">
                                    <img src="image/logo/idn_times.png">
                                </div>
                                <div class="cmplist-title-container">
                                    <h3>IDN Times</h3>
                                </div>
                            </div>
                            <div class="cmplist-lower-container">
                                <img src="image/asset/atom.png">
                                <img src="image/asset/instagram.png">
                                <img src="image/asset/git.png">
                            </div>
                        </div>
                        <div class="cmplist-container">
                            <div class="cmplist-upper-container">
                                <div class="cmplist-img-container">
                                    <img src="image/logo/tokopedia.png">
                                </div>
                                <div class="cmplist-title-container">
                                    <h3>Tokopedia</h3>
                                </div>
                            </div>
                            <div class="cmplist-lower-container">
                                <img src="image/asset/atom.png">
                                <img src="image/asset/instagram.png">
                                <img src="image/asset/git.png">
                            </div>
                        </div>
                        <div class="cmplist-container">
                            <div class="cmplist-upper-container">
                                <div class="cmplist-img-container">
                                    <img src="image/logo/gojek.png">
                                </div>
                                <div class="cmplist-title-container">
                                    <h3>Gojek</h3>
                                </div>
                            </div>
                            <div class="cmplist-lower-container">
                                <img src="image/asset/atom.png">
                                <img src="image/asset/instagram.png">
                                <img src="image/asset/git.png">
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
 
            <div class="price">
                <h2 id="content-title">Harga Langganan</h2>
                <p id="content-desc">
                    Kenali lebih lanjut dengan memilih paket yang sesuai kebutuhan Anda.
                </p>
                <div class="price-containers">
                    <div class="price-container" id="price-monthly" >
                        <h3>Monthly</h3>
                        <p>RP.<span class="price-nominal"> 75</span> <sup>.000</sup></p>
                            <div class="list-price">
                                <ul class="unchecked-list">
                                    <li>Ideal for getting started</li>
                                    <li>All access to company info</li>
                                    <li>Analytics included</li>
                                </ul>
                            </div>
                            <a href="subscribe.php" class="button-get-started" id="button-monthly">Get Started</a>
                    </div> 

                    <div class="price-container" id="price-yearly" >
                        <h3>Yearly</h3>
                        <p>RP.<span class="price-nominal"> 120</span> <sup>.000</sup></p>
                            <div class="list-price">
                                <ul class="checked-list">
                                    <li>Ideal for long-term plan</li>
                                    <li>Best discount offer</li>
                                    <li>More detailed analytics</li>
                                </ul>
                            </div>
                            <a href="subscribe.php" class="button-get-started" id="button-yearly">Get Started</a>
                    </div> 
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

       <!-- <script src="js/index.js"></script> -->
	</body>
</html>
