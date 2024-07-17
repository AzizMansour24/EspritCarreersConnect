<?php

include_once 'C:\xampp\htdocs\2A34\Ecc_gestion_user\config.php';
include_once 'C:\xampp\htdocs\2A34\Ecc_gestion_user\Model\user.php';

class usersC{
    
    function addusers($newuser){
        $db = config::getConnexion();


        try {
            
            $query = $db->prepare(
               // 'INSERT INTO `users`( `id`,`username`, `civilite`, `prenom`, `nom`, `email`, `mdp`, `experience`, `nivetude`, `typeformation`, `gouvernorat`, `telephone`, `ville`, `cv`) 
                  //  VALUES          (:id,  :username,:civilite,     :prenom,  :nom,  :email,  :mdp,  :experience,  :nivetude,  :typeformation,  :gouvernorat,  :telephone,  :ville,  :cv)'
            
                 ' INSERT INTO users ( username, civilite, prenom, nom, email, mdp, experience, nivetude, typeformation, gouvernorat, telephone, ville , cv) 
                                VALUES (:username,:civilite,:prenom,:nom,:email,:mdp,:experience,:nivetude,:typeformation,:gouvernorat,:telephone ,:ville , :cv)
            '
            
                );
            $query->execute([
                
                'username'=> $newuser->getEmail(),
                'civilite' => $newuser->getCivilite(),
                'prenom' => $newuser->getPrenom(),
                'nom' => $newuser->getNom(),
                'email' => $newuser->getEmail(),
                'mdp' => md5($newuser->getPassword()),
                'experience' => $newuser->getExperience(),
                'nivetude' => $newuser->getNivetude(),
                'typeformation' => $newuser->getTypeformation(),
                'gouvernorat' => $newuser->getGouv(),
                'telephone' => $newuser->getTelephone(),
                'ville' => $newuser->getVille(),
                'cv' => $newuser->getCV()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    // Méthode pour vérifier si un email existe déjà dans la base de données
    public function emailExists($email) {
        // Connexion à la base de données (à adapter selon votre configuration)
        $db = config::getConnexion();        
        // Préparation de la requête SQL pour vérifier l'existence de l'email
        $query = $db->prepare("SELECT COUNT(*) AS count FROM users WHERE email = :email");
        $query->bindParam(':email', $email);
        
        // Exécution de la requête
        $query->execute();
        
        // Récupération du résultat de la requête
        $result = $query->fetch(PDO::FETCH_ASSOC);
        
        // Vérification si l'email existe
        if ($result['count'] > 0) {
            return true; // L'email existe
        } else {
            return false; // L'email n'existe pas
        }
    }

    function getUserByEmailAndPassword($email, $password) {
        $db = config::getConnexion();
    
        try {
            // Préparer la requête pour sélectionner l'utilisateur par son adresse e-mail et son mot de passe
            $query = $db->prepare("SELECT * FROM users WHERE email = :email AND mdp = :password");
            $query->execute(['email' => $email, 'password' => md5($password)]);
            $user = $query->fetch(PDO::FETCH_ASSOC);
    
            // Vérifier si un utilisateur a été trouvé avec cette adresse e-mail et ce mot de passe
            if ($user) {
                return $user; // Retourner l'utilisateur trouvé
            } else {
                return null; // Retourner null si aucun utilisateur n'a été trouvé avec cette adresse e-mail et ce mot de passe
            }
        } catch (PDOException $e) {
            echo "Erreur: " . $e->getMessage();
            return null;
        }
    }
    
    function updateUser($user, $email) {
        $db = config::getConnexion();
        try {
            $query = $db->prepare(
                'UPDATE users SET 
                    civilite = :civilite,
                    prenom = :prenom,
                    nom = :nom,
                    experience = :experience,
                    nivetude = :nivetude,
                    typeformation = :typeformation,
                    gouvernorat = :gouvernorat,
                    telephone = :telephone,
                    ville = :ville,
                    cv = :cv
                WHERE email = :email'
            );
            $query->execute([
                'civilite' => $user->getCivilite(),
                'prenom' => $user->getPrenom(),
                'nom' => $user->getNom(),
                'experience' => $user->getExperience(),
                'nivetude' => $user->getNivetude(),
                'typeformation' => $user->getTypeformation(),
                'gouvernorat' => $user->getGouv(),
                'telephone' => $user->getTelephone(),
                'ville' => $user->getVille(),
                'cv' => $user->getCv(),
                'email' => $email
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
     

    function listUsers()
    {
        $sql = "SELECT * FROM users";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function deleteUser($email){
        $sql="DELETE FROM users where email= :email";
        $db=config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindvalue(':email',$email);
        try
        {
            $req->execute();
    
        }
        catch(Exception $e)
        {
            die('Error:' .$e->getMessage());
        }
    }

    function showUser($id)
{
    $sql = "SELECT * FROM users WHERE id = :id";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_STR);
        $query->execute();

        $user = $query->fetch(PDO::FETCH_ASSOC);
        return $user;
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}


    
    
    


}


?>