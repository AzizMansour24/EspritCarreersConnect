<?php

function afficherAlerte($message) {
    echo "<script>alert('$message');</script>";
}

function validerFormulaire() {
    // Tableau pour stocker toutes les erreurs
    $erreurs = [];

    // Vérifie si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifie si tous les champs sont remplis
        if (empty($_POST['titre']) || empty($_POST['entreprise']) || empty($_POST['type_contrat']) || empty($_POST['salaire']) || empty($_POST['domaine']) || empty($_POST['nombre_place']) || empty($_POST['description'])) {
            $erreurs[] = "Tous les champs sont obligatoires.";
        } else {
            // Récupère les valeurs des champs
            $titre = $_POST['titre'];
            $entreprise = $_POST['entreprise'];
            $type_contrat = $_POST['type_contrat'];
            $salaire = $_POST['salaire'];
            $domaine = $_POST['domaine'];
            $nombre_place = $_POST['nombre_place'];
            $description = $_POST['description'];

            // Validation du champ 'titre' pour ne contenir que des lettres
            if (!ctype_alpha($titre)) {
                $erreurs[] = "Le champ Titre ne doit contenir que des lettres.";
            } 
            // Validation du champ 'salaire' pour être supérieur à 0
            if ($salaire <= 0) {
                $erreurs[] = "Le salaire doit être supérieur à 0.";
            } 
            // Validation du champ 'nombre_place' pour être supérieur à 1
            if ($nombre_place < 1) {
                $erreurs[] = "Le nombre de places doit être supérieur ou egale à 1.";
            } 
            // Validation de la longueur de la description
            if (str_word_count($description) > 100) {
                $erreurs[] = "La description ne doit pas dépasser 100 mots.";
            } 
        }
    } else {
        // Si le formulaire n'a pas été soumis via POST, affichez un message d'erreur
        $erreurs[] = "Une erreur s'est produite. Veuillez soumettre le formulaire correctement.";
    }

    // Concaténer toutes les erreurs en une seule chaîne
    $messageErreur = implode("\\n", $erreurs);

    // Afficher une seule alerte contenant toutes les erreurs
    if (!empty($erreurs)) {
        afficherAlerte($messageErreur);
    }

    // Retourner true si aucune erreur n'a été trouvée, sinon false
    return count($erreurs) == 0;
}

/*
$valide = validerFormulaire();

// Si le formulaire est valide, vous pouvez traiter les données et ajouter l'offre à la base de données
if ($valide) {
    // Traiter les données et ajouter l'offre à la base de données
    // Redirection vers la page listOfr.php
    header('Location: listOfr.php');
    exit;
}
*/

?>
