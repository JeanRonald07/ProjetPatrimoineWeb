
<?php
require_once '../model/ModelPersonne.php';

class ControllerConnexion {

    public function __construct(ModelPersonne $modelPersonne) {
        $this->modelPersonne = $modelPersonne;
    }

    public function connexion() {
        if (isset($_POST['login']) && isset($_POST['password'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $utilisateur = $this->modelPersonne->authentifier($login, $password);

            if ($utilisateur) {
                // Connexion réussie
                $_SESSION['utilisateur'] = $utilisateur;
                header('Location: index.php'); // Redirection vers la page d'accueil
            } else {
                // Erreur de connexion
                $messageErreur = "Identifiants incorrects. Veuillez réessayer.";
            }
        } else {
            $messageErreur = "";
        }

        require('views/connexion.php');
    }
}
