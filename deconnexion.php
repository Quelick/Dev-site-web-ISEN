<?php
session_start();
session_unset(); // Supprime toutes les variables de session
session_destroy(); // Détruit la session

header("Location: bienvenue.php"); // Redirige vers la page de bienvenue
exit();
?>
