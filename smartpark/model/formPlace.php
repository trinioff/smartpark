<?php
require 'Place.php';
if (isset($_POST['formulaire'])) {
    $type = $_POST ['handicaped'];

    $place = new Place($placetype);
    $place->saveToDatabase();
}
?>