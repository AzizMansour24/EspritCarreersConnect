<?php

@include '../../config.php';

session_start();

if (!isset($_SESSION['name'])) {
  header('location:login.php');
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

          <li><a href="offreemploi.php">Offre d'emploi</a></li>
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

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>Bonjour <br><span><?php echo $_SESSION['name'] ?>!</span></h2>

    </div>

    <div id="intro-carousel" class="owl-carousel">
      <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section>

  <main id="main">

<!--==========================
  About Section
============================-->
<section id="about" class="wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 about-img">
        <img src="img/about-img.jpg" alt="À propos de nous">
      </div>

      <div class="col-lg-6 content">
        <h2>Bienvenue sur notre Plateforme de Recrutement</h2>
        <h3>Nous vous connectons aux meilleures opportunités professionnelles et aux talents les plus prometteurs.</h3>

        <ul>
          <li><i class="ion-android-checkmark-circle"></i> Recherchez parmi des milliers d'offres d'emploi.</li>
          <li><i class="ion-android-checkmark-circle"></i> Découvrez les derniers stages disponibles.</li>
          <li><i class="ion-android-checkmark-circle"></i> Trouvez la formation qui vous aidera à avancer dans votre carrière.</li>
        </ul>

      </div>
    </div>

  </div>
</section><!-- #about -->

<!--==========================
  Services Section
============================-->
<section id="services">
  <div class="container">
    <div class="section-header">
      <h2>Nos Services</h2>
      <p>Découvrez nos services pour simplifier votre processus de recrutement ou votre recherche d'emploi.</p>
    </div>

    <div class="row">

      <div class="col-lg-6">
        <div class="box wow fadeInLeft">
          <div class="icon"><i class="fa fa-bar-chart"></i></div>
          <h4 class="title"><a href="">Recherche d'Emploi</a></h4>
          <p class="description">Trouvez le poste parfait correspondant à vos compétences et à vos aspirations professionnelles.</p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="box wow fadeInRight">
          <div class="icon"><i class="fa fa-picture-o"></i></div>
          <h4 class="title"><a href="">Stages</a></h4>
          <p class="description">Découvrez et postulez aux stages dans les meilleures entreprises pour acquérir une expérience professionnelle précieuse.</p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="box wow fadeInLeft" data-wow-delay="0.2s">
          <div class="icon"><i class="fa fa-shopping-bag"></i></div>
          <h4 class="title"><a href="">Formations</a></h4>
          <p class="description">Trouvez la formation adaptée à vos besoins pour développer vos compétences et avancer dans votre carrière.</p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="box wow fadeInRight" data-wow-delay="0.2s">
          <div class="icon"><i class="fa fa-graduation-cap"></i></div>
          <h4 class="title"><a href="">Recrutement</a></h4>
          <p class="description">Publiez vos offres d'emploi et trouvez les meilleurs talents pour votre entreprise.</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- #services -->

<!--==========================
  Client Section
============================-->
<section id="clients" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Clients</h2>
      <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
    </div>

    <div class="owl-carousel clients-carousel">
      <img src="img/clients/client-1.png" alt="">
      <img src="img/clients/client-2.png" alt="">
      <img src="img/clients/client-3.png" alt="">
      <img src="img/clients/client-4.png" alt="">
      <img src="img/clients/client-5.png" alt="">
      <img src="img/clients/client-6.png" alt="">
      <img src="img/clients/client-7.png" alt="">
      <img src="img/clients/client-8.png" alt="">
    </div>

  </div>
</section><!-- #clients -->



<!--==========================
  Call To Action Section
============================-->
<section id="call-to-action" class="wow fadeIn">
  <div class="container text-center">
    <h3 class="cta-text">Vous êtes prêt à commencer?</h3>
    <p class="cta-text">Contactez-nous dès aujourd'hui pour trouver les meilleurs talents ou découvrir votre prochaine opportunité professionnelle.</p>
    <a class="cta-btn" href="#contact">Contactez-nous</a>
  </div>
</section><!-- #call-to-action -->

<!--==========================
  Portfolio Section
============================-->


<!--==========================
  Testimonials Section
============================-->
<section id="testimonials" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Témoignages</h2>
    </div>
    <div class="owl-carousel testimonials-carousel">

      <div class="testimonial-item">
        <p>
          <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at felis et dui ullamcorper bibendum id at urna.
          <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
        </p>
        <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
        <h3>Nom du Témoin 1</h3>
        <h4>Profession</h4>
      </div>

      <div class="testimonial-item">
        <p>
          <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
          Phasellus at rutrum nunc. Morbi ipsum ante, ultricies non lectus vel, hendrerit rutrum mauris.
          <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
        </p>
        <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
        <h3>Nom du Témoin 2</h3>
        <h4>Profession</h4>
      </div>

      <div class="testimonial-item">
        <p>
          <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
          Duis finibus venenatis purus, nec malesuada turpis rhoncus ac. Duis congue vestibulum magna.
          <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
        </p>
        <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
        <h3>Nom du Témoin 3</h3>
        <h4>Profession</h4>
      </div>

      <div class="testimonial-item">
        <p>
          <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
          Quisque accumsan purus at velit tempor, sed suscipit massa gravida. Fusce molestie elit a loreto.
          <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
        </p>
        <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
        <h3>Nom du Témoin 4</h3>
        <h4>Profession</h4>
      </div>

      <div class="testimonial-item">
        <p>
          <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at felis et dui ullamcorper bibendum id at urna.
          <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
        </p>
        <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
        <h3>Nom du Témoin 5</h3>
        <h4>Profession</h4>
      </div>

    </div>

  </div>
</section><!-- #testimonials -->

<!--==========================
  Contact Section
============================-->
<section id="contact" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Contactez-nous</h2>
      <p>Nous sommes là pour répondre à vos questions et vous aider dans votre processus de recrutement.</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>Adresse</h3>
          <address>123 Rue Principale, Ville, Pays</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>Téléphone</h3>
          <p><a href="tel:+1234567890">+1 234 567 890</a></p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>Email</h3>
          <p><a href="mailto:info@example.com">info@example.com</a></p>
        </div>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="form">
      <div id="sendmessage">Votre message a bien été envoyé. Merci!</div>
      <div id="errormessage"></div>
      <form action="" method="post" role="form" class="contactForm">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" data-rule="minlen:4" data-msg="Veuillez entrer au moins 4 caractères." />
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-6">
            <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email" data-msg="Veuillez entrer une adresse email valide." />
            <div class="validation"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Veuillez entrer au moins 8 caractères du sujet." />
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Veuillez écrire quelque chose pour nous." placeholder="Message"></textarea>
          <div class="validation"></div>
        </div>
        <div class="text-center"><button type="submit" class="btn btn-primary">Envoyer le Message</button></div>
      </form>
    </div>

  </div>
</section><!-- #contact -->

</main>

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