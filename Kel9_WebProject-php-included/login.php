<?php
    session_start();
    $connect = mysqli_connect("localhost", "root", "") or die ("Koneksi DBMS Gagal");
    mysqli_select_db($connect, "stack_login") or die("Koneksi ke Database Login Gagal");


    //cek cookie
    if( isset($_COOKIE['user'])) {
	    //$id = $_COOKIE['id'];
	    $user = $_COOKIE['user'];

	    // ambil username berdasarkan id
	    $result = mysqli_query($connect, "SELECT username FROM userdata WHERE username = '$user'");
	    $row = mysqli_fetch_assoc($result);
        if($row['username'] == $user){
            //$_SESSION['session_username'] = $cookie_username;
            //$_SESSION['session_password'] = $cookie_password;
            $_SESSION['login'] = true;
            $_SESSION['session_user'] = $user;
        }
    }

    //cek apakah sudah login
    if (isset($_SESSION['session_user'])){
        header("Location: index.php");
    }

    if(isset($_POST["submit"])){
        if(!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
                        
            $query = mysqli_query($connect, "SELECT * FROM userdata WHERE username = '$username' AND password = '$password'");
            $numrows=mysqli_num_rows($query);
            if($numrows!=0)
            {
                while($row=mysqli_fetch_assoc($query))
                {
                    $dbusername=$row['username'];
                    $dbpassword=$row['password'];
                    $dbrole=$row['role'];
                }
                //cek username dan password dan role
                if($username == $dbusername && $password == $dbpassword && $dbrole == "1")
                    {
                        $_SESSION['session_user'] = $username;
                        $_SESSION['user_type'] = 1;
                        $_SESSION['login'] = true;

                        //cek remember me
			            if(isset($_POST["remember"])){
				            //buat cookie
				            //setcookie("id", $row["id"], time()+(60 * 2));
                            setcookie("user", $dbusername, time()+(60 * 2));
			            }

                        header("Location: index.php");
                    }

                    else if($username == $dbusername && $password == $dbpassword && $dbrole == "2")
                    {
                        $_SESSION['session_user']=$username;
                        $_SESSION['user_type'] = 2;
                        $_SESSION['login'] = true;

                        //cek remember me
			            if(isset($_POST["remember"])){
				            //buat cookie
				            //setcookie("id", $row["id"], time()+(60 * 2));
                            setcookie("user", $dbusername, time()+(60 * 2));
			            }
			            
                        header("Location: admin.php");
                    }
            }
            else 
            {
                echo "<script>
                    document.getElementById(#login-message).innerHTML = 'Username dan password salah!';
                    </script>";
            }
        }
    }


    
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata:400">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/general.css" />
        <link rel="stylesheet" type="text/css" href="css/login.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <script src="js/login.js"></script>
        <title>Seek Stack</title>
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
                <p id="login-message"></p>

                <form action="" onSubmit="return validateInfo()" method="post">
                    <div class="input-field">
                      <label for="username" >Username</label>
                      <input type="text" name="username" id="username" placeholder="Username">
                      <div class="icon"><i class="fa fa-user"></i></div>
                    </div>
                    <div class="input-field">
                      <label for="password" >Password</label>
                      <input type="password" name="password" id="password" placeholder="Password">
                      <div class="icon"><i class="fa fa-key"></i></div>
                    </div>
                    <div class = "input-field-checkbox">
                      <input type="checkbox" name="remember" id="remember">
                      <label for="remeber">Remember me</label>
                    </div>
                    <button type="submit" name="submit" class="button-signin">Sign In</button>                                       
                </form>
                <div class="signup-box">
                    Don't have an account? <a href="signup.php">Sign Up</a>
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
