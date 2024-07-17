<?php 

include_once 'C:\xampp\htdocs\web\Main-main\config.php';
include_once 'C:\xampp\htdocs\web\Main-main\Model\Offre_emp.php';

class OffreEmpC
{
    public function listOffres()
    {
        $sql = "SELECT * FROM offres_emploi";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }

    public function deleteOffre($id)
    {
        $sql = "DELETE FROM offres_emploi WHERE id=:id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function addOffre(Offre_emp $offre)
    {
        $sql = "INSERT INTO offres_emploi VALUES (NULL, :titre, :entreprise, :type_contrat, :salaire, :domaine, :nombre_place, :description)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            // Bind parameters
            $query->bindParam(':titre', $offre->getTitreOF());
            $query->bindParam(':entreprise', $offre->getEntrepriseOF());
            $query->bindParam(':type_contrat', $offre->getTypeContratOF());
            $query->bindParam(':salaire', $offre->getSalaireOF());
            $query->bindParam(':domaine', $offre->getDomaineOF());
            $query->bindParam(':nombre_place', $offre->getNombrePlaceOF());
            $query->bindParam(':description', $offre->getDescriptionOF());

            // Execute query
            $query->execute();
        } catch (Exception $e) {
            echo 'Error :' . $e->getMessage();
        }
    }
    public function updateOffre($offre, $id)
{
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE offres_emploi SET 
                titre = :titre, 
                entreprise = :entreprise, 
                type_contrat = :type_contrat, 
                salaire = :salaire,
                domaine = :domaine,
                nombre_place = :nombre_place,
                description = :description
            WHERE id = :id'
        );
        $query->execute([
            'id' => $id,
            'titre' => $offre->getTitreOF(),
            'entreprise' => $offre->getEntrepriseOF(),
            'type_contrat' => $offre->getTypeContratOF(),
            'salaire' => $offre->getSalaireOF(),
            'domaine' => $offre->getDomaineOF(),
            'nombre_place' => $offre->getNombrePlaceOF(),
            'description' => $offre->getDescriptionOF()
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
public function getOffreById($id)
{
    $sql = "SELECT * FROM offres_emploi WHERE id = :id";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        
        // Fetch the job offer as an associative array
        $offre = $query->fetch(PDO::FETCH_ASSOC);
        
        return $offre; // Return the job offer details
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return null; // Return null if an error occurs
    }
}


public function decrementPlaces($id)
{
    $db = config::getConnexion();
    
    // Sélectionner l'offre d'emploi par son ID
    $offre = $this->getOffreById($id);

    if (!$offre) {
        echo "Offre d'emploi non trouvée.";
        return;
    }

    $nombre_places = $offre['nombre_place'];
    
    if ($nombre_places > 0) {
        $new_nombre_places = $nombre_places - 1;

        try {
            $query = $db->prepare('UPDATE offres_emploi SET nombre_place = :nombre_place WHERE id = :id');
            $query->execute([
                'id' => $id,
                'nombre_place' => $new_nombre_places
            ]);

            echo "Nombre de places décrémenté avec succès.";

            // Vérifier si le nombre de places est maintenant zéro pour supprimer l'offre
            /*if ($new_nombre_places === 0) {
                $this->deleteOffre($id);
                echo "<script>alert(''offre d'emploi a été supprimée car le nombre de places est épuisé.');</script>";
                echo "L'offre d'emploi a été supprimée car le nombre de places est épuisé.";
            }*/
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour du nombre de places : " . $e->getMessage();
        }
    } else {
        echo "Le nombre de places est déjà épuisé pour cette offre d'emploi.";
    }
}

public function getNombrePlacesById($id)
{
    $db = config::getConnexion();
    
    try {
        $sql = "SELECT nombre_place FROM offres_emploi WHERE id = :id";
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();

        $result = $query->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return $result['nombre_place']; // Retourne le nombre de places de l'offre
        } else {
            return 0; // Retourne zéro si aucune offre n'est trouvée pour cet ID
        }
    } catch (PDOException $e) {
        echo "Erreur lors de la récupération du nombre de places : " . $e->getMessage();
        return 0; // En cas d'erreur, retourne zéro
    }
}



}  
?>
