// scroll disable and enable
function disableScroll() {
    document.body.classList.
    add("stop-scrolling");
}

function enableScroll() {
    document.body.classList
    .remove("stop-scrolling");
}

// sticky content after scrolling to top
const nav = document.querySelector('.hero-navbar');
const txt_clr_cng = document.querySelectorAll('.container-fluid .text-white');

window.addEventListener('scroll', fixNav);

function fixNav() {
    if (window.scrollY > nav.offsetHeight + 30) {
        nav.classList.add('fixed-top', 'bg-white');
    } else {
        nav.classList.remove('fixed-top', 'bg-white');
    }
}

// change icon, background color
const notCollapsed = document.querySelector('.navbar-toggler');
const navbar = document.querySelector('.navbar');

notCollapsed.addEventListener("click", () => {

    if (notCollapsed.attributes['class'].nodeValue.search("collapsed") == -1) {
        notCollapsed.childNodes[1].childNodes[0].classList.replace('fa-bars', 'fa-xmark');
        navbar.classList.replace('bg-transparent', 'bg-white');

        txt_clr_cng.forEach(e => {
            e.classList.replace('text-white', 'text-black');
        });
        disableScroll();
    }
    else {
        notCollapsed.childNodes[1].childNodes[0].classList.replace('fa-xmark', 'fa-bars');
        navbar.classList.replace('bg-white', 'bg-transparent');

        txt_clr_cng.forEach(e => {
            e.classList.replace('text-black', 'text-white');
        });

        enableScroll();
    }
});

// media query support 
function mediaQuery(y) {
    const heroCont = document.querySelector('.hero-container');

    if (y.matches) {
        // heroCont.children[1].classList.replace('w-75', 'w-100');

        // text color change when content is sticky content after scrolling top to bottom and vice versa
        window.addEventListener('scroll', fixNav);
        function fixNav() {
            if (window.scrollY > nav.offsetHeight + 30) {
                txt_clr_cng.forEach(e => {
                    e.classList.replace('text-white', 'text-black');
                });
            } else {
                txt_clr_cng.forEach(e => {
                    e.classList.replace('text-black', 'text-white');
                });
            }
        }

    } else {
        // heroCont.children[1].classList.replace('w-100', 'w-75');

    }
}

var y = window.matchMedia("(min-width: 992px)")

mediaQuery(y);

y.addEventListener("change", function () {
    mediaQuery(y);
});

