<?php
class User {
    //def d'un private id
    private $surname;
    private $name;
    private $immat;
    private $email;
    private $phoneNumber;

    public function __construct($surname, $name, $email, $immat, $phoneNumber = null) {
        // possibilité de créer un id
        $this->setSurname($surname);
        $this->setName($name);
        $this->setimmat($immat);
        $this->setEmail($email);
        $this->setPhoneNumber($phoneNumber);
    }

    // code seteur geteur id eventuellement

    public function setSurname($surname) {
        //validation du nom
        if (!empty($surname)) { 
            $this->surname = $surname;
        }else{
            throw new InvalidArgumentException("Le Nom ne peut pas être vide");
        }
    }

    public function setName($name) {
        // Validation du prénom
        if (!empty($name)) {
            $this->name = $name;
        } else {
            throw new InvalidArgumentException("Le prénom ne peut pas être vide.");
        }
    }

    public function getName() {
        return $this->name;
    }
    public function setImmat($immat) {
        // Validation du numéro de téléphone
        if (!empty($immat) && preg_match("/^[0-6]{7}$/", $immat)) {
            $this->immat = $immat;
        } else {
            throw new InvalidArgumentException("Le numéro d'immatriculation doit avoir 7 caractères'.");
        }
    }

    public function setEmail($email) {
        // Validation de l'email
        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            throw new InvalidArgumentException("L'adresse email n'est pas valide.");
        }
    }

    public function getEmail() {
        return $this->email;
    }

    public function setPhoneNumber($phoneNumber) {
        // Validation du numéro de téléphone
        if (!empty($phoneNumber) && preg_match("/^[0-9]{10}$/", $phoneNumber)) {
            $this->phoneNumber = $phoneNumber;
        } else {
            throw new InvalidArgumentException("Le numéro de téléphone doit avoir 10 chiffres.");
        }
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }
    public function saveToDatabase() {
        $db = openDataBaseConnection();
        $query = "INSERT INTO users (surname, name, immat, email, phoneNumber) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bindParam("ssss", $this->surname, $this->name, $this->immat, $this->email,);
        $stmt->execute();
        close_database_connection($db);
    }

}
?>
