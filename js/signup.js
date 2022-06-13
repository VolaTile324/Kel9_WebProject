function checkPassword() {
    var pwValue = document.getElementById("password").value;
    var setMessage = document.getElementById("pwmessage");
    // Cek kalau kosong
    if(pwValue == "") {
       setMessage.innerHTML = "** Mohon isi password Anda!";
       return false;
    }
   
   // Kalau kurang dari 8 char
    if(pwValue.length < 8) {
       setMessage.innerHTML = "**Panjang password minimal 8 karakter";
       return false;
    }
  
  // Kalau lebih dari 15 char
    if(pwValue.length > 15) {
       setMessage.innerHTML = "**Panjang password maksimal 15 karakter";
       return false;
    } else {
      window.open("login.php", "_self");
    }
  }