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

    <div id="pageEquipe">
        <div id="corpPage">
            <div class="barreResponsive"></div>
            <div class="entete">
                <div class="header">
                    <p class="titreResponsive">Service de prévention spécialisée</p>
                    <img class="header-item logo" src="./inc/img/logo/logo.svg">
                    <p class="header-item titre">QUI SOMMES-NOUS?</p>
                    <img class="header-item menu" src="./inc/img/Menu.svg">
                </div>
                <div class="barreResponsive"></div>
                <div class="description">
                    <p class="descriptionResponsive">QUI SOMMES-NOUS?</p>

                    <span>Lorem ipsum dolor sit amet consectetur. Euismod nulla sit proin nunc purus ipsum elementum placerat.
                        Augue magna mollis volutpat laoreet feugiat habitant viverra scelerisque.Parler des Promeneurs du Net</span>
                </div>
                <div class="barreResponsive"></div>
                <?php
                echo "<div class='lienCategorie'>";
                $position = executeRequete("SELECT DISTINCT position_entreprise FROM equipe_educative");
                echo "<ul>";
                while ($produit = $position->fetch_assoc()) {
                    echo "<a href='?position_entreprise=" .  substr($produit['position_entreprise'], 2) . "'>" .  substr($produit['position_entreprise'], 2) . "</a></li>";
                }
                echo "</ul>";
                echo '</div>';
                ?>
            </div>

            <div class="spacer"></div>
            <div class="gridResponsive"></div>
            <div id="equipeEducative">
                <?php
                $resultat = executeRequete("SELECT lastname, fristname,photo, city, role, phone_number, mail, position_entreprise FROM equipe_educative ORDER BY position_entreprise,city desc, role asc");
                $compteur = 0;
                $totalMembres = $resultat->num_rows;
                while ($equipe = $resultat->fetch_assoc()) {
                    $compteur++;
                    $derniersMembres = $totalMembres - 2;

                    echo '<div id="membre" class="membre' . ($compteur % 2 == 0 ? ' column-reverse' : '') . ($compteur >= $derniersMembres ? ' derniers-membres' : '') . '">';
                    echo "<p class='position_entrepriseResponsive'>" . $equipe['position_entreprise'] . "</p>";
                    // echo "<p>" . $equipe['city'] . "</p>";
                    echo "<div class='coordoner'>";
                    echo "<p class='positionEntreprise'>" . substr($equipe['position_entreprise'], 2) . "</p>";
                    if ($compteur <= 2) {
                        echo "<p>" . $equipe['role'] . "</p>";
                    }
                    echo "<p class='nomPrenom'>" . $equipe['fristname'] . ' ' . strtoupper($equipe['lastname']) . "</p>";
                    echo "</div>";
                    echo '<div class="espace"></div>';
                    echo '<div class="cardContainer">';
                    echo '<img class="imageContainer" src=' . $equipe['photo'] . ' />';
                    echo '<div class="hoverCard">';
                    echo "<p class='nomPrenomCard'><b>" . $equipe['fristname'] . ' ' . strtoupper($equipe['lastname']) . "</b></p>";
                    echo '<p><img src="./inc/img/logo/LogoTelephone.svg" alt="Icône téléphone"> ' . $equipe['phone_number'] . '</p>';
                    echo '<p><img src="./inc/img/logo/LogoMail.svg" alt="Icône mail"> ' . $equipe['mail'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>

            <div class="BouttonFleche">
                <div class="monBouton" onmouseover="changeCouleur(event)">
                    <a href="#" class="button bordure" id="contactButton">Nous contacter<div class="square"></div></a>
                </div>
                <!-- <div class="container">
                    <div class="rectangle-top"></div>
                    <div class="rectangle-bottom">
                        <div class="rectangle-second"></div>
                    </div>
                    <div class="center-text">Envoyer</div>
                </div> -->
                <!-- <a href="#pageTrois"></a> -->
                <a id="deplace" href="#pageTrois"><img class="flecheAller" src="./public/img/flecheAller.png"></a>
            </div>

        </div>
        <div id="pageDeux">
            <div class="titre">

                <p>Nos membres du Conseil d'Administration</p>
            </div>
            <div class="membreConseil">
                <?php
                echo '<div class="nomRole">';
                $resultat = executeRequete("SELECT nom, role FROM conseil_administration");
                while ($membreConseil = $resultat->fetch_assoc()) {
                    echo '<p>' . $membreConseil['nom'] . '</p>';
                    echo '<p>' . $membreConseil['role'] . '</p>';
                }
                echo '</div>';
                ?>
            </div>
        </div>

        <div class="separation">
            <!-- <img src="./inc/img/barre3.png" alt="Logo"> -->

        </div>
        <div class="gridContainer border">
            <div class="gridContainer-1">

                <div class="gridIitem">
                    <div class="titreReseaux">Retrouvez-nous sur les réseaux sociaux:</div>
                    <div class="social-media-icons">
                        <a href="https://www.youtube.com/@sadekdeghimachefdeservice8467/videos%22%3E">
                            <div class="icon-container">
                                <img src="./inc/img/logo/youtube_liedevin.svg" alt="YouTube" class="icon original-icon">
                                <img src="./inc/img/logo/youtube_color.svg" alt="YouTube" class="icon hover-icon">
                            </div>
                        </a>

                        <a href="https://www.facebook.com/Avenirdescites/%22%3E">
                            <div class="icon-container">
                                <img src="./inc/img/logo/facebook_liedevin.svg" alt="Facebook" class="icon original-icon">
                                <img src="./inc/img/logo/facebook_color.svg" alt="Facebook" class="icon hover-icon">
                            </div>
                        </a>
                        <a href="https://twitter.com/AvenirdesCites">
                            <div class="icon-container">
                                <img src="./inc/img/logo/twitter_liedevin.svg" alt="Twitter" class="icon original-icon">
                                <img src="./inc/img/logo/twitter_color.svg" alt="Twitter" class="icon hover-icon">
                            </div>
                        </a>
                        <a href="https://www.linkedin.com/company/avenir-des-cit%C3%A9s-service-de-pr%C3%A9vention-sp%C3%A9cialis%C3%A9e/?original_referer=https%3A%2F%2Fwww%2Egoogle%2Ecom%2F&originalSubdomain=fr%22%3E">
                            <div class="icon-container">
                                <img src="./inc/img/logo/linkedin_liedevin.svg" alt="LinkedIn" class="icon original-icon">
                                <img src="./inc/img/logo/linkedin_color.svg" alt="LinkedIn" class="icon hover-icon">
                            </div>
                        </a>
                        <a href="#membre"><img class="flecheRetour" src="./public/img/flecheRetour.png"></a>
                    </div>

                </div>
            </div>

            <div id="pageTrois" class="gridContainer-2">

                <div class="logoFooter">
                    <a href="index.php">
                        <img src="./inc/img/logo/logo_avenirdescites.png" alt="Logo">
                    </a>
                </div>

                <div class="adresseFooter">
                    <p>Siège Social</p>
                    <p>19 bis, Rue des Fusillés | BP 40</p>
                    <p>62440 HARNES</p>
                    <p>03.61.93.11.38</p>
                </div>

                <div class="menuFooter">
                    <div class="menuColumnFooter">
                        <a href="presentation.php">Présentation</a>
                        <a href="equipe.php">Équipe</a>
                        <a href="actualites.php">Actualités</a>
                        <a href="partenaires.php">Nos partenaires</a>
                        <a href="contact.php">Contact</a>
                        <a href="documents.php">Documents à télécharger</a>
                    </div>
                </div>

                <div class="plus">Avenir des cités - &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script> -
                    <a class="mentions-legales" href="mentions_legales.php">Mentions Légales</a>
                </div>

                <div class="designDev">

                    <div class="design">
                        <span>Design par:</span><br>
                        <a class="email" href="mailto:adresse_email_nadege">Nadège CHOQUET</a>
                    </div>

                    <div class="dev">
                        <span>Développement, déploiement et intégration:</span><br>
                        <a class="email" href="mailto:delefosse.christina62@gmail.com">Christina DELEFOSSE</a> et <a class="email" href="mailto:adresse_email_nadege">Nicolas STEVENS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>