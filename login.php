<!DOCTYPE html>
<!-- Template by html.am -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata:400">
		<link rel="stylesheet" type="text/css" href="css/general.css" />
        <link rel="stylesheet" type="text/css" href="css/login.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <script src="js/login.js"></script>
        <title>Seek Stack | Login</title>
	</head>
	
	<body>		

		<header id="header">
            <div class="container">
                <div class="header">
                    <div id="logo">
                        <h1>Seek Stack</h1>
                    </div>
                </div>
            </div>
		</header>
				
		<main>
           <div class="login-container">
                <h1 class="login-header">Sign In</h1>
                <!-- <form id="login-form">
                    <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Username">
                    <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password">
                    <input type="submit" value="Login" id="login-form-submit">
                </form> -->

                <form action="db_validate_login.php" method="post">
                    <div class="margin-bottom15px">
                      <label for="username" >Username</label>
                      <input type="text" name="username" id="username" required>
                    </div>
                    <div class="margin-bottom15px">
                      <label for="password" >Password</label>
                      <input type="password" name="password" id="password" required>
                    </div>
                    <button type="submit" class="button-signin">Sign In</button>
                                       
                </form>
                <div class="signup-box">
                    Don't have an account? <a href="signup.html">Sign Up</a>
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
	</body>
</html>