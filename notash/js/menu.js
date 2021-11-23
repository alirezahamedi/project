var $ = document;
const menuBurger = $.querySelector('#menu-burger');
const sideBar = $.querySelector('#sidebar');
const btnClose = $.querySelector('#btn-close');
var bool = true;
menuBurger.addEventListener('click', () => {
    if (bool === true) {
        sideBar.style.right = 0;
        $.body.style.opacity = '0.9';
        bool = false;
    }
})
btnClose.addEventListener('click', () => {
    if (bool === false) {
        sideBar.style.right = '-100%';
        $.body.style.opacity = '1';
        bool = true;
    }
})