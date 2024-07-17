<?php 

class Offre_emp
{
    private ?int $id = null;
    private ?string $titre;
    private ?string $entreprise;
    private ?string $type_contrat;
    private ?string $salaire;
    private ?string $domaine;
    private ?int $nombre_place;
    private ?string $description;

    public function __construct(?int $id=null, ?string $titre, ?string $entreprise, ?string $type_contrat, ?string $salaire, ?string $domaine, ?int $nombre_place, ?string $description)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->entreprise = $entreprise;
        $this->type_contrat = $type_contrat;
        $this->salaire = $salaire;
        $this->domaine = $domaine;
        $this->nombre_place = $nombre_place;
        $this->description = $description;
    }

    public function getIdOF(): ?int
    {
        return $this->id;
    }

    public function getTitreOF(): ?string
    {
        return $this->titre;
    }

    public function getEntrepriseOF(): ?string
    {
        return $this->entreprise;
    }

    public function getTypeContratOF(): ?string
    {
        return $this->type_contrat;
    }

    public function getSalaireOF(): ?string
    {
        return $this->salaire;
    }

    public function getDomaineOF(): ?string
    {
        return $this->domaine;
    }

    public function getNombrePlaceOF(): ?int
    {
        return $this->nombre_place;
    }

    public function getDescriptionOF(): ?string
    {
        return $this->description;
    }

    public function setIdOF(?int $id): void
    {
        $this->id = $id;
    }

    public function setTitreOF(?string $titre): void
    {
        $this->titre = $titre;
    }

    public function setEntrepriseOF(?string $entreprise): void
    {
        $this->entreprise = $entreprise;
    }

    public function setTypeContratOF(?string $type_contrat): void
    {
        $this->type_contrat = $type_contrat;
    }

    public function setSalaireOF(?string $salaire): void
    {
        $this->salaire = $salaire;
    }

    public function setDomaineOF(?string $domaine): void
    {
        $this->domaine = $domaine;
    }

    public function setNombrePlaceOF(?int $nombre_place): void
    {
        $this->nombre_place = $nombre_place;
    }

    public function setDescriptionOF(?string $description): void
    {
        $this->description = $description;
    }
}   
?>
