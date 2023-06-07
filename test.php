<?php 

// Récupérer le nom de l'image à afficher depuis la requête GET
$imageName = $_GET['nom_image'];

// Chemin vers le dossier contenant les images
$cheminImages = './medias/';

// Vérifier si le fichier image existe
if (file_exists($cheminImages . $imageName)) {
    // Récupérer le type de contenu de l'image
    $typeContenu = mime_content_type($cheminImages . $imageName);

    // Définir les en-têtes de la réponse HTTP
    header('Content-Type: ' . $typeContenu);

    // Lire le contenu de l'image et l'afficher
    readfile($cheminImages . $imageName);
} else {
    // Cas où l'image n'existe pas
    echo 'Image non trouvée.';
}
?>
