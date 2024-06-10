<!-- ----- debut ModelPersonne -->

<?php
require_once 'Model.php';

class ModelPersonne {

    public const ADMINISTRATEUR = 0;
    public const CLIENT = 1;

    private $id, $nom, $prenom, $statut, $login, $password;

    public function __construct($id = NULL, $nom = NULL, $prenom = NULL, $statut = NULL, $login = NULL, $password = NULL) {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($id)) {
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->statut = $statut;
            $this->login = $login;
            $this->password = $password;
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getStatut() {
        return $this->statut;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNom($nom): void {
        $this->nom = $nom;
    }

    public function setPrenom($prenom): void {
        $this->prenom = $prenom;
    }

    public function setStatut($statut): void {
        $this->statut = $statut;
    }

    public function setLogin($login): void {
        $this->login = $login;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    //-- recupération de la liste des clients
    public static function getAllClient() {
        try {
            $database = Model::getInstance();
            $query = "select * from personne where statut = 1";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelPersonne");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    //---recupération de la liste des administrateurs
    public static function getAllAdmin() {
        try {
            $database = Model::getInstance();
            $query = "select * from personne where statut = 0";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelPersonne");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
    
    
        public function authentifier($login, $password) {
        $query = "SELECT * FROM personne WHERE login = :login AND password = :password";
       $statement = $database->prepare($query);

        $statement->bindParam(':login', $login);
        $statement->bindParam(':password', $password);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelPersonne");
            return $results;
        if ($results) {
            return $results;
        } else {
            return false;
            
      }
      
      }

}

?>
<!-- ----- Fin ModelPersonne -->