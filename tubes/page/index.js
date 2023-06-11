const body = document.querySelector('body'),
    sidebar = body.querySelector('nav'),
    toggle = body.querySelector(".toggle");


toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
});

const keyword = document.getElementById('keyword');
const searchContainer = document.getElementById('search-container');

keyword.onkeyup = function () {
    fetch('ajax/search.php?keyword=' + keyword.value)
        .then((Response) => Response.text())
        .then((text) => (searchContainer.innerHTML = text));
};