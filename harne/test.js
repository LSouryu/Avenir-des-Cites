$(document).ready(function() {
    // Configurer le carrousel 1
    $('#carrouselContainer1').owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplaySpeed: 1000,
    });

    // Configurer le carrousel 2 en sens inverse
    $('#carrouselContainer2').owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplaySpeed: 1000,
        rtl: true,
    });

    // Configurer le carrousel 3
    $('#carrouselContainer3').owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplaySpeed: 3000,
    });
});