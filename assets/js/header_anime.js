const title = document.getElementById('header_titre');
const span_1 = document.querySelectorAll('p span');
const btns = document.querySelectorAll('header button');
const logo = document.querySelectorAll('nav span')
const span_2 = document.querySelectorAll('section.section_intro p');
/* const panier = document.getElementById('panier'); */
console.log(span_2);

window.addEventListener('load', () => {
    const TL = gsap.timeline({ paused: true });
    TL
        .staggerFrom(span_1, 1, { top: -50, opacity: 0, ease: "power2.out" }, 0.3)
        .staggerFrom(btns, 1, { opacity: 0, ease: "power2.out" }, 0.3, '-=1')
        .from(logo, 1, { transform: "scale(0)", ease: "power2.out" }, 0.3, '-=1')
        .from(panier, 1, { transform: "scale(0)", ease: "power2.out" }, 0.3, '-=1')
        .staggerFrom(span_2, 1, { top: -50, opacity: 0, ease: "power2.out" }, 0.3, '-=1.5')
    TL.play();



});