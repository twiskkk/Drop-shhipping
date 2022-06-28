<?php
function register($login,$pass){
    $sortie = 0;
    $madb = new PDO('sqlite:bdd/bdd.sqlite');
    $login = $madb->quote($login);
    $pass = $madb->quote($pass);
    $requete = "INSERT INTO comptes(login,password) VALUES ($login,$pass);;";
    $query = $madb->exec($requete);
    if($query)
    {
        $sortie=1;
    }
    return $sortie;
}
//*******************************************************************************************
//Fonction de permetre de verifier le compte de l'utilisateur
//Parametre : mail  / password
//Retourne un tableau associatif en focntion du mail et du mot de passe
function Login($login,$pass)
{
    $retour = false;
    $madb = new PDO('sqlite:bdd/bdd.sqlite');
    $login = $madb->quote($login);
    $pass = $madb->quote($pass);
    $requete = "SELECT * FROM comptes WHERE login=$login and password=$pass;";
    $query = $madb->query($requete);
    $resulat = $query->fetchAll(PDO::FETCH_ASSOC);

    if(sizeof($resulat)!=0)
    {
        $retour = true;
    }
    return $retour;
}
?>
