const navigation = document.getElementById('nav');
console.log(navigation);
const ul = document.getElementById('ul');

const tendency = document.getElementById('tendency');
const news = document.getElementById('new');
const connect = document.getElementById('connect');
const panier = document.getElementById('panier');

const logo_1 = document.getElementById('logo_1');
const logo_2 = document.getElementById('logo_2');
const logo_3 = document.getElementById('logo_3');

window.onload = function exampleFunction() {
    if (window.scrollY > 500) {
        /* Logo */
        logo_1.classList.add('logo_1_bottom');
        logo_2.classList.add('logo_2_bottom');
        logo_3.classList.add('logo_2_bottom');
        /* Nav */
        navigation.classList.add('menu_anime_bottom');
        /* ul */
        tendency.classList.add('a_anime_bottom');
        news.classList.add('a_anime_bottom');
        connect.classList.add('a_anime_bottom');
        panier.classList.add('a_anime_bottom');
        /* Btn */
        connect.classList.add('menu_btn_bottom');
    } else {
        /* Logo */
        logo_1.classList.add('logo_1_top');
        logo_2.classList.add('logo_2_top');
        logo_3.classList.add('logo_2_top');
        /* Nav */
        navigation.classList.add('menu_anime_top');
        /* ul */

        tendency.classList.add('a_anime_top');
        news.classList.add('a_anime_top');
        connect.classList.add('a_anime_top');
        panier.classList.add('a_anime_top');
        connect.classList.add('menu_btn_top');


    }
}

window.addEventListener('scroll', () => {
    if (window.scrollY > 500) {
        /* Logo */
        logo_1.classList.remove('logo_1_top');
        logo_1.classList.add('logo_1_bottom');

        logo_2.classList.remove('logo_2_top');
        logo_2.classList.add('logo_2_bottom');

        logo_3.classList.remove('logo_2_top');
        logo_3.classList.add('logo_2_bottom');
        /* Nav */
        navigation.classList.remove('menu_anime_top');
        navigation.classList.add('menu_anime_bottom');
        /* Ul */
        tendency.classList.remove('a_anime_top');
        tendency.classList.add('a_anime_bottom');

        news.classList.remove('a_anime_top');
        news.classList.add('a_anime_bottom');

        connect.classList.remove('a_anime_top');
        connect.classList.add('a_anime_bottom');

        panier.classList.remove('a_anime_top');
        panier.classList.add('a_anime_bottom');
        /* Btn */
        connect.classList.remove('menu_btn_top');
        connect.classList.add('menu_btn_bottom');
    } else {
        /* Logo */
        logo_1.classList.remove('logo_1_bottom');
        logo_1.classList.add('logo_1_top');

        logo_2.classList.remove('logo_2_bottom');
        logo_2.classList.add('logo_2_top');

        logo_3.classList.remove('logo_2_bottom');
        logo_3.classList.add('logo_2_top');
        /* Nav */
        navigation.classList.remove('menu_anime_bottom');
        navigation.classList.add('menu_anime_top');
        /* ul */
        tendency.classList.remove('a_anime_bottom');
        tendency.classList.add('a_anime_top');

        news.classList.remove('a_anime_bottom');
        news.classList.add('a_anime_top');

        connect.classList.remove('a_anime_bottom');
        connect.classList.add('a_anime_top');

        panier.classList.remove('a_anime_bottom');
        panier.classList.add('a_anime_top');

        /* Btn */
        connect.classList.remove('menu_btn_bottom');
        connect.classList.add('menu_btn_top');
    }

});