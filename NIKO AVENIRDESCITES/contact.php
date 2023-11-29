<!DOCTYPE html>
<html>

<head>
  <title>Formulaire de contact</title>
  <style>
    .custom-select {
      position: relative;
      width: 100%;
      height: 40px;
      border: 2px solid #77BC48;
      border-radius: 5px;
      background-color: #f2f2f2;
      overflow: hidden;
    }

    .custom-option {
      padding: 10px;
      cursor: pointer;
    }

    .custom-option:hover {
      background-color: #e0e0e0;
    }

    body {
      margin: 0;
      padding: 0;
    }

    input:focus,
    textarea:focus,
    select:focus {
      outline: none;
    }

    select {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      margin-right: 20px;
      padding-right: 35px;
      background-image: url('/photos/svg/Flêche\ menu\ déroulant\ bas.svg');
      background-repeat: no-repeat;
      background-position: 950px center;
      text-align-last: center;
      vertical-align: middle;
    }

    .container {
      max-width: 600px;
      width: 100%;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .form-title {
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
      text-align: left;
      padding: 10px;
      border-radius: 10px;
      display: flex;
      justify-content: center;
      /* Centrer le contenu horizontalement */
      align-items: center;
      /* Centrer le contenu verticalement */
    }


    .label-input-group {
      position: relative;
    }

    .label-input-group label {
      position: absolute;
      top: 50%;
      left: 30px;
      transform: translateY(-50%);
      color: #999999;
      pointer-events: none;
      color: rgba(0, 0, 0, 0.20);
      text-align: center;
      font-family: Roboto;
      font-size: 32px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
    }


    .label-input-group input,
    .label-input-group textarea,
    .label-input-group select {
      width: 1000px;
      height: 83.517px;
      flex-shrink: 0;
      border-radius: 50px;
      border: 3px solid #77BC48;
      box-sizing: border-box;
    }

    .label-input-group input:focus+label,
    .label-input-group textarea:focus+label {
      display: none;
    }

    .myButton {
      position: relative;
      display: inline-block;
    }

    .submit-button {
      position: relative;
      width: 200px;
      height: 50px;
      background-color: transparent;
      border: none;
      padding: 0;
      cursor: pointer;
    }

    .grid-item-gauche {
      padding: 10px;
      grid-column: 1;
      grid-template-columns: 200px 1fr;
    }

    .grid-item-droite {
      padding: 10px;
    }

    .contact-title-container {
      padding: 10px;
      background-image: url("photos/svg/Vague_verte.svg");
      /* Remplacez "chemin/vers/votre/image.jpg" par le chemin de votre image */
      background-repeat: no-repeat;
      background-position: center;
      display: flex;
      justify-content: center;
    }

    .contact-title {
      color: rgba(0, 0, 0, 0.50);
      text-align: center;
      font-family: Roboto;
      font-size: 32px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
    }

    .contact-section {
      color: rgba(0, 0, 0, 0.50);
      text-align: center;
      font-family: Roboto;
      font-size: 32px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
    }

    .adresse {
      color: #000;
      text-align: center;
      font-family: Roboto;
      font-size: 36px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
    }

    .reseauxsociaux {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-template-rows: repeat(2, 1fr);
      gap: 10px;
      width: 200px;
    }

    .button-container {
      margin-top: 20px;
      padding: 10px;
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .button-image-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }

    .button-image {
      max-height: 100%;
      /* Pour éviter le dépassement de la hauteur de la div */
    }

    .button-text-center {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      font-family: Roboto;
      font-size: 24px;
      font-style: normal;
      font-weight: 800;
      line-height: normal;
      pointer-events: none;
      z-index: 1;
    }

    .submit-button:hover .button-image {
      content: url("/photos/logo/bouton-liedevin.svg");
    }

    .contact-section {
      display: flex;
      width: 1728px;
      height: 56px;
      flex-direction: column;
      justify-content: center;
      flex-shrink: 0;
      color: rgba(0, 0, 0, 0.50);
      text-align: center;
      font-family: Roboto;
      font-size: 32px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
    }

    .contact-section .grid-item-gauche {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .contact-section .tiershaut-droit {
      color: var(--text-color);
      margin-bottom: 10px;
      text-decoration: underline;
    }

    .contact-section .reseauxsociaux {
      display: flex;
      justify-content: space-between;
      width: 200px;
    }

    .contact-section .reseauxsociaux img {
      display: inline-block;
      width: var(--social-icon-size);
      height: var(--social-icon-size);
      max-width: 100%;
      max-height: 100%;
      background-repeat: no-repeat;
      background-position: center;
    }

    .grid-container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-gap: 20px;
      max-width: 1200px;
      margin: 0 auto;
      background-repeat: no-repeat;
      background-position: center;
    }


    .grid-item-droite {
      padding: 10px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .grid-item-gauche {
      grid-column: 1 / 2;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      justify-self: start;
    }

    .contact-title {
      color: rgba(0, 0, 0, 0.50);
      text-align: center;
      font-family: Roboto;
      font-size: 32px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
    }

    .contact-section {
      color: rgba(0, 0, 0, 0.50);
      text-align: center;
      font-family: Roboto;
      font-size: 32px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
    }

    .adresse {
      color: #000;
      text-align: center;
      font-family: Roboto;
      font-size: 36px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
      max-width: 100%;
      /* Pour assurer que la div adresse ne dépasse pas la largeur de son parent */
    }

    .reseauxsociaux {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-template-rows: repeat(2, 1fr);
      gap: 10px;
      width: 200px;
      justify-items: center;
      align-items: center;
    }

    .reseauxsociaux img {
      width: 50px;
      height: 50px;
      max-width: 100%;
      max-height: 100%;
      background-repeat: no-repeat;
      background-position: center;
      filter: brightness(0%);
    }

    .reseauxsociaux img:hover {
      filter: brightness(100%);
    }

    h2 {
      color: rgba(0, 0, 0, 0.50);
      text-align: center;
      font-family: Roboto;
      font-size: 32px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
    }

    .textarea-label-on-top label {
      position: absolute;
      top: 10px;
      left: 30px;
      transform: translateY(0%);
      color: #999999;
      pointer-events: none;
      color: rgba(0, 0, 0, 0.20);
      text-align: center;
      font-family: Roboto;
      font-size: 32px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
    }

    .label-input-group textarea {
      width: 1000px;
      height: 208.793px;
      flex-shrink: 0;
      border-radius: 50px;
      border: 3px solid #77BC48;
      box-sizing: border-box;
      resize: none;
    }

    .ma-div {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-radius: 50px;
      border: 3px solid #77BC48;
      background: #FFF;
      width: 1000px;
      height: 83.517px;
      box-sizing: content-box;
      cursor: pointer;
      position: relative;
    }

    .choix {
      color: rgba(0, 0, 0, 0.20);
      font-family: Roboto;
      font-size: 32px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
      margin-left: 10px;
    }

    .ma-div img {
      margin-right: 30px;
    }

    .main-container1,
    .main-container2 {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
        }

    .cities-container {
      display: none;
      flex-direction: column;
      align-items: flex-end;
      position: absolute;
      margin-top: 86px;
      z-index: 1;
    }

    .ville-harnes,
    .ville-billy-montigny,
    .ville-sallaumines {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 500px;
      height: 64px;
      flex-shrink: 0;
      border-radius: 30px;
      border: 1px solid #77BC48;
      color: #000003;
      text-align: center;
      /* Centrer horizontalement le texte */
      font-family: Roboto;
      font-size: 32px;
      font-style: normal;
      font-weight: 300;
      line-height: normal;
    }

    .ville-harnes {
      background: #9dcd7c;
    }

    .ville-billy-montigny {
      background: #d0e5c2;
    }

    .ville-sallaumines {
      background: #e9f0e5;
    }

    .ma-div2:hover {
      background-color: #77BC48;
      color: #FFF;
      cursor: pointer;
    }
    .sujets-container {
      display: none;
      flex-direction: column;
      align-items: flex-end;
      position: absolute;
      margin-top: 86px;
      z-index: 1;
    }

    .sujet-administratif,
    .sujet-educateur,
    .sujet-renseignement,
    .sujet-autre {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 500px;
      height: 64px;
      flex-shrink: 0;
      border-radius: 30px;
      border: 1px solid #77BC48;
      color: #000003;
      text-align: center;
      font-family: Roboto;
      font-size: 32px;
      font-style: normal;
      font-weight: 300;
      line-height: normal;
    }

    .sujet-administratif {
      background: #9DCD7C;
    }

    .sujet-educateur {
      background: #b7d99f;
    }

    .sujet-renseignement {
      background: #e9f0e5;
    }
    .sujet-autre {
      background: #f6f6f6;
    }
  </style>
</head>

<body>
  <div class="container">
    <h3 class="form-title">Besoin d’un conseil, demande d’informations. C’est ici.</h3>
    <form action="traitement_formulaire.php" method="POST">
      <div class="form-group">
        <div class="label-input-group">
          <input type="text" id="nom" name="nom" required>
          <label for="nom">Nom</label>
        </div>
      </div>

      <div class="form-group">
        <div class="label-input-group">
          <input type="text" id="prenom" name="prenom" required>
          <label for="prenom">Prénom</label>
        </div>
      </div>

      <div class="form-group">
        <div class="label-input-group">
          <input type="tel" id="telephone" name="telephone" required>
          <label for="telephone">Téléphone</label>
        </div>
      </div>

      <div class="form-group">
        <div class="label-input-group">
          <input type="email" id="email" name="email" required>
          <label for="email">Email</label>
        </div>
      </div>

      <div class="form-group">
        <div class="label-input-group" onclick="toggleVilles()">
          <div class="main-container1">
            <div class="ma-div">
              <div class="choix" id="villeSelectionnee">Ville concernée</div>
              <img src="photos/svg/Flêche menu déroulant bas.svg" alt="Small Image">
            </div>
            <div class="cities-container">
              <div class="ma-div2 ville-harnes city">
                <div class="ville">Harnes</div>
              </div>
              <div class="ma-div2 ville-billy-montigny city">
                <div class="ville">Billy Montigny</div>
              </div>
              <div class="ma-div2 ville-sallaumines city">
                <div class="ville">Sallaumines</div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="form-group">
    <div class="label-input-group" onclick="toggleSujets()">
      <div class="main-container2">
        <div class="ma-div">
          <div class="choix" id="sujetSelectionne">Choisir un sujet</div>
          <img src="photos/svg/Flêche menu déroulant bas.svg" alt="Small Image">
        </div>
        <div class="sujets-container">
          <div class="ma-div2 sujet-administratif sujet">
            <div class="sujet">Administratif</div>
          </div>
          <div class="ma-div2 sujet-educateur sujet">
            <div class="sujet">Éducateur</div>
          </div>
          <div class="ma-div2 sujet-renseignement sujet">
            <div class="sujet">Renseignement</div>
          </div>
          <div class="ma-div2 sujet-autre sujet">
            <div class="sujet">Autre</div>
          </div>
        </div>
      </div>
    </div>
  </div>
      <div class="form-group">
        <div class="label-input-group textarea-label-on-top">
          <textarea id="message" name="message" rows="5" required></textarea>
          <label for="message">Message</label>
        </div>
      </div>

      <div class="button-container">
        <button type="submit" class="submit-button">
          <div class="button-image-container">
            <img src="/photos/logo/bouton-vert.svg" alt="Envoyer" class="button-image">
          </div>

          <span class="button-text button-text-center">Envoyer</span>

        </button>
      </div>
  </div>
  </div>
  </form>
  </div>
  <div class="">
    <h2>Pour nous contacter:</h2>
  </div>

  <div class="grid-container">
    <div class="grid-item-gauche">
      <h2>Nos réseaux sociaux:</h2>
      <div class="reseauxsociaux">
        <a class="facebook" href="https://www.facebook.com/Avenirdescites/"><img src="/photos/logo/facebook_color.svg"></a>
        <a class="twitter" href="https://twitter.com/AvenirdesCites"><img src="/photos/logo/twitter_color.svg"></a>
        <a class="youtube" href="https://www.youtube.com/@sadekdeghimachefdeservice8467/videos"><img src="/photos/logo/youtube_color.svg"></a>
        <a class="linkedin" href="https://www.linkedin.com/company/avenir-des-cit%C3%A9s-service-de-pr%C3%A9vention-sp%C3%A9cialis%C3%A9e/?original_referer=https%3A%2F%2Fwww%2Egoogle%2Ecom%2F&originalSubdomain=fr"><img src="/photos/logo/linkedin_color.svg"></a>
      </div>
    </div>
    <div class="grid-item-droite">
      <h2>Nos locaux:</h2>
      <div class="adresse">
        Avenir des cités<br>
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="44" viewBox="0 0 35 44" fill="none">
          <path d="M33.1111 17.5556C33.1111 26.3911 17.5556 42 17.5556 42C17.5556 42 2 26.3911 2 17.5556C2 8.72 8.96444 2 17.5556 2C26.1467 2 33.1111 8.72 33.1111 17.5556Z" fill="#F6F6F6" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M17.5555 24.222C21.2374 24.222 24.2222 21.2372 24.2222 17.5553C24.2222 13.8734 21.2374 10.8887 17.5555 10.8887C13.8736 10.8887 10.8889 13.8734 10.8889 17.5553C10.8889 21.2372 13.8736 24.222 17.5555 24.222Z" fill="#F6F6F6" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
        </svg> 19 bis, rue des Fusillés - BP 40<br>
        62440 HARNES<br><br>
        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="36" viewBox="0 0 42 36" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M4.94921 1.26757C5.4085 0.885656 5.96001 0.589387 6.5672 0.3984C7.17438 0.207413 7.82337 0.12607 8.47116 0.159761C9.11895 0.193452 9.75074 0.341408 10.3247 0.593824C10.8986 0.84624 11.4016 1.19735 11.8002 1.62389L16.512 6.6648C17.3756 7.58948 17.6801 8.79397 17.3388 9.93068L15.903 14.718C15.8288 14.966 15.8328 15.2257 15.9146 15.472C15.9965 15.7183 16.1534 15.9427 16.3702 16.1236L22.8196 21.4946C23.0371 21.6755 23.3071 21.8064 23.6033 21.8746C23.8996 21.9428 24.212 21.9459 24.5101 21.8837L30.256 20.688C30.9296 20.5477 31.6327 20.5368 32.3121 20.6561C32.9915 20.7754 33.6294 21.0218 34.1777 21.3766L40.2307 25.2982C42.4068 26.7082 42.6063 29.3861 40.6586 31.0059L37.9444 33.2662C36.002 34.8839 33.0988 35.5943 30.3925 34.8008C23.4659 32.7711 17.1768 29.4688 11.9919 25.1387C6.79266 20.8214 2.82724 15.5847 0.389724 9.81701C-0.560496 7.56543 0.292602 5.14553 2.23504 3.5279L4.94921 1.26757Z" fill="black" />
        </svg> 03 61 93 11 38
      </div>
    </div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const villeSelectionnee = document.getElementById('villeSelectionnee');
      const citiesContainer = document.querySelector('.cities-container');
      const cities = document.querySelectorAll('.city');

      const mettreAJourVilleSelectionnee = ville => {
        villeSelectionnee.textContent = ville;
        hideCities();
      };

      const hideCities = () => {
        citiesContainer.style.display = 'none';
      };

      const toggleVilles = () => {
        citiesContainer.style.display = citiesContainer.style.display === 'none' ? 'flex' : 'none';
        if (citiesContainer.style.display === 'flex') {
          showCitiesWithDelay();
        }
      };

      const showCitiesWithDelay = () => {
        setTimeout(() => {
          citiesContainer.style.display = 'flex';
        }, 50);
      };

      document.querySelector('.main-container1').addEventListener('click', event => {
        event.stopPropagation();
        toggleVilles();
      });

      cities.forEach(city => {
        city.addEventListener('click', event => {
          event.stopPropagation();
          mettreAJourVilleSelectionnee(city.textContent.trim());
        });
      });
    });
    
 document.addEventListener('DOMContentLoaded', () => {
  const sujetSelectionne = document.getElementById('sujetSelectionne');
  const sujetsContainer = document.querySelector('.sujets-container');
  const sujets = document.querySelectorAll('.sujet');

  const mettreAJoursujetSelectionne = sujet => {
    sujetSelectionne.textContent = sujet;
    hideSujets();
  };

      const hideSujets = () => {
        sujetsContainer.style.display = 'none';
      };

      const toggleSujets = () => {
        sujetsContainer.style.display = sujetsContainer.style.display === 'none' ? 'flex' : 'none';
        if (sujetsContainer.style.display === 'flex') {
          showSujetsWithDelay();
        }
      };

      const showSujetsWithDelay = () => {
        setTimeout(() => {
          sujetsContainer.style.display = 'flex';
        }, 50);
      };

      document.querySelector('.main-container2').addEventListener('click', event => {
        event.stopPropagation();
        toggleSujets();
      });

      sujets.forEach(sujet => {
    sujet.addEventListener('click', event => {
      event.stopPropagation();
      mettreAJoursujetSelectionne(sujet.textContent.trim());
    });
  });
});
  </script>

</body>

</html>