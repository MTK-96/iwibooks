const menuBtn = document.querySelector('.menu-btn');
const mobileMenu = document.querySelector('.nav-links');

menuBtn.addEventListener('click', toggleNav);

function toggleNav(e){
    e.preventDefault();
    mobileMenu.classList.toggle('active');
}
