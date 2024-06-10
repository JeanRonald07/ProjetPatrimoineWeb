
<!-- ----- debut ModelBanque -->

<?php
require_once 'Model.php';

class ModelBanque {

    private $id, $label, $pays;

    // pas possible d'avoir 2 constructeurs
    public function __construct($id = NULL, $label = NULL, $pays = NULL) {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($id)) {
            $this->id = $id;
            $this->label = $label;
            $this->pays = $pays;
        }
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLabel($label) {
        $this->label = $label;
    }

    function setPays($pays) {
        $this->pays = $pays;
    }

    function getId() {
        return $this->id;
    }

    function getLabel() {
        return $this->label;
    }

    function getPays() {
        return $this->pays;
    }

//-- recupération de la liste des banques
    public static function getAll() {
        try {
            $database = Model::getInstance();
            $query = "select * from banque";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelBanque");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    //---Ajout d'une banque
    public static function insert($label, $pays) {
        try {
            $database = Model::getInstance();

            // recherche de la valeur de la clé = max(id) + 1
            $query = "select max(id) from banque";
            $statement = $database->query($query);
            $tuple = $statement->fetch();
            $id = $tuple['0'];
            $id++;

            // ajout d'un nouveau tuple;
            $query = "insert into banque value (:id, :label, :pays)";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $id,
                'label' => $label,
                'pays' => $pays
            ]);
            return $id;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return -1;
        }
    }

    // Liste des comptes d'une banque
    // retourne une liste des label
    public static function getAllLabel() {
        try {
            $database = Model::getInstance();
            $query = "select label from banque";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    //récupération de la liste des comptes
    public static function getCompte($label) {
        try {
            $database = Model::getInstance();
            $query = "select compte.label as compte_label, banque.label as banque_label, compte.montant, personne.prenom, personne.nom from compte join personne on compte.personne_id = personne.id join banque on compte.banque_id = banque.id where banque.label = :banque_label";
            $statement = $database->prepare($query);
            $statement->execute([
                'banque_label' => $label
            ]);
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
}
?>
<!-- ----- fin ModelBanque -->


