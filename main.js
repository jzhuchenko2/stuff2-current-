const menu = document.querySelector('#mobile-menu')
const menuLinks = document.querySelector('.navbar__menu')

menu.addEventListener('click', function(){
    menu.classList.toggle('is-active');
    menuLinks.classList.toggle('active');
});

const faders = document.querySelectorAll('.logos-fade-in');

const appearOptions ={
    threshold: 1,
    rootMargin: "0px 0px -200px 0px"
};

const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
    entries.forEach(entry => {
        if (!entry.isIntersecting){
            return;
        } else {
            entry.target.classList.add('appear');
            appearOnScroll.unobserve(entry.target);
        }
    })
}, appearOptions);

faders.forEach(fader => {
    appearOnScroll.observe (fader);
})
faders.forEach(fader)




let toggle = document.querySelector("#header .toggle-button");
let collapse = document.querySelectorAll("#header .collapse");
toggle.addEventListener('click' , function(){
    collapse.forEach(col => col.classList.toggle("collapse-toggle"));
})
// with masonry
new Masonry("#posts .grid", {
    itemSelector : '.grid-item',
    gutter : 60
});
// swiper libray initialization
new Swiper('.swiper-container', {
    direction : 'horizontal',
    loop : true,
    slidesPerView : 5,
    autoplay : {
        delay : 3000
    },
    // responsive brakpoints
    breakpoints : {
        '@0' : {
            slidesPerView : 2
        },
        // 888px
        '@1.00' : {
            slidesPerView : 3
        },
        // 1110px
        '@1.25' : {
            slidesPerView : 4
        },
        // 1330px
        '@1.50' : {
            slidesPerView: 5
        }
    }
})
// Sticky Navigation

function myFunction(){
if(window.pageYOffset >= sticky){
    navbar. classList.add("sticky");}
    else{
        navbar.classList.remove("sticky");
    }
    }
    }
}
};
window.onscroll = function(){ myFunction()};
// get the current value
let navbar = document.getElementById("header");
// get the navbar position
let sticky = navbar.offsetTop;
// sticky function
function myFunction(){
    if(window.pageYOffset >= sticky){
        navbar.classList.add("sticky");
    }else{
        navbar.classList.remove("sticky");
    }
}
