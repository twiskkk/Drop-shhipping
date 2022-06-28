<?php
session_start();
include './assets/php/formulaires.php';
if(!empty($_SESSION ) && (!empty($_SESSION['panie1'])) && (!empty($_SESSION['panie1']))){
    $panier = $_SESSION['panier1'] + $_SESSION['panier2'];

}
else{
$panier =0;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Design</title>
    <link rel="stylesheet" href="assets/css/styles.css" type="text/css">
</head>
<body class="body">
        <nav class="menu " id="nav">
        <?php
            if(empty($_SESSION)){
                menu_visiteur();
            }
            else{
                menu_connecter();
            }
            ?>
        </nav>
        <header class="header">
            <h1 class="header_titre" id='header_title'>Hostips</h1>
            <p class="header_texte">
                <span>Welcome to Hostips,</span>
                <span > the site</span>
                <span > for good deals</span>
            </p>
            </br>
            <button class="header_button1">New</button>
            <button class="header_button2">Tendency</button>
        </header>
        <article>
            <section class="section_intro">
                <p class="section_intro_titre">Trending items</p>
                <p class="section_intro_contenue">here are the favorite items of our customers.</p>
            </section>


            <!-- Article 1 -->
            <section class="article_1">
                <p class="article_1_img"></p>
                <div class="card">
                    <div class="card_text">
                        <h1 class="article_nom">Air force 1 </h1>
                        <div class='sale_1'>Sale</div>
                        <!-- Rating -->
                        <div class="rating">
                            <a href="#1" title="Donner 1 étoile">☆</a>
                            <a href="#2" title="Donner 2 étoiles">☆</a>
                            <a href="#3" title="Donner 3 étoiles">☆</a>
                            <a href="#4" title="Donner 4 étoiles">☆</a>
                            <a href="#5" title="Donner 5 étoiles">☆</a>
                        </div></br>
                        <div class="article_prix">
                            <span class="article_prix_barre"> 60 $</span>
                            <span class="article_prix2">20 $</span>
                        </div>
                        <p class="article_btn">Add to cart </br>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cart" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        </p>
                    </div>
                </div>
            </section>


            <!-- Article 2 -->
            <section class="article_2">
                <p class="article_2_img"></p>
                    <div class="card">
                    <div class="card_text">
                        <h1 class="article_nom">Montre Lige </h1>
                        <div class='sale_1'>Sale</div>
                        <!-- Rating -->
                        <div class="rating">
                            <a href="#1" title="Donner 1 étoile">☆</a>
                            <a href="#2" title="Donner 2 étoiles">☆</a>
                            <a href="#3" title="Donner 3 étoiles">☆</a>
                            <a href="#4" title="Donner 4 étoiles">☆</a>
                            <a href="#5" title="Donner 5 étoiles">☆</a>
                        </div></br>
                        <div class="article_prix">
                            <span class="article_prix_barre"> 84.99 $</span>
                            <span class="article_prix2">59.99 $</span>
                        </div>
                        <p class="article_btn">Add to cart </br>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cart" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        </p>
                    </div>
                
                    </div>
            </section>
            <!-- faq -->
            <section class="faq">
                    <h1 class="faq_titre">  Frequently Asked Questions</h1>
                    <div class="faq_container">
                        <!-- Faq1 -->
                        <div class="faq_1_container">
                            <h1 class="faq_question">What is the delivery time ?<h1>
                            <p class="faq_texte">We deliver the packages within 10 to 15 working days.<p>
                        </div>
                        <!-- Faq2 -->
                        <div class="faq_2_container">
                            <h1 class="faq_question">What is the return policy ?<h1>
                            <p class="faq_texte">You have 1 month after your purchase to start a return request
                            </br></br></br>
                            <a class="faq_btn">For more information<a>
                        </div>
                        <!-- Faq3 -->
                        <div class="faq_3_container">
                            <h1 class="faq_question">What is the duration ?<h1>
                            <p class="faq_texte">The warranty varies depending on the product but they follow the European standard of 2 years minimum.<p>
                        </div>
                        <!-- Faq4 -->
                        <div class="faq_4_container">
                            <h1 class="faq_question">How can I contact customer service ?<h1>
                            <p class="faq_texte">Customer service is available 24 hours a day at this e-mail address<p>
                            </br>
                            <a class="faq_btn btn_mail" href="mailto:customerservice_hostips@gmail.com">customerservice_hostips@gmail.com </a>
                        </div>

                    </div>
            </section>

            <!-- Carousel -->
            <section class="carousel">

            </section>
        </article>

        <footer>

        </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="assets/js/menu.js"></script>
    <script src="assets/js/header_anime.js"></script>


</body>

</html>