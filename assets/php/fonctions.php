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
//*******************************************************************************************
function session_panier($login,$pass){
    $retour = true;
    $madb = new PDO('sqlite:bdd/bdd.sqlite');
    
    $login = $madb->quote($login);
    $pass = $madb->quote($pass);
    $requete_1 = "SELECT panier1 FROM comptes WHERE  login=$login and password=$pass;";
    $requete_2 = "SELECT panier2 FROM comptes WHERE  login=$login and password=$pass;";
    
    $query1 = $madb->query($requete_1);
    $query2 = $madb->query($requete_2);
    if($query1 && $query2)
    {
        $panier1 = $query1->fetch(PDO::FETCH_ASSOC);
        $_SESSION['panier1'] = $panier1['panier1'];

        $panier2 = $query2->fetch(PDO::FETCH_ASSOC);
        $_SESSION['panier2'] = $panier2['panier2'];
        $retour = true;
    
    }

    return $retour;

}
?>
