<?php
include_once '../includes/db_connect.php';
include_once '../app/models/Planet.php';

class PlanetController {
    // Afficher la liste des planètes
    public function index() {
        // Récupérer toutes les planètes
        $planetes = Planet::getAllPlanets($GLOBALS['pdo']);
        include '../app/views/planet_list.php';
    }
}
?>