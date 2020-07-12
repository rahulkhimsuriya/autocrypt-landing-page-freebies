// Navbar
let navBtn = document.querySelector('.--nav-button');
let nav = document.querySelector('nav');

navBtn.addEventListener('click', () => {
    if (nav.classList.contains('hidden')) {
        nav.classList.remove('hidden');
        nav.classList.add('flex');

        document.getElementsByClassName('material-icons')[0].innerText =
            'close';
    } else {
        nav.classList.remove('flex');
        nav.classList.add('hidden');

        document.getElementsByClassName('material-icons')[0].innerText = 'menu';
    }
});

// Flickity
var elem = document.querySelector('.--testimonials-carousel');
var flkty = new Flickity(elem, {
    // options
    cellAlign: 'right',
    contain: true,
    prevNextButtons: false,
    autoPlay: true,
});
