<?php
require 'User.php';
    
    if (isset($_POST['formulaire'])) {
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $immat = $_POST['immat'];

        $user = new User($surname, $email, $name, $immat);
        $user->saveToDatabase();
    }
?>