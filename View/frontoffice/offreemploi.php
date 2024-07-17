<?php

@include '../../config.php';

session_start();

if (!isset($_SESSION['name'])) {
  header('location:login.php');
}


?>
<?php
function afficherOffresEmploi($offres) {
    require_once '../../Controller/CandidatureC.php';
    $offreController = new CandidatureC();
    foreach ($offres as $offre) {
        echo "<div class='offre-emploi'>";
        echo "<h3 style='text-transform: uppercase; font-family: Arial, sans-serif;'>{$offre['titre']}</h3>";
        echo "<p><strong>Entreprise:</strong> {$offre['entreprise']}</p>";
        echo "<p><strong>Type de contrat:</strong> {$offre['type_contrat']}</p>";
        echo "<p><strong>Salaire:</strong> {$offre['salaire']}</p>";
        echo "<p><strong>Domaine:</strong> {$offre['domaine']}</p>";
        echo "<p><strong>Nombre de places:</strong> {$offre['nombre_place']}</p>";
        echo "<p><strong>Description:</strong> {$offre['description']}</p>";

        // Vérifier si une candidature existe pour cette offre
        $candidature_existe = $offreController->candidatureExistsForOffre($offre['id'],$_SESSION['id']);

        // Afficher le bouton "Postuler" conditionnellement
        if (!$candidature_existe) {
          if($offre['nombre_place']==0){
            echo "<h3><p style='text-decoration: underline;'>Cette offre n'est plus disponible !</p></h3>";
          }
          else{  
            echo "<h3><p style='text-decoration: underline;'><a href='AddCand.php?id={$offre['id']}' class='btn2'>Postuler</a></p></h3>";
          }
        } else {
          $statut_candidature = $offreController->getStatutCandidatureByOffreId($offre['id']);
          echo "<h3><p style='text-decoration: underline;'>Vous avez déjà postulé à cette offre , statut de candidature: {$statut_candidature}</p></h3>";
           
        }

        echo "</div>";
        echo "<br>"; // Ajouter un saut de ligne entre chaque offre d'emploi
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Ecc page d'acceuil</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="../backoffice/vendors/styles/core.css" />
  <link rel="stylesheet" type="text/css" href="../backoffice/vendors/styles/icon-font.min.css" />
  <link rel="stylesheet" type="text/css" href="../backoffice/src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" type="text/css" href="../backoffice/src/plugins/datatables/css/responsive.bootstrap4.min.css" />
  <link rel="stylesheet" type="text/css" href="../backoffice/vendors/styles/style.css" />

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <script></script>




</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">

    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body"><img src="img/logo-lg.png" title="" /></h1>

      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
        <li ><a href="home.php">Acceuil</a></li>
          <li class="menu-active"><a href="offreemploi.php">Offre d'emploi</a></li>
          <li><a href="#">Stage</a></li>
          <li><a href="#">Formation</a></li>
          <li><a href="#contact">Contact</a></li>
          <li>
            <button class="btn-login-signup"><a href="index.php" class="btn-login">Se deconnecter</a></button>

            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
              <span class="user-name"><?php echo $_SESSION['name'] ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
              <a class="dropdown-item" href="profile.php"><i class="dw dw-user1"></i> Profile</a>
              <a class="dropdown-item" href="profile.php"><i class="dw dw-settings2"></i> Setting</a>
              <a class="dropdown-item" href="faq.php"><i class="dw dw-help"></i> Help</a>
              <a class="dropdown-item" href="login.php"><i class="dw dw-logout"></i> Log Out</a>
            </div>

        </ul>
        <div class="user-info-dropdown">



        </div>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

<!-- affichage des offres d'emploi -->
<section id="offres" class="offres-section">
    <div class="container">
      <br><br></br></br>
      <h2 style="font-size: 34px; #8e0000; margin-bottom: 40px;">Liste des Offres d'Emplois:</h2>
      <?php 
          include '../../Controller/Offre_empC.php';
          $offreController = new OffreEmpC();
          $listeOffres = $offreController->listOffres();
          afficherOffresEmploi($listeOffres); 
      ?>
    </div>
  </section>
<!-- fin de l'affichage des offres d'emploi -->



<!--==========================
Footer
============================-->
<footer id="footer">
<div class="container">
  <div class="row">
    <div class="col-lg-6 text-lg-left text-center">
      <div class="footer-logo">
        <a href="#body"><img src="img/logo.png" alt="" class="img-fluid"></a>
      </div>
      <p>Plateforme de Recrutement - Trouvez les meilleurs talents et les meilleures opportunités professionnelles.</p>
    </div>
    <div class="col-lg-6">
      <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
        <a href="#intro" class="scrollto">Accueil</a>
        <a href="#about" class="scrollto">À Propos</a>
        <a href="#services" class="scrollto">Services</a>
        <a href="#portfolio" class="scrollto">Portefeuille</a>
        <a href="#contact" class="scrollto">Contactez-nous</a>
      </nav>
    </div>
  </div>
</div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/magnific-popup/magnific-popup.min.js"></script>
<script src="lib/sticky/sticky.js"></script>

<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

</body>

</html>