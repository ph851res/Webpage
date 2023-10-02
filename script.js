const menuButton = document.getElementsByClassName('checkbtn')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

menuButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
})