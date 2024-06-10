<!-- ----- debut ControllerCompte -->
<?php
require_once '../model/ModelCompte.php';

class ControllerCompte {

// --- Liste de tous les comptes
public static function compteReadAll() {
$results = ModelCompte::getAllCompte();
// ----- Construction chemin de la vue
include 'config.php';
$vue = $root . '/app/view/compte/viewAllCompte.php';
if (DEBUG)
echo ("ControllerCompte : compteReadAll : vue = $vue");
require ($vue);
}

}

?>

<!-- ----- fin ControllerCompte -->