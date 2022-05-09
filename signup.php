<!-- To do: Create entry on database after signup process! -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Signup.css">
    <link rel="stylesheet" type="text/css" href="css/general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata:400">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>        
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="js/signup.js"></script>
    <title>Sign Up</title>
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
        <div class="signup-container">
            <h1 class="signup-header">Sign Up</h1>
            <form action="javascript:checkPassword()">
                <div class="input-field">
                    <label for="username" >Username</label>
                    <input type="text" id="username" placeholder="username" required>     
                    <div class="icon"><i class="fa fa-user"></i></div>
                </div>
                <div class="input-field">
                    <label for="email" >Email</label>
                    <input type="email" id="email" placeholder="example@email.com" required>     
                    <div class="icon"><i class="fa fa-envelope"></i></div>
                </div>
                <div class="input-field">
                    <label for="password" >Password</label>
                    <input type="password" id="password" placeholder="password" required>     
                    <div class="icon"><i class="fa fa-key"></i></div>
                </div>
                    <p id="pwmessage"></p>
                <button type="submit" class="button-signup">Sign Up</button>
            </form>
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