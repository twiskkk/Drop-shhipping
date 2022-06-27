<?php
session_start();
include './assets/php/formulaires.php';
if(!empty($_SESSION)){
    header('Location: index.php');
    exit();
}
else{
    $panier = 0;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Design</title>
    <link rel="stylesheet" href="assets/css/normalize.css" type="text/css">
    <link rel="stylesheet" href="assets/css/styles_connect.css" type="text/css">
</head>

<body class="body">
    <nav class="menu" id="nav">
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
        <?php
        if((!empty($_GET['action']))){
            if($_GET['action']=='login'){
                ?>
                <h1 class='header_title'>Page login</h1>
                <p class='texte_changer'>Pour vous inscrire</p>
                <form class='changer' action="connect.php" method='get'>
                    <button class='btn' type='submit' value='register' name='action' >Register</button>
                </form>

                <form  class='card' action="connect.php" method='post'>
                <fieldset class='fieldset'>   
                    <label class='label_login'>Login</label></br><input class='login' type='text' name='login' placeholder='user' id='login' ></input>
                    </br>
                    <label class='label_pass'>Password</label></br><input class='password' type='password' name='pass' placeholder='password' id='pass'></input>
                    <p id='error_pass'></p>
                    <input class='envoie' type='submit' name='submit' value='Login' onclick="return mdp_valide_form()"/>
                </fieldset>
                </form>
                <?php
            }
            else if($_GET['action']=='register'){
                ?>
                <p>page register<p>
                <form action="connect.php" method='post'>
                
                    <button type='submit' value='login' name='action'>login</button>
            </form>
                <?php
            }
        }
    }
    ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
        <script src="assets/js/menu.js"></script>
        <script src="assets/js/header_anime.js"></script>
        <script src="assets/js/formulaires.js"></script>
</body>

</html>