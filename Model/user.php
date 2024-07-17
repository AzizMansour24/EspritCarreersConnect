<?php
include_once 'C:\xampp\htdocs\2A34\Ecc_gestion_user\config.php';



class Users{
    private string $username;
    private string $civilite;
    private string $prenom;
    private string $nom;
    private string $email;
    private string $mdp;
    private string $expérience;
    private string $nivetude;
    private string $typeformation;
    private string $gouvernorat;
    private string $telephone;
    private string $ville;
    private string $cv;

   

    public function __construct(
        string $civilite = '',
        string $prenom = '',
        string $nom = '',
        string $email = '',
        string $mdp = '',
        string $expérience = '',
        string $nivetude = '',
        string $typeformation = '',
        string $gouvernorat = '',
        string $telephone = '',
        string $ville = '',
        string $cv = ''
    ) {
        $this->email = $email;
        $this->civilite = $civilite;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->mdp = $mdp;
        $this->expérience = $expérience;
        $this->nivetude = $nivetude;
        $this->typeformation = $typeformation;
        $this->gouvernorat = $gouvernorat;
        $this->telephone = $telephone;
        $this->ville = $ville;
        $this->cv = $cv;
    }

  
    

    //getters
    
    public function getUsername():string{
        return $this->username;
    }public function getCivilite():string{
        return $this->civilite;
    }
    public function getPrenom():string{
        return $this->prenom;
    }
    public function getNom():string{
        return $this->nom;
    }
    public function getEmail():string{
        return $this->email;
    }

    public function getPassword():string{
        return $this->mdp;
    }

    public function getVille():string{
        return $this->ville;
    }
    public function getGouv():string{
        return $this->gouvernorat;
    }
    public function getNivetude():string{
        return $this->nivetude;
    }
    public function getExperience():string{
        return $this->expérience;
    }
    public function getTypeformation():string{
        return $this->typeformation;
    }
    public function getTelephone():string{
        return $this->telephone;
    }
    public function getCV():string{
        return $this->cv;
    }

  
    //setters
    
    public function setUsername(string $username):void{
        $this->username = $username;
    }
    public function setCivilité(string $civilite):void{
        $this->civilite = $civilite;
    }

    public function setEmail(string $email):void{
        $this->email = $email;
    }

    public function setPassword(string $mdp):void{
        $this->mdp = $mdp;
    }

    public function setNom(string $nom):void{
        $this->nom = $nom;
    }
    public function setVille(string $ville):void{
        $this->ville = $ville;
    }
    public function setGouv(string $gouvernorat):void{
        $this->gouvernorat = $gouvernorat;
    }
    public function setNivetude(string $nivetude):void{
        $this->nivetude = $nivetude;
    }
    public function setExperience(string $expérience):void{
        $this->expérience = $expérience;
    }
    public function setPrenom(string $prenom):void{
        $this->prenom = $prenom;
    }
    public function setTypeformation(string $typeformation):void{
        $this->typeformation = $typeformation;
    }
    public function setTelephone(string $telephone):void{
        $this->telephone = $telephone;
    }
    public function setCv(string $cv):void{
        $this->cv = $cv;
    }
    
    
}

