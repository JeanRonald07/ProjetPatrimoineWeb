

<?php

require('models/ModelPersonne.php');

$modelPersonne = new ModelPersonne($db); // Instancier le modèle

if (isset($_SESSION['utilisateur'])) {
    $utilisateur = $_SESSION['utilisateur'];
    $statut = $utilisateur['statut'];

    // Afficher le menu en fonction du statut
    if ($statut === ModelPersonne::ADMINISTRATEUR) {
        echo '<ul class="nav navbar-nav">';
        echo '<li><a href="index.php?controller=admin&action=banques">Banques</a></li>';
        echo '<li><a href="index.php?controller=admin&action=clients">Clients</a></li>';
        echo '</ul>';
    } else if ($statut === ModelPersonne::CLIENT) {
        // Afficher les éléments du menu client
    }
} else {
    echo '<ul class="nav navbar-nav navbar-right">';
    echo '<li><a href="index.php?controller=connexion&action=connexion">Innovations</a></li>';
    echo '<li><a href="index.php?controller=connexion&action=connexion">Se connecter</a></li>';
    echo '</ul>';
}
