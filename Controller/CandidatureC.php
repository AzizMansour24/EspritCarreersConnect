<?php

include_once 'C:\xampp\htdocs\web\Main-main\config.php';
include_once 'C:\xampp\htdocs\web\Main-main\Model\Candidature.php';

class CandidatureC
{
    public function listCandidatures()
    {
        $sql = "SELECT * FROM candidature";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }

    public function deleteCandidature($id)
    {
        $sql = "DELETE FROM candidature WHERE candidature_id=:candidature_id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':candidature_id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function addCandidature(Candidature $candidature)
    {
        $sql = "INSERT INTO candidature VALUES (NULL, ?, ?, ?, ?, ?, ?)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
    
            // Récupère les valeurs des propriétés de l'objet Candidature
            $offre_id = $candidature->getOffreId();
            $user_id = $candidature->getUserId();
            $date_candidature = $candidature->getDateCandidature();
            $lettre_motivation = $candidature->getLettreMotivation();
            $cv_path = $candidature->getCvPath();
            $statut = $candidature->getStatut();
    
            // Bind parameters
            $query->bindParam(1, $offre_id);
            $query->bindParam(2, $user_id);
            $query->bindParam(3, $date_candidature);
            $query->bindParam(4, $lettre_motivation);
            $query->bindParam(5, $cv_path);
            $query->bindParam(6, $statut);
    
            // Exécute la requête
            $query->execute();
        } catch (Exception $e) {
            echo 'Error ajout :' . $e->getMessage();
        }
    }
    public function updateCandidatureStatut($candidature_id, $new_statut)
{
    try {
        $sql = "UPDATE candidature SET statut = :new_statut WHERE candidature_id = :candidature_id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindParam(':new_statut', $new_statut);
        $req->bindParam(':candidature_id', $candidature_id);
        $req->execute();
        echo $req->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

public function candidatureExistsForOffre($offre_id, $user_id)
{
    $sql = "SELECT COUNT(*) FROM candidature WHERE offre_id = :offre_id AND user_id = :user_id";
    $db = config::getConnexion();
    try {
        $req = $db->prepare($sql);
        $req->bindParam(':offre_id', $offre_id);
        $req->bindParam(':user_id', $user_id);
        $req->execute();
        $count = $req->fetchColumn(); // Récupère le nombre de résultats

        return ($count > 0); // Retourne true si au moins une candidature existe, sinon false
    } catch (Exception $e) {
        die('Error:' . $e->getMessage());
    }
}

public function getStatutCandidatureByOffreId($offre_id)
    {
        $sql = "SELECT statut FROM candidature WHERE offre_id = :offre_id";
        $db = config::getConnexion();
        
        try {
            $req = $db->prepare($sql);
            $req->bindParam(':offre_id', $offre_id);
            $req->execute();
            $result = $req->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return $result['statut']; // Retourne le statut de la candidature si trouvé
            } else {
                return "Aucune candidature trouvée pour cette offre.";
            }
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }public function getOffreIdByCandidatureId($candidature_id)
    {
        $sql = "SELECT offre_id FROM candidature WHERE candidature_id = :candidature_id";
        $db = config::getConnexion();
        
        try {
            $req = $db->prepare($sql);
            $req->bindParam(':candidature_id', $candidature_id);
            $req->execute();
            
            $result = $req->fetch(PDO::FETCH_ASSOC);
    
            if ($result && isset($result['offre_id'])) {
                return $result['offre_id']; // Retourne l'offre_id de la candidature si trouvé
            } else {
                return null; // Retourne null si la candidature n'est pas trouvée ou si offre_id n'est pas défini
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null; // Retourne null en cas d'erreur
        }
    }
    


    
}
?>
