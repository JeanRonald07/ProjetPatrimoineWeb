
<!-- ----- debut ControllerBanque -->
<?php
require_once '../model/ModelBanque.php';

class ControllerBanque {
// --- Liste des banques
public static function banqueReadAll() {
$results = ModelBanque::getAll();
// ----- Construction chemin de la vue
include 'config.php';
$vue = $root . '/app/view/banque/viewAll.php';
if (DEBUG)
echo ("ControllerBanque : banqueReadAll : vue = $vue");
require ($vue);
}

//--ajout d'une banque
// Affiche le formulaire de creation d'une banque
public static function banqueCreate() {
// ----- Construction chemin de la vue
include 'config.php';
$vue = $root . '/app/view/banque/viewInsert.php';
require ($vue);
}

// Affiche un formulaire pour récupérer les informations d'une nouvelle banque.
// La clé est gérée par le systeme et pas par l'internaute
public static function banqueCreated() {
// ajouter une validation des informations du formulaire
$results = ModelBanque::insert(
htmlspecialchars($_GET['label']), htmlspecialchars($_GET['pays'])
);
// ----- Construction chemin de la vue
include 'config.php';
$vue = $root . '/app/view/banque/viewInserted.php';
require ($vue);
}

//liste des comptes d'une banque
// Affiche un formulaire pour sélectionner un label qui existe
public static function banqueReadLabel() {
$results = ModelBanque::getAllLabel();

// ----- Construction chemin de la vue
include 'config.php';
$vue = $root . '/app/view/banque/viewSelectBanque.php';
require ($vue);
}
//----------------------------------------------
//liste des comptes en fonction du label de la banque
public static function banqueReadCompte(){
$banque_label = $_GET['label'];
$results = ModelBanque::getCompte($banque_label);

// ----- Construction chemin de la vue
include 'config.php';
$vue = $root . '/app/view/banque/viewCompte.php';
require ($vue);
}

}
?>
<!-- ----- fin ControllerBanque -->




