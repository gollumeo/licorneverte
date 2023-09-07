import './bootstrap';

const burger = document.getElementById('burger');
const mobileMenu = document.getElementById('menu-mobile');
const cross = document.getElementById('cross');
const carousel = document.getElementById('carousel-container')

burger.addEventListener('click', () => {
    mobileMenu.classList.toggle('translate-x-0');
    carousel.classList.toggle('-z-50')
});

cross.addEventListener('click', () => {
    console.log("coucou")
    mobileMenu.classList.toggle('translate-x-0');
    carousel.classList.toggle('-z-50')
})
