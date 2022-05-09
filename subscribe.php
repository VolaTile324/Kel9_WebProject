<?php
// Session start
session_start();
  
// Condition if not logged in, redirect to login page
if (!isset($_SESSION['session_user'])) {
    $_SESSION['msg'] = "You have to log in first";
}
  
// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['session_user']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/subscribe.css">
    <link rel="stylesheet" type="text/css" href="css/general.css">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata:400">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>        
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script defer src="#"></script>
    <title>Subscribe</title>
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

    <div class="subs-container">
        <form action="index.php">
            <h1>Subsribe</h1>
            <div class="subs-img">
                <img src="image/subs-img.jpg" alt="">
            </div>
            <div class="input-field">
                <label>Card Number</label>
                <input type="text" maxlength="16" class="card-number-input" required>
                <label>Card Holder</label>
                <input type="text" class="card-holder-input" required>
                <label>CVV</label>
                <input type="text" maxlength="4" class="cvv-input" required>
            </div>
            <div class="input-field-flex">
                <div class="input-field">
                    <label>Expiration mm</label>
                    <select class="month-input">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <div class="input-field">
                    <label>Expiration yy</label>
                    <select class="year-input">
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                    </select>
                </div>
                <div class="input-field">
                    <label>Subscription</label>
                    <select class="type-subs-input">
                        <option value="75k">Monthly</option>
                        <option value="120k">Yearly</option>
                    </select>
                </div>
            </div>
            <div class="input-field">
                <label>Voucher</label>
                <input type="text" maxlength="10" class="voucher-input">
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
        <br>
    </div>
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