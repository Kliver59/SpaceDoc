<?php
// Inclure le fichier de configuration et de connexion
include_once '../includes/db_connect.php';
include_once '../app/controllers/PlanetController.php';



// Appel du contrôleur pour afficher la liste des planètes
$controller = new PlanetController();
$controller->index();
?>