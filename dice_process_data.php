<?php
// Récupérez les données POST envoyées depuis l'application Android
$data = $_POST['data']; // "data" correspond au nom de la valeur POST envoyée depuis Android

// Vérifiez si des données ont été reçues
if ($data) {
    // Les données ont été traitées avec succès
    echo "OK";
} else {
    // Il y a eu une erreur lors du traitement des données
    echo "Erreur";
}
?>
