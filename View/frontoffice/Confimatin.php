<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <title>Login Form</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="main-wrap">
        <div class="box-container">
            <div class="img-box"></div>
            <div class="form-wrap">
                <div class="top-signup">
                    <span>Vous n'avez pas de compte?</span>
                    <a href="signup.php" class="signup-btn">Inscription</a>
                </div>
                <div class="mid-container">
                    <h1>Bon retour</h1>
                    <h6>Connectez-vous à votre compte</h6>
                    <!-- Afficher le message d'erreur s'il est défini -->

                    <form class="form" action="../frontoffice/verifyuser.php" method="post">
                    
                  

                        <label for="email">Nom d'utilisateur</label><br>
                        <input type="text" name="email" id="email" placeholder=" email"><br><br>
                        <label for="password">Mot de passe</label><br>
                        <input type="password" name="password" id="password" placeholder="Mot de passe"><br>
                        <span><a href="#" class="fg-pass">Mot de passe oublié?</a></span><br>
                        <button type="submit" id="login_button" name="login_button" class="login-btn">Connexion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
