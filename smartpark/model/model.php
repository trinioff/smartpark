<?php
function openDataBaseConnection() {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "parking";

    try {
        $db = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("La connexion à la base de données a échoué : " . $e->getMessage());
        }
        return $db;
}
function close_database_connection (&$db) {
    $db = null;
}
?>

