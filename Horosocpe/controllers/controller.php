<?php
//switch ($action)

switch($action)
{
    case 'reponse':
        {
            
            //Données renvoyés par le formulaire
            //var_dump($_REQUEST);
            //$liste=$_REQUEST['liste'];
            //appel fonction du modele
            //$signe=getleSigne($liste);
            //include = afficher fichier /
           // include 'views/reponse.php';
           // break;
           $choix = $_REQUEST['liste'];
           $tab = getleSigne($choix);
          // var_dump($tab);
           $horoscope=$tab['horoscope'];
           // var_dump( $horoscope){
            include 'views/reponse.php';
            break;
        }

        
    case 'connexion':
        {
            //Données renvoyés par le formulaire
            $login=$_REQUEST['login'];
            $mdp=$_REQUEST['mdp'];
            //appel fonction du modele
            $flag=getConnexion($login,$mdp);
            var_dump($flag);
             $signe=getLesSignes();
            //envoyer des données à la vue
            if($flag['nb']==1 ){   

                include 'views/choix.php';
            }else {
                 include 'views/connexion.php';
            }
            break;
        }
    case 'modifier':{
        {
        
             //Données renvoyés par le formulaire
            $signe=$_REQUEST['signe'];}
            
              //appel fonction du modele
            $signe=signe($signe);
             //envoyer des données à la vue
            include 'views/admin.php';
            break;
        }
    case 'administrer':
        { 
            foreach ($signe as $k => $v):
                if (isset($signe[$k])) {
                    $signe[$k] = $v;
                    }
            endforeach;
            include 'views/choix.php';
            break;
        }
        
    default:
        {
            include 'views/connexion.php';
        }
}
