function startSearch(){
    window.open("search_page.php", "_self");
}

var searchInput = document.getElementById("search-input-smol");
searchInput.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        startSearch();
    }
});