<?php
//switch ($action)

switch($action)
{
    case 'reponse':
        {
            //var_dump($_REQUEST);
            $liste=$_REQUEST['liste'];
            //include = afficher fichier /
            include 'views/reponse.php';
            break;
        }
    case 'connexion':
        {
    
            $login=$_REQUEST['login'];
            $mdp=$_REQUEST['mdp'];
            $flag=getConnexion($login,$mdp);
            if($flag){
                include 'views/choix.php';
            }else {
                 include 'views/connexion.php';
            }
            break;
        }
    case 'modifier':
        {
            $signe=$_REQUEST['signe'];
            $signe=signe($signe);
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
