// PAGE EQUIPE

// Change la couleur de la div2 (.square) en etant sur la div1(monBouton)
function changeCouleur(event) {
    let couleur2 = document.querySelector(".square");

    // Vérifie si l'élément parent est la classe "monBouton"
    if (event.target.classList.contains("monBouton")) {
        couleur2.style.background = "linear-gradient(black,rgba(0, 0, 0, 0.721), rgba(0, 0, 0, 0.299),rgba(0, 0, 0, 0.721), black)";
    } else {
        couleur2.style.background = "linear-gradient(#77BC48, rgba(119, 188, 72, 0.70) 28.13%, rgba(119, 188, 72, 0.50) 54.16%,rgba(119, 188, 72, 0.70) 73.96%, rgba(119, 188, 72, 1.00) 100%)";

    }
}

// Variable pour stocker l'état de fixation
let isFixed = false;
let previousScrollX = 0;

// Fonction pour gérer le défilement
function fixerElements() {
    let scrollPosition = window.scrollX;

    if (scrollPosition !== previousScrollX) {
        // Défilement horizontal détecté
        isFixed = true;
    } else {
        // Pas de défilement horizontal détecté, réinitialiser la fixation
        isFixed = false;
    }

    // Mise à jour de la position de défilement précédente
    previousScrollX = scrollPosition;

    // Fixer les éléments si un défilement horizontal est détecté
    let entete = document.querySelector('.entete');
    let BouttonFleche = document.querySelector('.BouttonFleche');
    let spacer = document.querySelector('.spacer'); // Sélectionnez l'espaceur
    if (isFixed) {
        entete.style.position = 'fixed';
        entete.style.left = '0';
        BouttonFleche.style.position = 'fixed';
        BouttonFleche.style.left = '0';
        spacer.style.display = 'block'; // Affichez l'espaceur
        spacer.style.height = '250px';
    } else {
        entete.style.position = 'relative';
        entete.style.left = '0';
        BouttonFleche.style.position = 'relative';
        BouttonFleche.style.left = '0';
        spacer.style.display = 'none'; // Masquez l'espaceur
    }
}

// Ajouter un écouteur d'événement de défilement
window.addEventListener('scroll', fixerElements);

// Activer le défilement horizontal avec la molette de la souris
window.addEventListener('wheel', function (event) {
    window.scrollBy({
        top: 0,
        left: event.deltaY * 2, // Ajuster la vitesse du défilement horizontal en modifiant le facteur (ici, 2)
        behavior: 'smooth'
    });
    event.preventDefault();
});

// PAGE PARTENAIRE

$(document).ready(function() {
    $('#carrouselContainer1').owlCarousel({
        items: 4, // Nombre d'image qui seront afficher silmultanément
        loop: true, // Carrousel en continu
        autoplay: true, // Active la lecture automatique du carrousel 
        autoplayTimeout: 1000, // Le temps en millisecondes entre le changement automatique des images
        autoplaySpeed: 1000, // La vitesse de transition entre les images
    });

    $('#carrouselContainer2').owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        autoplayTimeout: 1000,
        loop: true,
        autoplaySpeed: 1000,
        rtl: true,
    });

    $('#carrouselContainer3').owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplaySpeed: 1000,
    });
});

// NAV

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


  const lienDeplace = document.getElementById("deplace");
  let deplacementX = 0;

  lienDeplace.addEventListener("click", () => {
    deplacementX += 2; // Changer le déplacement horizontal (10 pixels à chaque clic)
    lienDeplace.style.left = deplacementX + "px";
  });