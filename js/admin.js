

//Definisi variable elemen di css
const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");

//Cek mode tampilan terakhir yang digunakan
let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    body.classList.toggle("dark");
}

//Cek apakah ada mode yang dikirim dari local storage
let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}

//Fungsi untuk mengubah tampilan menjadi dark mode dengan cara
//Menambahkan atribut 'dark' di tag body html
modeToggle.addEventListener("click", () =>{
    body.classList.toggle("dark");
    //Menyimpan settingan mode pada local storage user
    if(body.classList.contains("dark")){
        localStorage.setItem("mode", "dark");
    }else{
        localStorage.setItem("mode", "light");
    }
});

//Fungsi untuk mengubah sidebar menjadi menutup dengan cara
//Menambahkan atribut 'close' di tag sidebar html
sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    //Menyimpan settingan status pada local storage user
    //Jika sidebar ditutup maka status = close
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        //Jika sidebar dibuka maka status = open
        localStorage.setItem("status", "open");
    }
})