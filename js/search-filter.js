function showDropdown(){
    var dropdown = document.getElementById("dropdown-list");
    if (dropdown.style.display === "block") {
        dropdown.style.display = "none";
      } else {
        dropdown.style.display = "block";
      }
}

function setBlog(){
    document.getElementById("dropdown-default").textContent = "Blog";
}

function setForum(){
    document.getElementById("dropdown-default").textContent = "Forum";
}

function setNews(){
    document.getElementById("dropdown-default").textContent = "News";
}

function setShopping(){
    document.getElementById("dropdown-default").textContent = "Shopping";
}

function setTravel(){
    document.getElementById("dropdown-default").textContent = "Travel";
}

function initSearch(){
    alert(document.getElementById("search-input").value + " on " + document.getElementById("dropdown-default").textContent + " is searched");
}
