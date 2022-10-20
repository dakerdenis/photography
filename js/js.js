"use strict"

const isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i);
    },
    BlacBerry: function () {
        return navigator.userAgent.match(/BlacBerry/i);
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
        return (
            isMobile.Android() ||
            isMobile.BlacBerry() ||
            isMobile.iOS() ||
            isMobile.Opera() ||
            isMobile.Windows());

    }
};

if (isMobile.any()) {
    document.body.classList.add('_touch');
} else {
    document.body.classList.add('_pc');
}



// Меню бургер
// Меню бургер
// Меню бургер
const iconMenu = document.querySelector('.burger__menu_wrapper');
const menuBody = document.querySelector('.menu__body');



iconMenu.addEventListener('click', function onClick() {

    menuBody.classList.add('_active');

    document.body.classList.add('_lock');
});



const closeMenu = document.querySelector('.header_button');
closeMenu.addEventListener('click', function onClick2() {

    menuBody.classList.remove('_active');

    document.body.classList.remove('_lock');
});