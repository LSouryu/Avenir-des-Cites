<head>
  <link rel="stylesheet" href="public/css/accueil/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>

<body>
  <!-- Carrousel de photos -->
  <div id="carousel" class="owl-carousel">
    <div class="item"><img src="/public/photo/carrousel_1.png" alt="Photo 1"></div>
    <div class="item"><img src="/public/photo/carrousel_2.png" alt="Photo 2"></div>
    <div class="item"><img src="/public/photo/carrousel_3.png" alt="Photo 3"></div>
  </div>

  <div class="background-image"></div>

  <div class="grid-container">
    <img src="/photos/logo/logo_avenirdescites.svg" alt="Logo" class="logo">
    <div class="menu-burger" onclick="toggleMenu()">
      <img src="/photos/svg/menu_burger.svg" alt="menu burger" class="ouverture-menu">
      <img src="/photos/svg/fermeture_menu.svg" alt="fermeture menu" class="fermeture-menu">
    </div>
    <div class="new-div" id="newDiv">
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
    </div>

    <div class="grid-item-unique">
      <button class="fleche-bas-button" onclick="scrollToTop()">
        <img class="fleche-bas" src="../photos/fleche_bas.png" alt="fleche-bas">
      </button>
    </div>
    <div class="grid-item-last-row">
      <p>Avenir des Cités - Service de prévention spécialisée</p>
    </div>
  </div>

  <section class="section-content">
    <h2>Présentation</h2>
    <p>La prévention spécialisée et une action éducative et sociale qui consiste à aller vers le jeune dans son millieu de vie.
      L’objectif est d’assurer une continuité éducative auprès du jeune, qu’il soit dans sa famille, à l’école ou à la rue. Nous intervenons sur les communes d’Harnes, de Billy-Montigny et Salaumines..</p>
  </section>

  <section class="section-content">
    <h2>Nos actualités</h2>
    <p>Les dernières actualités de votre organisation peuvent être ajoutées ici...</p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </section>

  <section class="section-content objectif">
    <h2>Les objectifs</h2>
    <div class="article-container">
      <article>Prévenir les risques d’exclusion en favorisant l’accès aux droits, à l’éducation, à la santé, à la culture et aux sports.</article>
      <article>Prévenir les conduites à risques qui peuvent être liées à des fragilités individuelles, à la dureté de certains contextes sociaux et urbains, à des violences subies.</article>
      <article>Aider à un meilleur dialogue entre jeunes et adultes et contribuer à favoriser l’émergence de réseaux de solidarités locales à partir des potentialités du milieu.</article>
    </div>
    <div class="button-container">
    <!-- Rectangle supérieur -->
    <div class="rectangle-top"></div>

    <!-- Rectangle inférieur (en miroir) avec une deuxième bande colorée -->
    <div class="rectangle-bottom">
      <div class="rectangle-second"></div>
    </div>

    <!-- Texte "Envoyer" au centre du conteneur -->
    <div class="center-text">En savoir plus...</div>
  </div>
  </section>

  <section class="section-content equipe">
    <h2>Qui sommes-nous ?</h2>
    <div class="team-container">
      <p class="team-title">Notre équipe</p>
      <span class="team-line"></span>
    </div>
    <div class="team-presentation">
      <p>Lorem ipsum dolor sit amet consectetur. In tellus a purus gravida mi dignissim. Id elementum sociis augue dictum proin libero sit. Viverra sapien vestibulum elementum auctor eros elementum nascetur. Lorem quam eget placerat lorem blandit mi eu tincidunt in.</p>
    </div>

    <div class="button-container">
    <!-- Rectangle supérieur -->
    <div class="rectangle-top"></div>
    <!-- Rectangle inférieur (en miroir) avec une deuxième bande colorée -->
    <div class="rectangle-bottom">
      <div class="rectangle-second"></div>
    </div>
    <!-- Texte "Envoyer" au centre du conteneur -->
    <div class="center-text"></div>
  </div>

  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script>
    $(document).ready(function() {
      // Initialiser le carrousel
      $("#carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplaySpeed: 3000, // Changer la valeur à 5000 (5 secondes)
        autoplayHoverPause: true
      });
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const menuBurger = document.querySelector('.menu-burger');
      const newDiv = document.getElementById('newDiv');
      const menuLinks = document.querySelectorAll('.menu-link');
      const flecheBas = document.querySelector(".fleche-bas");
      menuBurger.addEventListener('click', toggleMenu);

      function toggleMenu() {
        menuBurger.classList.toggle('active');
        newDiv.classList.toggle('active');
        flecheBas.classList.toggle('active');

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
  <?php require 'inc/bas.inc.php'; ?>












 

