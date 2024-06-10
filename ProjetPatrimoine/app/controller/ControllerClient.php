<!-- ----- debut ControllerClient -->
<?php
require_once '../model/ModelPersonne.php';

class ControllerClient {
// --- Liste des clients
public static function clientReadAll() {
$results = ModelPersonne::getAllClient();
// ----- Construction chemin de la vue
include 'config.php';
$vue = $root . '/app/view/client/viewAllClient.php';
if (DEBUG)
echo ("ControllerClient : clientReadAll : vue = $vue");
require ($vue);
}

}
?>
<!--- Fin controllerClient -->
