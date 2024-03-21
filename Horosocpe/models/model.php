<?php
include "models/data.php";
function getConnexion($login, $mdp)
{
    $sql="SELECT COUNT(*)FROM connexion WHERE login='$login' and mdp='$mdp'";
    
    return executerRequete($sql)->fetchAll();
}
function getLesSignes()
{
    $signe=signe();
    return $signe;
}

function getleSigne($lesigne)
{
    $signe=getLesSignes();
    return $signe[$lesigne];
}