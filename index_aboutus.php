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
        <link rel="stylesheet" type="text/css" href="css/aboutus.css" />
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
                        <a href="index.php" class="link">Home</a>
                        <a href="search_page.php" class="link"><b>Company Lookup</b></a>
                        <a href="#" class="link">About Us</a>
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
            <div class="companycontent">
                <div class="container">
                    <h2 id="content-title">KELOMPOK 9</h2>
                    <p id="content-desc">
                        SEEK STACK TEAM
                    </p>
                    <div class="cmplist-blockset">
                        <div class="cmplist-container">
                            <div class="cmplist-upper-container">
                                <div class="cmplist-img-container">
                                    <img src="image/profile-admin.png">
                                </div>
                                <div class="cmplist-title-container">
                                    <h3>Muhamad Ilham Nuari</h3>
                                </div>
                            </div>
                            <div class="cmplist-lower-container">
                                <h4>2008213</h4>
                            </div>
                        </div>
                        <div class="cmplist-container">
                            <div class="cmplist-upper-container">
                                <div class="cmplist-img-container">
                                    <img src="image/profile-admin.png">
                                </div>
                                <div class="cmplist-title-container">
                                    <h3>Nikita Sabila Ratnadewati</h3>
                                </div>
                            </div>
                            <div class="cmplist-lower-container">
                                <h4>1905758</h4>
                            </div>
                        </div>
                        <div class="cmplist-container">
                            <div class="cmplist-upper-container">
                                <div class="cmplist-img-container">
                                    <img src="image/profile-admin.png">
                                </div>
                                <div class="cmplist-title-container">
                                    <h3>Rizky Sanjaya Tandia</h3>
                                </div>
                            </div>
                            <div class="cmplist-lower-container">
                                <h4>2004324</h4>
                            </div>
                        </div>
                        <div class="cmplist-container">
                            <div class="cmplist-upper-container">
                                <div class="cmplist-img-container">
                                    <img src="image/profile-admin.png">
                                </div>
                                <div class="cmplist-title-container">
                                    <h3>Rhizka Subentar</h3>
                                </div>
                            </div>
                            <div class="cmplist-lower-container">
                                <h4>2006446</h4>
                            </div>
                        </div>
                    </div>
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
