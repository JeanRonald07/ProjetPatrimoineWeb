
<!-- ----- debut Router1 -->
<?php
require ('../controller/ControllerBanque.php');
require ('../controller/ControllerPatrimoine.php');
require ('../controller/ControllerCompte.php');
require ('../controller/ControllerClient.php');
require ('../controller/ControllerAdministrateur.php');
require ('../controller/ControllerResidence.php');



// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = $param["action"];

// --- Liste des méthodes autorisées
switch ($action) {
 case "banqueReadAll" :
 case "banqueCreate":
 case "banqueCreated":
 case "banqueReadLabel":
 case "banqueReadCompte":
  ControllerBanque::$action();
  break;
 case "clientReadAll":
   ControllerClient::$action();
   break;
 case "adminReadAll":
     ControllerAdministrateur::$action();
     break;
 case "compteReadAll":
     ControllerCompte::$action();
     break;
 case "residenceReadAll":
 case "residenceClientReadall"  :  
     ControllerResidence::$action();
     break;

 // Tache par défaut
 default:
  $action = "caveAccueil";
  ControllerPatrimoine::$action();
}
?>
<!-- ----- Fin Router1 -->

