<?php
include "models/data.php";
function getConnexion($login, $mdp)
{
    $connexion = connexion();
    if ($mdp == "123" && $login == "titi") {
        return true;
    }
}
function getLesSignes()
{
    
}

