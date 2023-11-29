  <style>
    /* Style pour le conteneur principal */
      .button-container {
      position: relative;
      width: 15.625rem; /* 250px/16 */
      height: 3.75rem; /* 60px/16 */
      margin: 0 auto;
      box-shadow: 0.3125rem 0.3125rem 0.625rem rgba(0, 0, 0, 0.5); 
      border-radius: 0.625rem; 
      overflow: hidden; 
    }

     /* Style pour le rectangle supérieur */
     .rectangle-top {
      width: 100%;
      height: 1.875rem; 
      border-radius: 0.625rem 0.625rem 0 0; 
      position: relative;
    }

      /* Pseudo-élément pour ajouter une bande colorée sur le rectangle supérieur */
      .rectangle-top::before {
      content: '';
      position: absolute;
      top: 0;
      right: 1.0625rem; 
      width: 1.6875rem;
      height: 3.75rem;
      background: linear-gradient(#77BC48, #FFFFFF, #7D5C67);
      z-index: -1;
      border-radius: 0.3125rem;
    }

     /* Style pour le rectangle inférieur */
     .rectangle-bottom {
      width: 100%;
      height: 1.875rem; 
      background-color: #ececec;
      border-radius: 0 0 0.625rem 0.625rem; 
      position: relative;
      transform-origin: center top;
      transition: transform 0.6s, background 0.6s;
      top: 0;
    }

   
    /* Pseudo-élément pour ajouter une bande colorée sur le rectangle inférieur */
    .rectangle-bottom::after {
      content: '';
      position: absolute;
      top: 0;
      right: 1.0625rem;
      width: 1.6875rem; 
      height: 1.875rem; 
      background: linear-gradient(#FFFFFF, #77BC48);
      border-radius: 0px 0px 0.3125rem 0.3125rem;
      z-index: 1;
    }

    /* Positionner le texte au centre du conteneur */
    .center-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    /* Animation lorsque le conteneur est survolé */
    .button-container:hover .rectangle-bottom {
      transform: rotateX(180deg);
      background: #ececec;
    }

    /* Curseur en forme de main lorsque le conteneur est survolé */
    .button-container:hover {
      cursor: pointer;
    }

    /* Animation de la bande colorée lorsqu'elle est survolée */
    .button-container:hover .rectangle-bottom::after {
      background: linear-gradient(#FFFFFF, #7D5C67);
    }

     /* Style pour la deuxième bande colorée */
     .rectangle-second {
      position: absolute;
      top: 0;
      right: 1.0625rem;
      width: 1.6875rem;
      height: 1.875rem;
      background: linear-gradient(#FFFFFF, #7D5C67);
      border-radius: 0px 0px 0.3125rem 0.3125rem;
      z-index: 1;
    }

  </style>
</head>

<body>
  <!-- Conteneur principal -->
  <div class="button-container">
    <!-- Rectangle supérieur -->
    <div class="rectangle-top"></div>

    <!-- Rectangle inférieur (en miroir) avec une deuxième bande colorée -->
    <div class="rectangle-bottom">
      <div class="rectangle-second"></div>
    </div>

    <!-- Texte "Envoyer" au centre du conteneur -->
    <div class="center-text">Envoyer</div>
  </div>

  
  </body>

</html>
