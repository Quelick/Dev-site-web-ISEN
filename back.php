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

// Déterminer le type de requête
$type = isset($_GET['type']) ? $_GET['type'] : '';

// Ajouter un utilisateur
if ($type === 'ajouter') {
    $data = json_decode(file_get_contents('php://input'), true);
    $nom = $data['nom'];
    $prenom = $data['prenom'];
    $age = intval($data['age']);
    $email = $data['email'];
    $motdepasse = $data['motdepasse'];

    // Vérification si l'utilisateur existe déjà
    $checkEmail = $conn->query("SELECT * FROM utilisateurs WHERE email='$email'");
    if ($checkEmail->num_rows > 0) {
        echo json_encode(["success" => false, "error" => "Cet utilisateur existe déjà."]);
        exit;
    }

    $sql = "INSERT INTO utilisateurs (nom, prenom, age, email, motdepasse) VALUES ('$nom', '$prenom', $age, '$email', '$motdepasse')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["success" => true, "message" => "Utilisateur ajouté avec succès."]);
    } else {
        echo json_encode(["success" => false, "error" => "Erreur lors de l'ajout de l'utilisateur : " . $conn->error]);
    }
}

// Connexion d'un utilisateur
if ($type === 'connexion') {
    $data = json_decode(file_get_contents('php://input'), true);
    $email = $data['email'];
    $motdepasse = $data['motdepasse'];

    $sql = "SELECT * FROM utilisateurs WHERE email='$email' AND motdepasse='$motdepasse'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo json_encode(["success" => true, "email" => $email]);
    } else {
        echo json_encode(["success" => false, "error" => "Email ou mot de passe incorrect."]);
    }
}

// Ajouter un commentaire
if ($type === 'ajouter_commentaire') {
    $data = json_decode(file_get_contents('php://input'), true);
    $nom = $data['nom'];
    $email = $data['email'];
    $commentaire = $data['commentaire'];

    if (empty($nom) || empty($commentaire)) {
        echo json_encode(["success" => false, "error" => "Le nom et le commentaire sont obligatoires."]);
        exit;
    }

    $sql = "INSERT INTO commentaires (nom, email, commentaire) VALUES ('$nom', '$email', '$commentaire')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["success" => true, "message" => "Commentaire ajouté avec succès."]);
    } else {
        echo json_encode(["success" => false, "error" => "Erreur lors de l'ajout du commentaire : " . $conn->error]);
    }
}

// Récupérer les commentaires
if ($type === 'recuperer_commentaires') {
    $sql = "SELECT * FROM commentaires ORDER BY id DESC";
    $result = $conn->query($sql);
    $commentaires = [];

    while ($row = $result->fetch_assoc()) {
        $commentaires[] = $row;
    }

    echo json_encode(["success" => true, "commentaires" => $commentaires]);
}

$conn->close();
?>
