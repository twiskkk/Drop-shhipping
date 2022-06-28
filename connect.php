<?php
session_start();
include './assets/php/formulaires.php';
include './assets/php/fonctions.php';
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
                    <button class='btn' type='submit' value='register' name='action' id='form_register' >Register</button>
                </form>

                <form  class='card' action="connect.php" method='post'>
                    <fieldset class='fieldset'>   
                        <label class='label_login'>Login</label></br><input class='login' type='mail' name='login' placeholder='user' id='login' ></input><span id='error_login'></span>
                        </br>
                        <label class='label_pass'>Password</label></br><input class='password' type='password' name='pass' placeholder='password' id='pass'></input>
                        <p id='error_pass'></p>
                        <?php
                            if(!empty($_GET['error']))if($_GET['error']=='login'){
                                ?> <span class='ident_erreur'>Erreur dans le mot de passe ou le login</span><?php
                            }
                        ?>
                        <input class='envoie' type='submit'  value='Login' id='form_login'  onclick="return mdp_valide_form()"/>
                    </fieldset>
                </form>
                <?php
            }
            else if($_GET['action']=='register'){
                ?>
                <h1 class='header_title'>Page register<h1>
                <p class='texte_changer'>Pour vous connecter</p>
                
                <form class='changer' action="connect.php" method='get'>
                    <button class='btn' type='submit' value='login' name='action' id='form_login'>Login</button>
                </form>
                <form action="connect.php" method='post' class='card_2'>
                    <fieldset class='fieldset'>
                        <label class='label_login'>Login</label></br><input class='login' type='mail' name='login' placeholder='user' id='login' ></input><span id='error_login'></span>
                        </br>
                        <label class='label_pass'>Password</label></br>
                        <input class='password' type='password' name='pass_1' placeholder='password' id='pass'></input>              
                        </br><input class='password' type='password' name='pass_2' placeholder='password' id='pass_2'></input>
                        <p id='error_pass'></p>
                        <input class='envoie' type='submit' value='Register'  id='form_login' onclick="return mdp__identique()"/>
                    </fieldset>
                </form>
                <?php
            }
        }
    if(!empty($_POST)){
        if(!empty($_POST['pass_2'])){/* Register */
        $cree = register($_POST['login'],$_POST['pass_2']);
        if($cree==1){
        header('Location:connect.php?action=login');
        exit();
        }
    }
    /* Login */
    else{
            $connection = Login($_POST['login'],$_POST['pass']);
            
            if($connection == 1){
                $_SESSION['login']=$_POST['login'];
                session_panier($_POST['login'],$_POST['pass']);
            
                header('Location:index.php');
                exit(); 
            }
            else{
                header('Location:connect.php?action=login&error=login');
                exit();
          }
     }
        
    }
    if(!empty($_SESSION)){
        var_dump(($_SESSION));
    }

}
    ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
        <script src="assets/js/menu.js"></script>
        <script src="assets/js/header_anime.js"></script>
        <script src="assets/js/formulaires.js"></script>
</body>

</html>