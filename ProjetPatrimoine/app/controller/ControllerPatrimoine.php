<?php

class ControllerPatrimoine{
    // --- page d'acceuil
    public static function caveAccueil() {
        include 'config.php';
        $vue = $root . '/app/view/viewPatrimoineAccueil.php';
        if (DEBUG)
            echo ("ControllerPatrimoine : caveAccueil : vue = $vue");
        require ($vue);
    }
}

?>
