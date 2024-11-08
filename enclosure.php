<?php
include 'db.php';

$stmt = $pdo->query("SELECT enclosures.id, enclosures.name AS enclosure_name, animals.name AS animal_name 
                     FROM enclosures 
                     JOIN animals ON enclosures.id = animals.enclosure_id 
                     ORDER BY enclosures.id");

$enclosures = [];
while ($row = $stmt->fetch()) {
    $enclosures[$row['enclosure_name']][] = $row['animal_name'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Enclos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Liste des Enclos</h2>
    <?php foreach ($enclosures as $enclosure_name => $animals): ?>
        <h3><?php echo $enclosure_name; ?></h3>
        <ul>
            <?php foreach ($animals as $animal_name): ?>
                <li><?php echo $animal_name; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</body>
</html>
