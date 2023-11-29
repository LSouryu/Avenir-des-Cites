<?php
require_once("./inc/init.inc.php");
require_once("./inc/haut.inc.php");

function afficherTitrePage()
{
    $nomPage = basename($_SERVER['PHP_SELF']);
    $nomPage = str_replace('.php', '', $nomPage);
    $nomPage = ucwords($nomPage);

    if (!empty($nomPage)) {
        echo $nomPage;
    } else {
        echo 'Titre de la page inconnu';
    }
} ?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./inc/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="./inc/js/script.js" defer></script>
</head>

<body>


        <div class="barrepartenaire-Un">
            <img src="./inc/img/barrepartenaire.png" alt="Logo">
        </div>

        <div class="nav"></div>
        <div class="partenaireFinanceurs">
            <h1 class="h1">NOS FINANCEURS</h1>

            <?php

            $resultat = executeRequete("SELECT id_partenaire, nom, diminutif, logo, type FROM partenaire where type ='Partenaire Financeurs'");
            while ($partenaire = $resultat->fetch_assoc()) {

                echo '<img class="photoFinanceurs" src=' . $partenaire['logo'] . ' />';
            }

            ?>
        </div>
    </div>
    
    <div class="barrepartenaire-Deux">
        <img src="./inc/img/barrepartenaire.svg" alt="Logo">
    </div>

    <div class="carouselPaternaireInstitutionnels">
        <h1 class="h1">NOS PARTENAIRES INSTITUTIONELS</h1>
        <div class="partenaireInstitutionnels">
            <div class="owl-carousel carrousel" id="carrouselContainer1">
                <?php
                $resultat = executeRequete("SELECT id_partenaire, nom, diminutif, logo, type FROM partenaire WHERE type = 'Partenaire institutionnels'");
                $images = $resultat->fetch_all(MYSQLI_ASSOC);
                $totalImages = count($images);
                $imagesPerRow = ceil($totalImages / 3);
                for ($i = 0; $i < $imagesPerRow; $i++) {
                    echo '<img class="photoInstitutionnels" src="' . $images[$i]['logo'] . '" width="50" />';
                }
                ?>
            </div>
        </div>
        <div class="partenaireInstitutionnels">
            <div class="owl-carousel carrousel-inverser" id="carrouselContainer2">
                <?php
                for ($i = $imagesPerRow; $i < 2 * $imagesPerRow; $i++) {
                    if ($i < $totalImages) {
                        echo '<img class="photoInstitutionnels" src="' . $images[$i]['logo'] . '" />';
                    }
                }
                ?>
            </div>
        </div>
        <div class="partenaireInstitutionnels">
            <div class="owl-carousel carrousel" id="carrouselContainer3">
                <?php
                for ($i = 2 * $imagesPerRow; $i < $totalImages; $i++) {
                    if ($i < $totalImages) {
                        echo '<img class="photoInstitutionnels" src="' . $images[$i]['logo'] . '" />';
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="barrepartenaire-Trois">
        <img src="./inc/img/barrepartenaire.png" alt="Logo">
    </div>





<?php require_once("./inc/bas.inc.php"); ?>

</body>
</html>