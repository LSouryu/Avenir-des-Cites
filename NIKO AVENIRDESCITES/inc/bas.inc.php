       <style>
        html, body {
    margin: 0;
    padding: 0;
}

        .footer-container {
    background-image: url("../../../photos/svg/footer-image.svg");
    background-size: 100%;
    background-repeat: no-repeat;
    }
/* 
           .grid-container {
               display: grid;
               grid-gap: 10px;
           }

           .grid-container-1 {
               grid-template-columns: 10% 10% 55% 25%;
           }

           .grid-container-2 {
               grid-template-columns: 1fr 1fr 1fr;
           } */

           .grid-item {
               display: flex;
               justify-content: center;
               align-items: center;
               flex-direction: column;
           }

           .fleche-haut {
               animation: zoomInOut 1s infinite;
           }

           @keyframes zoomInOut {
               0% {
                   transform: scale(1);
               }

               50% {
                   transform: scale(0.8);
               }

               100% {
                   transform: scale(1);
               }
           }

           .fleche-haut-button {
               border: none;
               background: none;
               cursor: pointer;
           }

           .fleche-haut-button:focus {
               outline: none;
           }

           .tiershaut {
               display: flex;
               flex-direction: column;
               justify-content: center;
               align-items: center;
               color: white;
               font-weight: bold;
               margin-bottom: 10px;
               margin-top: 20px;
           }

           .menu-column {
               display: flex;
               flex-direction: column;
               height: 100%;
           }

           .menu-column a {
               color: black;
               text-decoration: none;
               text-align: center;
               margin-bottom: 10px;
           }

           .logofooter {
               justify-content: center;
               align-items: center;
               margin-bottom: 10px;
               background-color: white;
               border-radius: 20px;
               padding: 5px;
           }

           .logofooter img {
               width: 150px;
               height: 80px;
               max-width: 100%;
               max-height: 100%;
           }

           .tiershaut a:hover {
               color: var(--hover-color);
           }

           .tiershaut-centre {
               color: var(--text-color);
               text-align: center;
           }

           .tiershaut-droit {
               color: var(--text-color);
               margin-bottom: 10px;
               text-decoration: underline;
           }

           .reseauxsociaux {
               display: flex;
               width: 200px;
               justify-content: center;
               align-items: center;
           }

           .reseauxsociaux img {
               display: inline-block;
               width: var(--social-icon-size);
               height: var(--social-icon-size);
               max-width: 100%;
               max-height: 100%;
               background-repeat: no-repeat;
               background-position: center;
               filter: brightness(0) invert(1);
           }

           .reseauxsociaux a:not(:last-child) img {
               margin-right: 10px;
               /* Ou la valeur de marge que vous préférez */
           }

           .reseauxsociaux a:hover img {
               filter: none;
           }

           .tiersbas {
               height: 100%;
               flex-direction: column;
               color: white;
               display: flex;
               justify-content: end;
               margin-top: 18px;
           }

           .gauche {
               text-align: start;
               padding-left: 10px;
           }

           .centre {
               text-align: center;
           }

           .droit {
               text-align: end;
               padding-right: 10px;
           }

           .tiersbas span {
               text-decoration: underline;
           }

           .mentions-legales {
               color: white;
           }

           .mentions-legales:hover {
               color: var(--hover-color-2);
           }

           .email {
               color: white;
               text-decoration: none;
           }

           .email:hover {
               color: var(--hover-color-2);
           }

           </style>
       <div class="footer-container">
           <div class="grid-container grid-container-1">
               <div class="grid-item">
                   <button class="fleche-haut-button" onclick="scrollToTop()">
                       <img class="fleche-haut" src="../photos/fleche_haut.png" alt="fleche-haut">
                   </button>
               </div>

               <div class="tiershaut">
                   <div class="menu-column">
                       <a href="/presentation.php">Présentation</a>
                       <a href="/equipe.php">Équipe</a>
                       <a href="/actualites.php">Actualités</a>
                       <a href="/partenaires.php">Nos partenaires</a>
                       <a href="/contact.php">Contact</a>
                       <a href="/documents.php">Documents à télécharger</a>
                   </div>
               </div>

               <div class="tiershaut">
                   <div class="logofooter">
                       <a href="index.php" onclick="scrollToTop(); return false;">
                           <img src="../photos/logo/logo_avenirdescites.svg" alt="logofooter">
                       </a>
                   </div>
                   <div class="tiershaut-centre">Siège Social<br>
                       19 bis, Rue des Fusillés / BP 40<br>
                       62440 HARNES<br>
                       03.61.93.11.38
                   </div>
               </div>

               <div class="grid-item">
                   <div class="tiershaut-droit">Suivez-nous:</div>
                   <div class="reseauxsociaux">
                       <a class="facebook" href="https://www.facebook.com/Avenirdescites/"><img src="../photos/logo/rs/facebook_color.svg"></a>
                       <a class="twitter" href="https://twitter.com/AvenirdesCites"><img src="../photos/logo/rs/twitter_color.svg"></a>
                       <a class="youtube" href="https://www.youtube.com/@sadekdeghimachefdeservice8467/videos"><img src="../photos/logo/rs/youtube_color.svg"></a>
                       <a class="linkedin" href="https://www.linkedin.com/company/avenir-des-cit%C3%A9s-service-de-pr%C3%A9vention-sp%C3%A9cialis%C3%A9e/?original_referer=https%3A%2F%2Fwww%2Egoogle%2Ecom%2F&originalSubdomain=fr"><img src="../photos/logo/rs/linkedin_color.svg"></a>
                   </div>
               </div>
           </div>

           <div class="grid-container grid-container-2">
               <div class="tiersbas">
                   <div class="gauche">
                       <span>Design par :</span><br>
                       <a class="email" href="mailto:adresse_email_nadege">Nadège CHOQUET</a>
                   </div>
               </div>
               <div class="tiersbas">
                   <div class="centre">Avenir des cités - &copy; <script>
                           document.write(new Date().getFullYear())
                       </script> - <a class="mentions-legales" href="mentions_legales.php">Mentions Légales</a>
                   </div>
               </div>
               <div class="tiersbas">
                   <div class="droit">
                       <span>Développement, déploiement et intégration :</span><br>
                       <a class="email" href="mailto:adresse_email_nadege">Christina DELEFOSSE</a> et <a class="email" href="mailto:adresse_email_nadege">Nicolas STEVENS</a>
                   </div>
               </div>
           </div>
       </div>
       <script>
        function scrollToTop() {
    window.scroll({
      top: 0,
      left: 0,
      behavior: 'smooth'
    });
}

       </script>
       </body>

       </html>