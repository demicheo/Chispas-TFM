console.log('Tamos ready')

/* BURGER */

const menuBurger = document.querySelector('.header__burger');
const menuNav = document.querySelector('.header__menu');

let menuOpen = false;


menuBurger.addEventListener('click', function () {

    menuOpen = !menuOpen
    console.log('botón pulsado' + menuOpen);

    if (menuOpen == true) {
        menuBurger.classList.add('pulsado');
        menuNav.classList.add('visible');

    }
    else {
        menuBurger.classList.remove('pulsado');
        menuNav.classList.remove('visible');

    }

})


/*hover del hero

const tituloHero = document.querySelector('.hero-titulo');

tituloHero.addEventListener('mouseenter', () => {
    tituloHero.classList.add('hover-wght');
    console.log('dentro!!!');
});

tituloHero.addEventListener('mouseleave', () => {
    tituloHero.classList.remove('hover-wght');
});*/


/*scroll horizontal home*/
document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.festival__ponencias');
    const cards = document.querySelectorAll('.card');
    const leftButton = document.querySelector('.scroll-button.left');
    const rightButton = document.querySelector('.scroll-button.right');

    const cardWidth = cards[0].offsetWidth + parseInt(getComputedStyle(cards[0]).marginRight);
    let scrollAmount = 0;

    function scrollLeft() {
        if (scrollAmount > 0) {
            scrollAmount -= cardWidth;
            container.scrollTo({ left: scrollAmount, behavior: 'smooth' });
        } else {
            scrollAmount = container.scrollWidth - container.clientWidth;
            container.scrollTo({ left: scrollAmount, behavior: 'smooth' });
        }
    }

    function scrollRight() {
        if (scrollAmount < container.scrollWidth - container.clientWidth) {
            scrollAmount += cardWidth;
            container.scrollTo({ left: scrollAmount, behavior: 'smooth' });

        } else {
            scrollAmount = 0;
            container.scrollTo({ left: scrollAmount, behavior: 'smooth' });
        }
    }

    leftButton.addEventListener('click', scrollLeft);
    rightButton.addEventListener('click', scrollRight);
});