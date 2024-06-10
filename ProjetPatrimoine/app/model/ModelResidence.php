
<!-- ----- debut ModelResidence -->

<?php
require_once 'Model.php';

class ModelResidence {

    private $id, $label, $ville, $prix, $personne_id;

    // pas possible d'avoir 2 constructeurs
    public function __construct($id = NULL, $label = NULL, $ville = NULL, $prix = NULL, $personne_id = NULL) {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($id)) {
            $this->id = $id;
            $this->label = $label;
            $this->ville = $ville;
            $this->prix = $prix;
            $this->personne_id = $personne_id;
        }
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLabel($label) {
        $this->label = $label;
    }

    function setMontant($ville) {
        $this->ville = $ville;
    }

    function setBanque_id($prix) {
        $this->prix = $prix;
    }

    function setPersonne_id($personne_id) {
        $this->personne_id = $personne_id;
    }

    function getId() {
        return $this->id;
    }

    function getLabel() {
        return $this->label;
    }

    function getVille() {
        return $this->ville;
    }

    function getPrix() {
        return $this->prix;
    }

    function getPersonne_id() {
        return $this->personne_id;
    }

    //-- recupération de la liste des résidences
    public static function getAllResidence() {
        try {
            $database = Model::getInstance();
            $query = "select residence.label as residence_label, residence.ville, residence.prix,personne.prenom, personne.nom from residence join personne on residence.personne_id = personne.id";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
    
    
    
    
     //-- recupération de la liste des résidences du client connecté
    public static function getResidenceClient() {
        try {
            $database = Model::getInstance();
            $query = "select * residence where personne_id=:personne_id";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }


    
}
?>
<!-- ----- fin ModelResidence -->






