<?php
session_start();

include_once 'C:\xampp\htdocs\2A34\Ecc_gestion_user\config.php';
require 'C:\xampp\htdocs\2A34\Ecc_gestion_user\Controller\userC.php'; 
$userC = new usersC();

if (isset($_POST['login_button'])) {
    // Vérifier si les champs email et password sont vides
    if (empty($_POST['email']) || empty($_POST['password'])) {
        // Si l'un des champs est vide, afficher un message d'erreur et arrêter le script
        
        $error_message = "Les champs email et password sont obligatoires.";
        header("location: login.php?error=$error_message");
        exit;
    }

    // Récupérer les données du formulaire
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Récupérer l'utilisateur en fonction de l'adresse e-mail
    $user = $userC->getUserByEmailAndPassword($email, $password);

    if ($user) {
        // Vérifier le mot de passe
        if($user['role'] == 'admin'){

            $_SESSION['admin_name'] = $user['nom'];
            $_SESSION['role'] = $user['role'];
            /////////
           
            //////
            header('location:../backoffice/index.php');
          
   
         }elseif($user['role'] == 'user'){
            
            $_SESSION['name'] = $user['prenom'];
            $_SESSION['id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            header('location:home.php');
   
         }
         elseif($user['role'] == 'super_admin'){
   
            $_SESSION['admin_name'] = $user['nom'];
            $_SESSION['role'] = $user['role'];
            header('location:../backoffice/index.php');
   
         }
    } else {
        // Utilisateur non trouvé avec cette adresse e-mail
        $error_message = "Email ou mot de passe incorrect.";
        header("location: login.php?error=$error_message");
        exit;
    }
}

// Récupérer le message d'erreur s'il est défini dans l'URL
$error_message = isset($_GET['error']) ? $_GET['error'] : '';
