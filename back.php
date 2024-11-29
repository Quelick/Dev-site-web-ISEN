<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "";
$dbname = "parc_animalier";

$conn = new mysqli($host, $user, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die(json_encode(["error" => "Échec de la connexion : " . $conn->connect_error]));
}

// Déterminer le type de requête
$type = isset($_GET['type']) ? $_GET['type'] : '';

if ($type === 'ajouter' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ajouter un utilisateur
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = intval($_POST['age']);
    $email = $_POST['email'];
    $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO utilisateurs (nom, prenom, age, email, motdepasse) VALUES ('$nom', '$prenom', $age, '$email', '$motdepasse')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "Utilisateur ajouté avec succès."]);
    } else {
        echo json_encode(["error" => "Erreur lors de l'ajout de l'utilisateur : " . $conn->error]);
    }
} elseif ($type === 'verifier') {
    // Vérifier si un utilisateur est connecté
    if (isset($_SESSION['user'])) {
        echo json_encode(["message" => "Connecté : " . $_SESSION['user']['email']]);
    } else {
        echo json_encode(["error" => "Non connecté"]);
    }
} elseif ($type === 'connexion' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    // Connexion d'un utilisateur
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];

    $sql = "SELECT * FROM utilisateurs WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($motdepasse, $user['motdepasse'])) {
            $_SESSION['user'] = $user;
            echo json_encode(["message" => "Connexion réussie"]);
        } else {
            echo json_encode(["error" => "Mot de passe incorrect"]);
        }
    } else {
        echo json_encode(["error" => "Utilisateur non trouvé"]);
    }
} elseif ($type === 'deconnexion') {
    // Déconnexion d'un utilisateur
    session_destroy();
    echo json_encode(["message" => "Déconnexion réussie"]);
} else {
    echo json_encode(["error" => "Requête non valide"]);
}

$conn->close();
?>
