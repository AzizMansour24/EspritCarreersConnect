<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up Form </title>
    <link rel="stylesheet" href="css/style2.css">
    <script src="script.js" defer></script>
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
</head>

<body>

    <div class="main-wrap2">
        <div class="box-container2">
            <div class="img-box">

            </div>
            <div class="form-wrap">
                <div class="top-signup">
                    <span>Avez-vous déja un comptet?</span>
                    <a href="login.php" class="login-btn">Connexion</a>
                </div>
                <div class="mid-container">
                    <h1>Bienvenu </h1>
                    <h6>Enregistrez votre compte</h6>
                    <form action="adduser.php" class="form" method="POST" enctype="multipart/form-data
                    
                    <?php 
                    if (!empty($error_message)): ?>
                        <div class="error-message"><?php echo $error_message; ?></div>
                    <?php endif; ?>
                      

                            <tr>
                                <td class="Tab">Civilite:</td><span style="color:#FF3300"> *</span>
                                <br>
                                <td class="Tabs">
                                    <select name="civilite" id="civilite" class="ch-select" required="">
                                        <option value=""></option>
                                        <option value="Homme"> Homme
                                        </option>
                                        <option value="Femme">Femme
                                        </option>
                                    </select>
                                </td>
                                <br>
                            </tr>

                            <br />
                            <label for="prenom">Prenom</label><span style="color:#FF3300"> *</span><br />
                            <input type="text" name="prenom" id="prenom" class="mb-bottom" required /><br />
                            <label for="nom">Nom</label><span style="color:#FF3300"> *</span><br />
                            <input type="text" name="nom" id="nom" class="mb-bottom" required /><br>
                            <label for="email">Email</label><span style="color:#FF3300"> *</span><br />
                            <input type="email" name="email" id="email" class="mb-bottom" required /><br />
                            <br>
                            <label for="mdp">Créer Mot-de-passe</label><span style="color:#FF3300"> *</span><br />
                            <div class="password-box mb-bottom">
                                <input type="password" name="mdp" id="mdp" required pattern="(?=.*[A-Z]).{8,}" />
                                <br />
                                <span class="pass-instruction mb-bottom">
                                    Le mot de passe doit contenir au moins 8 caractères et au moins une lettre majuscule.
                                </span><br />
                                
                            </div>
                                <td class="Tab">Expérience :</td><span style="color:#FF3300"> *</span>
                                <br>
                                <td class="Tabs">

                                    <select class="ch-select" name="experience" id="experience" onchange="getExperience();">
                                        <option value="">---</option>

                                        <option value="Achats">Achats / Supply Chain</option>
                                        <option value="SAV">Administration des ventes / SAV</option>
                                        <option value="Agriculture">Agriculture (métiers de l')</option>
                                        <option value="Assistanat de Direction">Assistanat de Direction / Services Généraux</option>
                                        <option value="Assurance">Assurance (métiers de l')</option>
                                        <option value="Audit">Audit / Conseil</option>
                                        <option value="Avocat">Avocat / Juriste / Fiscaliste</option>
                                        <option value="Banque">Banque (métiers de la)</option>
                                        <option value="Call Centers">Call Centers (métiers de)</option>
                                        <option value="Caméraman">Caméraman / Monteur / Preneur de son</option>
                                        <option value="Commercial">Commercial / Vente / Export</option>
                                        <option value="Communication">Communication / Publicité / RP</option>
                                        <option value="Coursier">Coursier / Gardiennage / Propreté</option>
                                        <option value="Distribution">Distribution (métiers de la)</option>
                                        <option value="Electricité">Electricité</option>
                                        <option value="Enseignement">Enseignement</option>
                                        <option value="Environnement">Environnement (métiers de l')</option>
                                        <option value="Gestion">Gestion / Comptabilité / Finance</option>
                                        <option value="Gestion">Gestion projet / Etudes / R&D</option>
                                        <option value="Hôtellerie">Hôtellerie / Restauration (métiers de)</option>
                                        <option value="Immobilier">Immobilier / Promotion (métiers de)</option>
                                        <option value="Imprimerie">Imprimerie (métiers de l')</option>
                                        <option value="Informatique">Informatique / Electronique</option>
                                        <option value="Journalisme">Journalisme / Traduction</option>
                                        <option value="Logistique">Logistique / Transport (métiers de)</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Multimédia">Multimédia / Internet</option>
                                        <option value="Médical">Médical / Paramédical</option>
                                        <option value="Méthodes">Méthodes / Process / Industrialisation</option>
                                        <option value="Production">Production / Qualité / Sécurité / Maintenance</option>
                                        <option value="RH">RH / Personnel / Formation</option>
                                        <option value="Responsable de Département">Responsable de Département</option>
                                        <option value="Santé">Santé / Social (métiers de)</option>
                                        <option value="Sport">Sport / Loisirs (métiers de)</option>
                                        <option value="Tourisme">Tourisme (métiers du)</option>
                                        <option value="Travaux">Travaux / Chantiers / BTP</option>
                                        <option value="Télécoms">Télécoms / Réseaux</option>
                                        <option value="Urbanisme">Urbanisme / architecture</option>
                                        <option value="-1"> Autre </option>
                                    </select>

                                </td>
                                <br>
                                <td class="Tab">Niveau d'études :</td><span style="color:#FF3300"> *</span>
                                <br>
                                <td class="Tabs">

                                    <select class="ch-select" name="nivetude"  id="nivetude" "="">
                                      <option value="">---</option>
                                           
                                        <option value="Bac">Bac</option>
                                        <option value="Bac+1">Bac+1</option>
                                        <option value="Bac+2"> Bac+2</option>
                                        <option value="Bac+3">Bac+3 </option>
                                        <option value="Bac+4"> Bac+4 </option>
                                        <option value="Bac+5"> Bac+5 </option>
                                        <option value="Bac+6">Bac+6</option>
                                        
                                    </select>
                                    
                                    <br>
                                </td>
                                </tr>
                                <br>
                                <td class="Tab">Type de Formation :</td><span style="color:#FF3300"> *</span>
                                <br>
                                <td class="Tabs">

                                    <select class="ch-select" name="typeformation" id="typeformation" "=">
                                      <option value="">---</option>
                                      <option value=" Aéro
                                        nautique">Aéro
                                        nautique / Spatial</option>
                                        <option value="Agence pub ">Agence pub / Marketing Direct</option>
                                        <option value="Agriculture">Agriculture / Environnement </option>
                                        <option value="Agroalimentaire">Agroalimentaire</option>
                                        <option value="Assurance">Assurance / Courtage</option>
                                        <option value="Audiovisuel">Audiovisuel</option>
                                        <option value="Automobile">Automobile / Motos / Cycles</option>
                                        <option value="Banque">Banque / Finance</option>
                                        <option value="BTP">BTP / Génie Civil</option>
                                        <option value="Centre">Centre d'appel</option>
                                        <option value="Chimie">Chimie / Parachimie / Peintures</option>
                                        <option value="Comptabilité">Comptabilité / Audit</option>
                                        <option value="Conseil">Conseil / Etudes</option>
                                        <option value="Distribution">Distribution</option>
                                        <option value="Edition">Edition / Imprimerie</option>
                                        <option value="Enseignement">Enseignement / Formation</option>
                                        <option value="Energie">Energie</option>
                                        <option value="Extraction">Extraction / Mines</option>
                                        <option value="Ferroviaire">Ferroviaire</option>
                                        <option value="Hôtellerie">Hôtellerie / Restauration</option>
                                        <option value="Immobilier">Immobilier / Promoteur / Agence</option>
                                        <option value="Informatique">Informatique</option>
                                        <option value="Internet">Internet / Multimédia</option>
                                        <option value="Matériel Médical">Matériel Médical</option>
                                        <option value="Pétrole">Pétrole / Gaz</option>
                                        <option value="Pharmacie">Pharmacie / Santé</option>
                                        <option value="Plasturgie">Plasturgie</option>
                                        <option value="Presse">Presse</option>
                                        <option value="Recrutement">Recrutement / Intérim</option>
                                        <option value="Administration">Service public / Administration</option>
                                        <option value="Tabac">Tabac</option>
                                        <option value="Telecom">Telecom</option>
                                        <option value="Textile">Textile / Cuir</option>
                                        <option value="Tourisme">Tourisme / Voyage / Loisirs </option>
                                        <option value="Transport">Transport / Messagerie / Logistique</option>
                                        <option value="Ameublement">Ameublement / Décoration</option>
                                        <option value="Communication">Communication / Evénementiel</option>
                                        <option value="Cosmétique">Cosmétique / Parfumerie / Luxe</option>
                                        <option value="Mécanique">Electro-mécanique / Mécanique</option>
                                        <option value="Electronique">Electronique</option>
                                        <option value="Import">Import / Export / Négoce</option>
                                        <option value="Juridique">Juridique / Cabinet d’avocats</option>
                                        <option value="Métallurgie">Métallurgie / Sidérurgie</option>
                                        <option value="Nettoyage">Nettoyage / Sécurité / Gardiennage</option>
                                        <option value="Offshoring">Offshoring / Nearshoring</option>
                                        <option value="Papier">Papier / Carton</option>
                                        <option value="Electricité">Electricité</option>
                                        <option value="Autres">Autres Industries</option>
                                        
                                    </select>
                                    <br>
                                </td>
                                </tr>
                                <br>
                                <tr>
                                    <td class="Tab">Gouvernorat:</td><span style="color:#FF3300"> *</span>
                                    <br>
                                    <td class="Tabs">
                                        <select name="gouvernorat" id="gouvernorat" class="ch-select" required="">
                                            <option value=""></option>
                                            <option value="Ariana"> Ariana
                                            </option>
                                            <option value="Beja">Beja
                                            </option>
                                            <option value="Ben Arous">Ben Arous ;
                                            </option>
                                            <option value="Bizerte">Bizerte
                                            </option>
                                            <option value="Gabes">Gabes
                                            </option>
                                            <option value="Gafsa">Gafsa
                                            </option>
                                            <option value="Jendouba">Jendouba
                                            </option>
                                            <option value="Kairouan">Kairouan
                                            </option>
                                            <option value="9Kasserine">Kasserine
                                            </option>
                                            <option value="Kebili">Kebili
                                            </option>
                                            <option value="Le Kef">Le Kef
                                            </option>
                                            <option value="Mahdia">Mahdia
                                            </option>
                                            <option value="Manouba">Manouba
                                            </option>
                                            <option value="Medenine">Medenine
                                            </option>
                                            <option value="Monastir">Monastir
                                            </option>
                                            <option value="Nabeul">Nabeul
                                            </option>
                                            <option value="Sfax">Sfax
                                            </option>
                                            <option value="Sidi Bouzid">Sidi Bouzid
                                            </option>
                                            <option value="Siliana">Siliana
                                            </option>
                                            <option value="Sousse">Sousse
                                            </option>
                                            <option value="Tataouine">Tataouine
                                            </option>
                                            <option value="Tozeur">Tozeur
                                            </option>
                                            <option value="Tunis">Tunis
                                            </option>
                                            <option value="Zaghouan">Zaghouan
                                            </option>
                                            
                                        </select>
                                    </td>
                                    <br>
                                </tr>
                                </br>
                                <label for="téléphone">Telephone</label><span style="color:#FF3300"> *</span><br />
                                <div class="password-box mb-bottom">
                                    <input type="text" name="telephone" id="telephone" required /><br />

                                </div>
                                <label for="ville">Ville</label><span style="color:#FF3300"> *</span><br />
                                <input type="text" name="ville" id="ville" class="mb-bottom" required /><br />
                                <br>
                                <div>
                                    <label for="cv" class="btn">Télécharger CV en PDF :</label>
                                    <input type="file" name="cv" id="cv">
                                </div>
                                <div>
                                    <div>
                                        <title>reCAPTCHA demo: Simple page</title>
                                        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                    </div>
                                    <div>
                                        <form  method="POST">
                                        <div class="g-recaptcha" data-sitekey="6Lc2RcgpAAAAAInVIMHxtr7kcX6EFSquyC-EipS1"></div>
                                        <br/>
                                        <input type="submit" id="register-submit" class="register-btn" value="S'inscrire">
                                        </form>
                                        </div>
                                </div>
                                <br>
                                
                        
                    </form>
                    <!-- error container -->
                    <div class="error-box" id="error-box-1">
                        <!-- Error: Username or password doesn't match! -->
                    </div>

                </div>
            </div>
</body>

</html>