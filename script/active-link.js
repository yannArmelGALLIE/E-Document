const navLinks = document.querySelectorAll("header .menu .links li a");
const activePage = window.location.pathname;

navLinks.forEach(link => {
    if(link.href.includes(`${activePage}`)) {
        link.classList.add('active')
    }
});