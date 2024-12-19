<?php
// Activer la mise en tampon de sortie
ob_start();

// Inclure la bibliothèque FPDF
require('fpdf/fpdf.php');

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parc_animalier";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Échec de connexion : " . $conn->connect_error);
}

// Requête pour récupérer les données
$sql = "SELECT nom, prenom, age, email, date_creation FROM utilisateurs WHERE id=2";
$result = $conn->query($sql);

// Initialiser FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Ajouter une image (chemin, coordonnées x et y, largeur, hauteur)
$pdf->Image('images/billet.jpeg', 10, 10, 190, 110); // Exemple : une image "billet.jpeg" qui occupe la moitié supérieure
$pdf->Ln(115); // Saut de ligne après l'image pour éviter le chevauchement avec le titre

// Titre du PDF
$pdf->SetFont('Arial', 'B', 16); // Texte en gras
$pdf->Cell(190, 10, 'BILLET PARC ISEN', 1, 1, 'C');
$pdf->Ln(10); // Saut de ligne

// En-têtes de tableau (en gras)
$pdf->SetFont('Arial', 'B', 12);
$headerWidths = [40, 40, 20, 50, 40]; // Largeurs adaptées pour remplir 190 mm
$pdf->Cell($headerWidths[0], 10, 'Nom', 1);
$pdf->Cell($headerWidths[1], 10, 'Prenom', 1);
$pdf->Cell($headerWidths[2], 10, 'Age', 1);
$pdf->Cell($headerWidths[3], 10, 'Email', 1);
$pdf->Cell($headerWidths[4], 10, 'Date', 1);
$pdf->Ln();

// Remplir le tableau avec les données (texte en gras pour les valeurs)
$pdf->SetFont('Arial', 'B', 12);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell($headerWidths[0], 10, $row['nom'], 1);
        $pdf->Cell($headerWidths[1], 10, $row['prenom'], 1);
        $pdf->Cell($headerWidths[2], 10, $row['age'], 1, 0, 'C');
        $pdf->Cell($headerWidths[3], 10, $row['email'], 1);
        $pdf->Cell($headerWidths[4], 10, $row['date_creation'], 1);
        $pdf->Ln();
    }
} else {
    $pdf->Cell(190, 10, 'Aucune donnée trouvée', 1, 1, 'C');
}

// Fermer la connexion
$conn->close();

// Arrêter la mise en tampon et générer le PDF
ob_end_clean();
$pdf->Output('D', 'utilisateurs.pdf');
?>
