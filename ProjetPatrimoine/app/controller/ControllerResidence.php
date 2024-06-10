<!-- ----- debut ControllerResidence -->
<?php
require_once '../model/ModelResidence.php';

class ControllerResidence {

// --- Liste des résidences
public static function residenceReadAll() {
$results = ModelResidence::getAllResidence();
// ----- Construction chemin de la vue
include 'config.php';
$vue = $root . '/app/view/residence/viewAllResidence.php';
if (DEBUG)
echo ("ControllerResidence : residenceReadAll : vue = $vue");
require ($vue);
}



public static function residenceClientReadall() {
$results = ModelResidence::getResidenceClient();
// ----- Construction chemin de la vue
include 'config.php';
$vue = $root . '/app/view/residence/viewAllResidenceClient.php';
if (DEBUG)
echo ("ControllerResidence : residenceClientReadall : vue = $vue");
require ($vue);
}

}

?>

<!-- ----- fin ControllerResidence -->
