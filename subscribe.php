<?php
// Session start
session_start();
include 'dbconnect.php';

  
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

if (isset($_POST["subscribe"])){
    $username = $_SESSION["session_user"];
    $card_number = $_POST["card_number"];
    $pin = $_POST["pin"];
    $type = $_POST["type-subs"];

    $query = mysqli_query($conn, "SELECT * FROM nasabah WHERE nomor_kartu = '$card_number' AND pin = '$pin'");
    $numrows=mysqli_num_rows($query);
        if($numrows === 1){       
            while($row=mysqli_fetch_assoc($query)){
                $db_card_number = $row['nomor_kartu'];
                $db_pin = $row['pin'];
                $_SESSION['nomor_kartu'] = $db_card_number;
                $_SESSION['pin'] = $db_pin;
            }
                //cek card number dan pin
                if($card_number == $db_card_number && $pin == $db_pin){
                        $query_subs = mysqli_query($conn, "CALL subscribe('$username', '$card_number', '$pin', '$type', @pesan)");
                        if($query_subs){
                            $result = mysqli_query($conn, "SELECT @pesan as pesan");
                            $hasil_trans = mysqli_fetch_assoc($result);
                            $pesan = $hasil_trans['pesan'];
                            $_SESSION['pesan'] = $hasil_trans['pesan'];

                            if($pesan == 1){
                                echo "<script type='text/javascript'> 
                                        window.alert('System Error, Try Later!');
                                        window.location.href = 'subscribe.php';
                                        </script>";
                            }elseif($pesan == 2){
                                echo "<script type='text/javascript'> 
                                        window.alert('Card is not valid!');
                                        window.location.href = 'subscribe.php';
                                        </script>";
                            }elseif($pesan == 3){
                                echo "<script type='text/javascript'> 
                                        window.alert('Not enough Balance!');
                                        window.location.href = 'subscribe.php';
                                        </script>";
                            }elseif($pesan == 4){
                                //cek type of subscription and set cookie
                                if($type == 75000){
                                    setcookie("subscribe-monthly", true, time()+(30*24*3600));//Monthly
                                }else{
                                    setcookie("subscribe-yearly", true, time()+(12*30*24*3600));//Yearly
                                }
                                echo "<script type='text/javascript'> 
                                        window.alert('Transaction succes!');
                                        window.location.href = 'index.php';
                                        </script>";
                            }
                            
                        }else{
                            echo "<script type='text/javascript'> 
                                        window.alert('Failed to Subscribe');
                                        window.location.href = 'subscribe.php';
                                        </script>";
                        }
                    }
        }
        else 
        {
            echo "<script type='text/javascript'> 
                    alert('Card is not valid!') ;
                    window.location.href = 'subscribe.php';
                    </script>";
        }
        //}

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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="subs.js"></script>
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

    <div class="container">
        <div class="subs-img">
            <img src="image/subs-img.jpg" alt="">
        </div>
        <div class="subs-container">
            <h1 class="subs-header">Subscribe</h1>
            <form action="" method="post">
                <div class="input-field">
                    <label>Card Number</label>
                    <input type="text" maxlength="16" class="card-number-input" placeholder="Input card number" name="card_number" required>
                </div>
                <div class="input-field">
                <label>PIN</label>
                    <input type="password" maxlength="6" class="cvv-input" placeholder="Input PIN" name="pin" required>
                </div>
                <div class="input-field-radio">
                    <label>Subscription</label>
                    <input type="radio" name="type-subs" id="type-subs" value="75000" required>Monthly
                    <input type="radio" name="type-subs" id="type-subs" value="120000" required>Yearly
                </div>
                <p id="subs-message"></p>
                <button type="submit" class="submit-btn" name="subscribe">Subscribe</button>
            </form>
            <br>
        </div>
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