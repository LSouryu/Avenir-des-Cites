<?php
require_once("./inc/init.inc.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Carrousels avec Owl Carousel</title>
    <link rel="stylesheet" href="./test.css">

    <!-- Inclure le CSS de Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- Inclure le fichier jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Inclure le JS de Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="./test.js" defer></script>
</head>

<body>
    <div class="carouselPaternaireInstitutionnels">

        <div class="partenaireInstitutionnels">
            <div class="owl-carousel carrousel" id="carrouselContainer1">
                <?php
                $resultat = executeRequete("SELECT id_partenaire, nom, diminutif, logo, type FROM partenaire WHERE type = 'Partenaire institutionnels'");
                $images = $resultat->fetch_all(MYSQLI_ASSOC);
                $totalImages = count($images);
                $imagesPerRow = ceil($totalImages / 3);

                // Afficher les images pour la première ligne du carrousel
                for ($i = 0; $i < $imagesPerRow; $i++) {
                    echo '<img class="photoInstitutionnels" src="' . $images[$i]['logo'] . '" width="50" />';
                }
                ?>
            </div>
        </div>

        <div class="partenaireInstitutionnels">
            <div class="owl-carousel carrousel-inverser" id="carrouselContainer2">
                <?php
                // Afficher les images pour la deuxième ligne du carrousel
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
                // Afficher les images pour la troisième ligne du carrousel
                for ($i = 2 * $imagesPerRow; $i < $totalImages; $i++) {
                    if ($i < $totalImages) {
                        echo '<img class="photoInstitutionnels" src="' . $images[$i]['logo'] . '" />';
                    }
                }
                ?>
            </div>
        </div>


    </div>



</body>

</html>