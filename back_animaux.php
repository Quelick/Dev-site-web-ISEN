<?php
header("Content-Type: application/json");
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "";
$dbname = "parc_animalier";
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["success" => false, "error" => "Échec de connexion à la base de données."]));
}

// Récupérer l'ID depuis les paramètres GET (si présent)
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    // Détails d'un seul animal
    $sql = "SELECT a.id, a.nom AS nom_animal, a.description AS description_animal, a.photo AS photo_animal, 
                   e.nom_enclos, e.description AS description_enclos, 
                   b.nom AS nom_biome, b.description AS description_biome
            FROM animaux a
            JOIN enclos e ON a.enclos_id = e.id_enclos
            JOIN biomes b ON e.biome_id = b.id
            WHERE a.id = $id";
} else {
    // Liste de tous les animaux
    $sql = "SELECT id, nom, description, photo FROM animaux";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode(["success" => true, "data" => $data]);
} else {
    echo json_encode(["success" => false, "error" => "Aucun résultat trouvé."]);
}

$conn->close();
?>
