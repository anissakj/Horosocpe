<?php
include "models/data.php";
function getConnexion($login, $mdp)
{
    $sql="SELECT COUNT(*) as nb FROM connexion WHERE login='$login' and mdp='$mdp'";
    return executerRequete($sql)->fetch();
}
function getDataSignes(){
    $sql= "SELECT * FROM astrologie";
    var_dump($sql);
    return executerRequete($sql)->fetchAll();
    //return connexion()->query($sql) -> fetch();
}
function getLesSignes()
    {
        //$signe[$data[0]['signe']]=$data[0]['horoscope'];
        $tab=getDataSignes();
        foreach ($tab as $k) 
        {
            $signes[$k['signe']]=$k['horoscope'];
        }
      
    return $signes;
    }


function getleSigne($lesigne)
{
    $signe=getLesSignes();
    return $signe[$lesigne];
}