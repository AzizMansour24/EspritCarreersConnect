<?php
include '../../Controller/userC.php';

$error = "";
$user = null;
$userC = new usersC();

if (
    // isset($_POST["username"]) &&
    isset($_POST["civilite"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["email"]) &&

    isset($_POST["experience"]) &&
    isset($_POST["nivetude"]) &&
    isset($_POST["typeformation"]) &&
    isset($_POST["gouvernorat"]) &&
    isset($_POST["telephone"]) &&
    isset($_POST["ville"]) //&&
    // isset($_POST["cv"])
) {

    if (
        //  !empty($_POST["username"]) &&
        !empty($_POST["civilite"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["nom"]) &&
        !empty($_POST["email"]) &&

        !empty($_POST["experience"]) &&
        !empty($_POST["nivetude"]) &&
        !empty($_POST["typeformation"]) &&
        !empty($_POST["gouvernorat"]) &&
        !empty($_POST["telephone"]) &&
        !empty($_POST["ville"]) &&
        !empty($_POST["cv"])
    ) {
        $user = new users(
            "",
            $_POST['civilite'],
            $_POST['prenom'],
            $_POST['nom'],
            $_POST['email'],

            $_POST['experience'],
            $_POST['nivetude'],
            $_POST['typeformation'],
            $_POST['gouvernorat'],
            $_POST['telephone'],
            $_POST['ville'],
            $_POST['cv']
        );
        $userC->updateUser($user, $_POST['email']);
        // header('Location: listUsers.php');
    } else {
        $error = "Missing information";
    }
} else
    echo ("no");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    <style>
        body {
            background-color: #ffffff;
            font-family: Arial, sans-serif;
        }

        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 8px;
            margin: 4px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"],
        input[type="reset"],
        button {
            background-color: #ff0000;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover,
        button:hover {
            background-color: #cc0000;
        }

        #error {
            color: #ff0000;
            text-align: center;
            margin-top: 20px;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .back-link {
            color: #ffffff;
            background-color: #ff0000;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">

    </div>
    <button><a href="listUsers.php" class="back-link">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['email'])) {
        $user = $userC->showUser($_POST['email']);
    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="email">Email:</label>
                    </td>
                    <td>
                        <?php echo $user['email']; ?> <!-- Changed from "email" to "new_email" -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom">Prénom:</label>
                    </td>
                    <td>
                        <input type="text" name="prenom" value="<?php echo $user['prenom']; ?>" id="prenom" maxlength="20">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nom">Nom:</label>
                    </td>
                    <td>
                        <input type="text" name="nom" value="<?php echo $user['nom']; ?>" id="nom" maxlength="20">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="civilite">Civilité:</label>
                    </td>
                    <td>
                        <input type="text" name="civilite" value="<?php echo $user['civilite']; ?>" id="civilite">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="experience">Expérience:</label>
                    </td>
                    <td>
                        <input type="text" name="experience" value="<?php echo $user['experience']; ?>" id="experience">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nivetude">Niveau d'études:</label>
                    </td>
                    <td>
                        <input type="text" name="nivetude" value="<?php echo $user['nivetude']; ?>" id="nivetude">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="typeformation">Type de Formation:</label>
                    </td>
                    <td>
                        <input type="text" name="typeformation" value="<?php echo $user['typeformation']; ?>" id="typeformation">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gouvernorat">Gouvernorat:</label>
                    </td>
                    <td>
                        <input type="text" name="gouvernorat" value="<?php echo $user['gouvernorat']; ?>" id="gouvernorat">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="telephone">Téléphone:</label>
                    </td>
                    <td>
                        <input type="text" name="telephone" value="<?php echo $user['telephone']; ?>" id="telephone">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="ville">Ville:</label>
                    </td>
                    <td>
                        <input type="text" name="ville" value="<?php echo $user['ville']; ?>" id="ville">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cv">CV:</label>
                    </td>
                    <td>
                        <input type="text" name="cv" value="<?php echo $user['cv']; ?>" id="cv">
                    </td>
                </tr>
            </table>

            <div style="text-align: center;">
                <input type="submit" value="Update">
                <input type="reset" value="Reset">
            </div>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>