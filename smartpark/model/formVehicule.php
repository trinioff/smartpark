<?php
require 'Vehicule.php';
if (isset($_POST['formulaire'])) {
    $type = $_POST ['vehicletype'];

    $vehicule = new Vehicule($vehicletype);
    $vehicule->saveToDatabase();
}
?>