
<!-- ----- debut ModelCompte -->

<?php
require_once 'Model.php';

class ModelCompte {

    private $id, $label, $montant, $banque_id, $personne_id;

    // pas possible d'avoir 2 constructeurs
    public function __construct($id = NULL, $label = NULL, $montant = NULL, $banque_id = NULL, $personne_id = NULL) {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($id)) {
            $this->id = $id;
            $this->label = $label;
            $this->montant = $montant;
            $this->banque_id = $banque_id;
            $this->personne_id = $personne_id;
        }
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLabel($label) {
        $this->label = $label;
    }

    function setMontant($montant) {
        $this->montant = $montant;
    }

    function setBanque_id($banque_id) {
        $this->banque_id = $banque_id;
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

    function getMontant() {
        return $this->montant;
    }

    function getBanque_id($banque_id) {
        return $this->banque_id;
    }

    function getPersonne_id($personne_id) {
        return $this->personne_id;
    }

    //-- recupération de la liste des comptes
    public static function getAllCompte() {
        try {
            $database = Model::getInstance();
            $query = "select compte.label as compte_label, banque.label as banque_label, banque.pays as banque_pays, compte.montant, personne.prenom, personne.nom from compte join personne on compte.personne_id = personne.id join banque on compte.banque_id = banque.id";
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
<!-- ----- fin ModelCompte -->




