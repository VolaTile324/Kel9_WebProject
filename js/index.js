function startSearch(){
    window.open("search_page.php", "_self");
}

var searchInput = document.getElementById("search-input-smol");
searchInput.addEventListener("keyup", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        startSearch();
    }
});