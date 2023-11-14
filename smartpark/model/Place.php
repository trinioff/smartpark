<?php
class Place {
    // def d un private id
    private $type;
    private $occupied;

    public function __construct($type) {
         // possibilité de créer un id
        $this->setType($type);
        $this->occupied = false; // place non occupé au début
    }

    // possible seteur et geteur d'id

    public function setType($type) {
        $allowedTypes = ['voiture', 'moto', 'voiture électrique', 'véhicule handicapé'];

        if (in_array($type, $allowedTypes)) {
            $this->type = $type;
        } else {
            throw new InvalidArgumentException("Le type de place n'est pas valide.");
        }
    }

    public function getType() {
        return $this->type;
    }

    public function isOccupied() {
        return $this->occupied;
    }

    public function occupy() {
        if (!$this->occupied) {
            $this->occupied = true;
        } else {
            throw new Exception("La place est déjà occupée.");
        }
    }

    public function freeUp() {
        $this->occupied = false;
    }
    public function saveToDatabase() {
        $db = openDataBaseConnection();
        $query = "INSERT INTO places (type, occupied) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bindParam("ssss", $this->type, $this->occupied);
        $stmt->execute();
        close_database_connection($db);
    }
}
?>
