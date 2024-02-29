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
    case'connexion':
        {
    
            $login=$_REQUEST['login'];
            $mdp=$_REQUEST['mdp'];
            if ($login)
    
            include 'views/choix.php';
            break;
        }

        case'modifier':
        {
            include 'views/admin.php';
            break;
        }

        case 'administrer':
            {
                
            }

    default:
         {
            include 'views/connexion.php';
        }
    }


