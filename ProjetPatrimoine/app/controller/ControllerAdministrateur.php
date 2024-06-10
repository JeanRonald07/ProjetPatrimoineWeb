<!-- ----- debut ControllerAdministrateur -->
<?php
require_once '../model/ModelPersonne.php';

class ControllerAdministrateur {
// --- Liste des administrateurs
public static function adminReadAll() {
$results = ModelPersonne::getAllAdmin();
// ----- Construction chemin de la vue
include 'config.php';
$vue = $root . '/app/view/administrateur/viewAllAdmin.php';
if (DEBUG)
echo ("ControllerAdministrateur : adminReadAll : vue = $vue");
require ($vue);
}

}
?>
<!--- Fin controllerAdministrateur -->


