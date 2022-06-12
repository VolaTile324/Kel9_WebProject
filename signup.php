<!-- To do: Create entry on database after signup process! -->
<?php
    
$showAlert = false; 
$showError = false; 
$exist=false;
$validatePassword="";
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'dbconnect.php';   
    
    $username = $_POST["username"]; 
    $email = $_POST["email"]; 
    $password = $_POST["password"]; 

    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);

    $sql = "Select * from users where username='$username' OR email='$email'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 
    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num == 0) {
        if(strlen($password) < 8 || !$number || !$uppercase ) {
            $validatePassword = "Kata sandi harus memiliki panjang minimal 8 karakter dan harus mengandung setidaknya satu angka dan satu huruf besar.";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
                
            // Password Hashing is used here. 
            $sql = "INSERT INTO `users` ( `username`, `email`, `role`, 
                `password`, `date`) VALUES ('$username', '$email', '1', 
                '$hash', current_timestamp())";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo $password;
                echo "<br>";
                echo $hash;
            }
        }      
    }// end if 
    
   if($num>0) 
   { 
      $exist="Username atau email sudah terdaftar";
   } 
    
}//end if   
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link rel="stylesheet" type="text/css" href="css/general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata:400">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>        
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <!-- <script src="js/signup.js"></script> -->
    <title>Sign Up</title>
</head>
<body>
<?php
    
    if($showError) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '. $showError.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
   }
   
?>
    <header id="header">
        <div class="container">
            <div class="header">
                <div id="logo">
                    <a href="index.php"><h1>Seek Stack</h1></a>
                </div>
            </div>
        </div>
    </header>
    
    <main>
        <div class="signup-container">
            <h1 class="signup-header">Sign Up</h1>
            <form method="POST">
                <div class="input-field">
                    <label for="username" >Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" required>     
                    <div class="icon"><i class="fa fa-user"></i></div>
                </div>
                <div class="input-field">
                    <label for="email" >Email</label>
                    <input type="email" name="email" id="email" placeholder="example@email.com" required>     
                    <div class="icon"><i class="fa fa-envelope"></i></div>
                </div>
                <div class="input-field">
                    <label for="password" >Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" required>     
                    <div class="icon"><i class="fa fa-key"></i></div>
                </div>
                <p id="pwmessage">
                    <?php echo $validatePassword?> <br/>
                    <?php
                        if($exist) {
                            echo '<strong>Error!</strong> '. $exist.''; 
                        }
                    ?>
                </p>
                
                
                <button type="submit" class="button-signup">Sign Up</button>
            </form>
            <div class="login-box">
                Already have an account? <a href="login.php">Login</a>
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