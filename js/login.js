function validateInfo() {
    var username = document.getElementById("username").value
    var password = document.getElementById("password").value
    
    if(username == "" || password == "")
    {
        document.getElementById("login-message").innerHTML = "Username dan password tidak boleh kosong!";
        return false;
    }
}

// const loginForm = document.getElementById("email");
// const loginButton = document.getElementById("button-signin");
// const loginErrorMsg = document.getElementById("login-error-msg");

// // When the login button is clicked, the following code is executed
// loginButton.addEventListener("click", (e) => {
//     // Prevent the default submission of the form
//     e.preventDefault();
//     // Get the values input by the user in the form fields
//     const email = loginForm.email.value;
//     const password = loginForm.password.value;

//     if (email === "user" && password === "web_dev") {
//         // If the credentials are valid, show an alert box and reload the page
//         alert("You have successfully logged in.");
//         location.reload();
//     } else {
//         // Otherwise, make the login error message show (change its oppacity)
//         loginErrorMsg.style.opacity = 1;
//     }
// })