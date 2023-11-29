<?php require_once("./inc/init.inc.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./inc/css/index.css">
    <script src="./inc/js/script.js" defer></script>
</head>

<body>
    <style>
        .formulaireConnexion {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        label {
            display: flex;
            justify-content: center;
        }

        button {
            background-color: #7D5C67;
            color: white;
            border-radius: 10px;

        }

        input {
            height: 20px;
            border-radius: 15px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 30%;
            /* margin-left: 30%; */
        }


        @media screen and (max-width: 700px) {

            /* .formulaireConnexion {
                display: flex;
                justify-content: center;
            } */
            .formulaireConnexion {
                margin-left: -10%;
            }

            .ligne {
                height: 30px;
                width: 100%;
                background-color: #7D5C67;
                margin-bottom: 5%;
            }

            input {
                border-radius: 10px;
                height: 30px;
                width: 300px;
            }

            button {
                font-size: 15px;
                width: 200px;
                height: 50px;
                margin-left: 20%;

            }

        }
    </style>
    <div class="header">
        <p class="titreResponsive">Service de prévention spécialisée</p>
        <img class="header-item logo" src="./inc/img/logo/logo.svg">
        <p class="header-item titre">Connexion</p>
        <img class="header-item menu" src="./inc/img/Menu.svg">
    </div>

    <?php
    if ($_POST) {
        $resultat = executeRequete("SELECT * FROM admin WHERE email='$_POST[email]'");
        if ($resultat->num_rows != 0) {
            // ---- Traitement de connexion
            $membre = $resultat->fetch_assoc();
            if (password_verify($_POST['password'], $membre['password'])) {
                // ---- Traitement du mot de passe
                foreach ($membre as $indice => $element) {
                    if ($indice != 'password') {
                        $_SESSION['utilisateur'][$indice] = $element;
                    }
                }
            } else {
                $contenu .= '<div class="erreur">Erreur du mot de passe</div>';
            }
        } else {
            $contenu .= '<div class="erreur">Erreur de mail</div>';
        }
    }

    require_once("./inc/haut.inc.php");
    echo $contenu; ?>

    <div class="ligne"></div>

    <div class="formulaireConnexion">

        <form action="" method="post">
            <label for="email"> Adresse mail</label><br>
            <input type="text" id="email" name="email"><br><br>
            <label for="password">Mot de passe</label><br>
            <input type="password" id="password" name="password"><br><br>
            <button>Connexion</button>

        </form>

    </div>
</body>

</html>

<?php
// require_once("./inc/bas.inc.php");
?>