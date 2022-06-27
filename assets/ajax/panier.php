<?php
session_start();
if (empty($_SESSION) || $_SESSION['status']=="visiteur"){
    $_SESSION['panier']=+1;
}
else if($_SESSION['status']=="connecter"){
    $_SESSION['panier']=+1;
}
?>