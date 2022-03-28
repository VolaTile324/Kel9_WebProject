function checkPassword() {
    var pwValue = document.getElementById("password").value;
    var setMessage = document.getElementById("pwmessage");
    // Cek kalau kosong
    if(pwValue == "") {
       setMessage.innerHTML = "**Fill the password please!";
       return false;
    }
   
   // Kalau kurang dari 8 char
    if(pwValue.length < 8) {
       setMessage.innerHTML = "**Password length must be at least 8 characters";
       return false;
    }
  
  // Kalau lebih dari 15 char
    if(pwValue.length > 15) {
       setMessage.innerHTML = "**Password length must not exceed 15 characters";
       return false;
    } else {
      window.open("index.html", "_self");
    }
  }