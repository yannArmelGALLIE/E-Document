const burgerMenuButton = document.querySelector(".burger-menu-button");
const burgerMenu = document.querySelector(".burger-menu");

burgerMenuButton.addEventListener("click", () => {
    burgerMenu.classList.toggle("open")
    const isOpen = burgerMenu.classList.contains("open")
    burgerMenuButton.innerHTML = isOpen ? "<span class=\"material-symbols-outlined\">close</span>" : "<span class=\"material-symbols-outlined\">menu</span>"
})


