<?php
$host = 'localhost';
$dbname = 'parc_animalier';  // Remplacez par le nom de votre base de données
$username = 'root';           // Nom d'utilisateur MySQL par défaut
$password = '';               // Mot de passe MySQL par défaut (vide)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>