<?php
class Planet {
    private $id;
    private $nom;
    private $description;
    private $image;

    // Constructeur de la classe
    public function __construct($id, $nom, $description, $image) {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->image = $image;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getImage() {
        return $this->image;
    }

    // Récupérer toutes les planètes depuis la base de données
    public static function getAllPlanets($pdo) {
        $query = "SELECT * FROM planetes";
        $stmt = $pdo->query($query);
        $planetes = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $planetes[] = new Planet($row['id'], $row['nom'], $row['description'], $row['image']);
        }
        return $planetes;
    }
}
?>