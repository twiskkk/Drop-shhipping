<?php
/* Menu */
function menu_visiteur(){
    ?>
    <ul class="menu" id='ul'>
        <li><a href="index.php"><span id="logo_1" >H</span><span id="logo_2">ost</span><span id="logo_3">ips</span></a></li>
        <li class="li_active"><a class="menu_texte menu_texte_accueil" href="index.php">Accueil</a></li>
        <li><a class="menu_texte" href="index.php" id='tendency'>Tendency</a></li>
        <li><a class="menu_texte" href="index.php" id='new'>New</a></li>
        <li><a class="menu_texte menu_btn" href="connect.php?action=login" id='connect'>
            
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
            Login / Register
        </a></li>
        <li><a class="menu_texte" href="panier.php" id='panier' >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart" viewBox="0 0 16 16">
                    <path
                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                Panier
            </a>
        </li>
    </ul>
<?php
}
function menu_connecter(){
    ?>
    <ul class="menu" id='ul'>
        <li><a href="index.php"><span id="logo_1" >H</span><span id="logo_2">ost</span><span id="logo_3">ips</span></a></li>
        <li class="li_active"><a class="menu_texte menu_texte_accueil" href="index.php">Accueil</a></li>
        <li><a class="menu_texte" href="index.php" id='tendency'>Tendency</a></li>
        <li><a class="menu_texte" href="index.php" id='new'>New</a></li>
        <li><a class="menu_texte menu_btn" href="connect.php?action=login" id='connect'>
            
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
            <?php echo $_SESSION['login'];?>
        </a></li>
        <li><a class="menu_texte" href="panier.php" id='panier' >
            <span class="icon_panier">
            <?php echo $panier ?>
            </span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart" viewBox="0 0 16 16">
                    <path
                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                 Panier
            </a>
        </li>
    </ul>
<?php

}