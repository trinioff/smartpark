<?php
class Vehicule {
    // def d un private id 
    private $type;

    public function __construct($type) {
        // possibilité de construct un id 
        $this->setType($type);
    }

   // ode geteur et seteur d id

    public function setType($type) {
        // Validation du type de véhicule
        $allowedTypes = ['car', 'bike', 'elecCar',];

        if (in_array($type, $allowedTypes)) {
            $this->type = $type;
        } else {
            throw new InvalidArgumentException("Le type de véhicule n'est pas valide.");
        }
    }

    public function getType() {
        return $this->type;
    }
    public function saveToDatabase() {
        $db = openDataBaseConnection();
        $query = "INSERT INTO vehicles (type) VALUES (?, ?, ?,)";
        $stmt = $db->prepare($query);
        $stmt->bindParam("ssss", $this->type);
        $stmt->execute();
        close_database_connection($db);
    }
}
?>
