<?php
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
}
?>

<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="/inc/css/header/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
  <div class="grid-container">
    <div id="header">
      <div class="grid-item">
        <img src="/photos/logo/logo_avenirdescites.svg" alt="Logo" class="logo">
      </div>
      <div class="grid-item titre"><?php afficherTitrePage(); ?></div>
      <div class="grid-item">
        <div class="menu-burger" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
          <span class="close-icon"></span>
        </div>
      </div>
    </div>
    <p id="service">Service de prévention spécialisée</p>
  </div>

  <!-- <div class="new-div" id="newDiv">
    <div class="new-div-content">
      <div class="liens-menu">
        <a class="menu-link" href="presentation.php">Présentation<span class="span-highlight"></span></a>
        <a class="menu-link" href="equipe.php">Équipe<span class="span-highlight"></span></a>
        <a class="menu-link" href="actualites.php">Actualités<span class="span-highlight"></span></a>
        <a class="menu-link" href="partenaires.php">Nos partenaires<span class="span-highlight"></span></a>
        <a class="menu-link" href="contact.php">Contact<span class="span-highlight"></span></a>
        <a class="menu-link" href="documents.php">Documents à télécharger<span class="span-highlight"></span></a>
      </div>

      <div class="info">
        <div class="logo-container">
          <img src="/photos/logo/logo_avenirdescites.svg" alt="Logo" class="logo2">
        </div>
        <div class="adresse">
          19 bis, Rue des Fusillés<br>
          BP 40<br>
          62440 HARNES<br>
          03.61.93.11.38
        </div>

        <div class="social-media-container">
          <p><em>Suivez-nous :</em></p>
          <div class="social-media-icons">
            <a href="https://www.youtube.com/@sadekdeghimachefdeservice8467/videos">
              <img src="/photos/logo/rs/youtube_liedevin.svg" alt="YouTube" class="icon original-icon">
              <img src="/photos/logo/rs/youtube_color.svg" alt="YouTube" class="icon hover-icon">
            </a>

            <a href="https://www.facebook.com/Avenirdescites/">
              <img src="/photos/logo/rs/facebook_liedevin.svg" alt="Facebook" class="icon original-icon">
              <img src="/photos/logo/rs/facebook_color.svg" alt="Facebook" class="icon hover-icon">
            </a>
            <a href="https://twitter.com/AvenirdesCites">
              <img src="/photos/logo/rs/twitter_liedevin.svg" alt="Twitter" class="icon original-icon">
              <img src="/photos/logo/rs/twitter_color.svg" alt="Twitter" class="icon hover-icon">
            </a>
            <a href="https://www.linkedin.com/company/avenir-des-cit%C3%A9s-service-de-pr%C3%A9vention-sp%C3%A9cialis%C3%A9e/?original_referer=https%3A%2F%2Fwww%2Egoogle%2Ecom%2F&originalSubdomain=fr">
              <img src="/photos/logo/rs/linkedin_liedevin.svg" alt="LinkedIn" class="icon original-icon">
              <img src="/photos/logo/rs/linkedin_color.svg" alt="LinkedIn" class="icon hover-icon">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const menuBurger = document.querySelector('.menu-burger');
      const newDiv = document.getElementById('newDiv');
      const menuLinks = document.querySelectorAll('.menu-link');

      menuBurger.addEventListener('click', toggleMenu);

      function toggleMenu() {
        menuBurger.classList.toggle('active');
        newDiv.classList.toggle('active');

        if (newDiv.classList.contains('active')) {
          menuLinks.forEach((link, index) => {
            link.style.animationDelay = `${index * 0.35}s`;
          });
        } else {
          menuLinks.forEach((link) => {
            link.style.animationDelay = '';
          });
        }
      }

      menuLinks.forEach(function(link) {
        const spanHighlight = link.querySelector('.span-highlight');
        const originalWidth = spanHighlight.offsetWidth;

        link.addEventListener('mouseover', function() {
          const linkText = link.textContent.trim();
          const linkFont = window.getComputedStyle(link).getPropertyValue('font');
          const tempSpan = document.createElement('span');
          tempSpan.style.font = linkFont;
          tempSpan.style.visibility = 'hidden';
          tempSpan.textContent = linkText;
          document.body.appendChild(tempSpan);
          const linkTextWidth = tempSpan.offsetWidth;
          document.body.removeChild(tempSpan);
          spanHighlight.style.width = (linkTextWidth * 1.3) + 'px';
        });

        link.addEventListener('mouseout', function() {
          spanHighlight.style.width = originalWidth + 'px';
        });
      });
    });
  </script>
</body>

</html>