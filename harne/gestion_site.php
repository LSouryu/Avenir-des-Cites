<?php
require_once("./inc/init.inc.php");
// require_once("./inc/haut.inc.php");
?>
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
    <?php
    echo '<div class="headerAdmin">';
    echo '<div class="headerDroite">';
    echo '<h1>Avenir des cités</h1>';
    echo '</div>';
    echo '<div class="headerGauche">';
    echo '<h3><img src="./inc/img/logo/avatar.svg" width="30px">sdeghima.avenirdescites@gmail.com</h3>';
    echo '</div>';
    echo '</div>';

    // if (isset($_GET['action']) && $_GET['action'] == "suppression") {
    //     executeRequete("DELETE FROM conseil_administration WHERE id_conseil_administration=$_GET[id_conseil_administration]");
    //     echo '<div class="validation">Suppression de l\'utilisateur : ' . $_GET['id_conseil_administration'] . '</div>';
    //     $_GET['action'] = 'affichageConseilAdministration';
    // }

    if (isset($_GET['action']) && $_GET['action'] == "suppression2") {
        executeRequete("DELETE FROM equipe_educative WHERE id_equipe_educative=$_GET[id_equipe_educative]");
        echo '<div class="validation">Suppression de l\'utilisateur : ' . $_GET['id_equipe_educative'] . '</div>';
        $_GET['action'] = 'affichageEquipeEducative';
    }

    if (isset($_GET['action']) && $_GET['action'] == "modification") {

        $resultat = executeRequete("SELECT * FROM conseil_administration WHERE id 7
        *_conseil_administration=$_GET[id_conseil_administration]");
        $conseil_administration_actuel = $resultat->fetch_assoc();

        echo '

            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id_conseil_administration" name="id_conseil_administration" value="';
        if (isset($conseil_administration_actuel['id_conseil_administration']))
            echo
            $conseil_administration_actuel['id_conseil_administration'];
        echo '">
        </form>';
    }

    echo '<div class="corpPageAdmin">';

    //---- LIENS PRODUIT ----//
    echo '<div class="menuCrud">';
    echo '<span><p>Blog<br></p>';
    echo '<a class="lienCrud article" href="?action=affichageArticle"><img src="./inc/img/logo/articleAdmin.svg">Article</a><br>';
    echo '<a class="lienCrud newArticle" href="?action=ajoutArticle"><img src="./inc/img/logo/newArticle.svg">Créer un nouvel article</a><br></span>';

    echo '<span><p>Événement<br></p>';
    echo '<a class="lienCrud evenement" href="?action=affichageEvenement"><img src="./inc/img/logo/evenement.svg">Evenement</a><br></span>';

    echo '<span><p>Equipe<br></p>';
    echo '<a class="lienCrud equipeEducative" href="?action=affichageEquipeEducative"><img src="./inc/img/logo/equipe.svg">Equipe educative</a><br>';
    echo '<a class="lienCrud conseilAdministration" href="?action=affichageConseilAdministration"><img src="./inc/img/logo/conseilAdministration.svg" width="30px">Membre du conseil administation</a><br></span>';

    echo '<span><p>Partenaire<br></p>';
    echo '<a class="lienCrud partenaire" href="?action=affichagePartenaire"><img src="./inc/img/logo/partenaire.svg">Partenaire</a><br></span>';
    echo '</div>';

    // if (isset($_GET['action']) && $_GET['action'] == "suppression") {
    //     $resultat = executeRequete("SELECT id_equipe_educative,lastname, fristname,photo, city, role, phone_number, mail, position_entreprise FROM equipe_educative ORDER BY position_entreprise,city desc, role asc");
    // }


    if (isset($_GET['action']) && $_GET['action'] == "affichageArticle") {
        echo ' <div class="affichageArticle">';
        $resultat = executeRequete("SELECT id_article, titre, resume, corps, illustration, publication, update_at FROM article");
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Titre</th>';
        echo '<th>Résumé</th>';
        echo '<th>corps</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        while ($articleAdmin = $resultat->fetch_assoc()) {
            $resume = $articleAdmin['resume'];
            $premiers_mots = implode(' ', array_slice(explode(' ', $resume), 0, 10));
            $premiers_mots_avec_points = $premiers_mots . '...';

            echo '<tr>';
            echo '<td><p class="titre">' . $articleAdmin['titre'] . '</p></td>';
            echo '<td><p class="resume">' . $premiers_mots_avec_points . '</p></td>';
            echo '<td id="corpsAdmin">' . $articleAdmin['corps'] . '</td>';
            echo '<td><button class="btn boutonEnSavoirPlus" id="btn">Voir le contenu</button></td>';

            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    }

    if (isset($_GET['action']) && $_GET['action'] == "affichageEquipeEducative") {
        echo ' <div class="affichageEquipeEducative">';
        $resultat = executeRequete("SELECT id_equipe_educative,lastname, fristname,photo, city, role, phone_number, mail, position_entreprise FROM equipe_educative ORDER BY position_entreprise,city desc, role asc");
        echo '<h2>Equipe Éducative</h2>';
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Nom</th>';
        echo '<th>Prenom</th>';
        echo '<th>City</th>';
        echo '<th >Numéro de telephone</th>';
        echo '<th >Email</th>';
        echo '<th>Modifier</th>';
        echo '<th>Supprimer</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        while ($equipeAdmin = $resultat->fetch_assoc()) {

            echo '<tr>';
            echo '<td><p class="lastfirstname">' . $equipeAdmin['fristname'] . '</p></td>';
            echo '<td><p class="lastname">' . $equipeAdmin['lastname'] . '</p></td>';
            echo '<td><p class="city">' . $equipeAdmin['city'] . '</p></td>';
            echo '<td><p class="phone_number">' . $equipeAdmin['phone_number'] . '</p></td>';
            echo '<td><p class="mail">' . $equipeAdmin['mail'] . '</p></td>';
            echo '<td class="modif"><a href="?action=modification&id_equipe_educative=' . $equipeAdmin['id_equipe_educative'] . '"><img src="../inc/img/logo/edit.png"></a></td>';
            echo '<td class="modif"><a href="?action=suppression2&id_equipe_educative=' . $equipeAdmin['id_equipe_educative'] . '" OnClick="return(confirm(\'En êtes vous certain ?\'));"><img src="../inc/img/logo/delete.png"></a></td>';

            echo '</tr>';
        }
        echo '</tbody>';
        echo ' </table>';
        echo '</div>';
    }



    if (isset($_GET['action']) && $_GET['action'] == "affichageConseilAdministration") {
        echo ' <div class="affichageConseilAdministration">';
        $resultat = executeRequete("SELECT id_conseil_administration, nom, role FROM conseil_administration");
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Nom</th>';
        echo '<th>Rôle</th>';
        echo '<th>Modifier</th>';
        echo '<th>Supprimer</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        while ($conseilAdministrationAdmin = $resultat->fetch_assoc()) {
            echo '<tr>';
            echo '<td><p class="nomAdmin">' . $conseilAdministrationAdmin['nom'] . '</p></td>';
            echo '<td><p class="roleAdmin">' . $conseilAdministrationAdmin['role'] . '</p></td>';
            echo '<td class="modif"><a href="?action=modification&id_conseil_administration=' . $conseilAdministrationAdmin['id_conseil_administration'] . '"><img src="../inc/img/logo/edit.png"></a></td>';
            echo '<td class="modif"><a href="?action=suppression&id_conseil_administration=' . $conseilAdministrationAdmin['id_conseil_administration'] . '" OnClick="return(confirm(\'En êtes vous certain ?\'));"><img src="../inc/img/logo/delete.png"></a></td>';

            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    }

    if (isset($_GET['action']) && $_GET['action'] == "affichagePartenaire") {
        echo ' <div class="affichagePartenaire">';
        $resultat = executeRequete("SELECT id_partenaire, nom, diminutif, logo FROM partenaire");
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Nom</th>';
        echo '<th>Diminutifs</th>';
        // echo '<th>Logo</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        while ($partenaireAdmin = $resultat->fetch_assoc()) {
            echo '<tr>';
            echo '<td><p class="nomAdmin">' . $partenaireAdmin['nom'] . '</p></td>';
            echo '<td><p class="diminutifAdmin">' . $partenaireAdmin['diminutif'] . '</p></td>';
            // echo '<td><img class="photoAdmin" src=' .  $partenaireAdmin['logo'] . ' /></td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    }
    echo '</div>';
    ?>
</body>

</html>