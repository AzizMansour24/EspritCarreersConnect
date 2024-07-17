<?php
include_once '../../Controller/userC.php'; 


$error = "";

// create employe
$user = null;

// create an instance of the controller
$userC = new usersC();

// Vérifier si les données POST sont envoyées
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si toutes les données nécessaires sont présentes
    if (
        isset($_POST["civilite"]) &&
        isset($_POST["prenom"]) &&
        isset($_POST["nom"]) &&
        isset($_POST["email"]) &&
        isset($_POST["mdp"]) &&
        isset($_POST["experience"]) &&
        isset($_POST["nivetude"]) &&
        isset($_POST["typeformation"]) &&
        isset($_POST["gouvernorat"]) &&
        isset($_POST["telephone"]) &&
        isset($_POST["ville"]) &&
        isset($_POST["cv"])
    ) {
        // Effectuer des vérifications supplémentaires au besoin
        
        // Vérifier l'email
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $error = "Adresse email invalide";
        }
                // Vérifier si l'email n'existe pas déjà dans la base de données
        $email = $_POST['email'];
        if ($userC->emailExists($email)) {
            $error = "L'adresse email existe déjà.";
            // Afficher un message d'erreur ou effectuer d'autres actions nécessaires
        } else {
            // L'email n'existe pas, continuer avec le traitement du formulaire
        }

        
        // Vérifier le mot de passe
        if (strlen($_POST["mdp"]) < 8) {
            $error = "Le mot de passe doit contenir au moins 8 caractères";
        }

        // Si aucune erreur n'est survenue, créer l'utilisateur
        if (empty($error)) {
            $user = new Users(
                
                $_POST['civilite'],
                $_POST['prenom'],
                $_POST['nom'],
                $_POST['email'],
                $_POST['mdp'],
                $_POST['experience'],
                $_POST['nivetude'],
                $_POST['typeformation'],
                $_POST['gouvernorat'],
                $_POST['telephone'],
                $_POST['ville'],
                $_POST['cv']
            );

            // Ajouter l'utilisateur à la base de données
            //

            if(isset($_FILES['cv']) AND !empty($_FILES['cv']['name']))
            {
                $taillemax =2097152;
                $extensionsvalides = array('pdf','jpeg','gif','png');
                if($_FILES['cv']['size'] <= $taillemax)
                {
                    $extensionupload = strtolower(substr(strrchr($_FILES['cv']['name'],'.'),1));
                    if(in_array($extensionupload,$extensionsvalides))
                    {
                        $chemin = "C:\xampp\htdocs\2A34\Ecc_gestion_user\View\frontoffice\cv".$_POST['nom'].".".$extensionupload;
                        $resultat = move_uploaded_file($_FILES['cv']['tmp_name'],$chemin); 
                        if($resultat)
                        {
                            $user->setCv($chemin);
                        }
                        else
                        {
                            $erreur = "Erreur lors de l'importation de votre fichier";
                        }
                    }
                    else
                    {
                        $erreur = "Votre fichier doit être au format pdf, jpeg, gif ou png";
                    }
                }
                else
                {
                    $erreur = "Votre fichier doit faire moins de 2Mo";
                }
            }
            //
            $userC->addusers($user);
            $longueurkey=12;
                $key ="";
                for($i=1;$i<$longueurkey;$i++)
                {
                    $key .=$key[mt_rand(0,9)];
                }

            $destinatinataire =$_POST['email'];
            $sujet = "Inscription à la plateforme de recrutement";
            $message = '
            Bonjour '.$_POST['nom'].',
            Bienvenue sur la plateforme de recrutement Esprit Carrers Centre.
            ';
            
            $headers = "Content-Type: text/plain; charset=utf-8\r\n";
            $headers .= "From: kayzeurdylan@gmail.com\r\n";
            $headers.='Content-Transfer-Encoding: 8bit';
           if(mail($destinatinataire,$sujet,$message,$headers)){
            echo "mail envoyé";
           }else{
            echo "mail non envoyé";
           }
            
            
            // Rediriger vers la page de connexion
            header('Location: login.php');
            exit(); // Arrêter l'exécution du script après la redirection
        }
    } else {
        $error = "Toutes les informations nécessaires ne sont pas fournies";
    }
} else {
    $error = "Requête invalide";
}

// En cas d'erreur, afficher le message d'erreur
if (!empty($error)) {
    echo "Erreur: " . $error;
}

