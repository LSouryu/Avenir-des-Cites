<style>
    :root {
        font-size: 1rem;
    }

    body {
        overflow-x: hidden;
    }

    section {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        margin-bottom: 4rem;
    }

    p {
        text-align: center;
        font-family: Roboto;
        font-size: 1.5rem;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    h2 {
        text-align: center;
        font-family: Philosopher;
        font-size: 3rem;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        margin-top: 2rem;
    }

    h3 {
        position: relative;
        top: 3.125rem;
        text-align: center;
        flex-direction: column;
        justify-content: center;
        height: 6.25rem;
        margin-top: 1.25rem;
        font-family: 'Philosopher', sans-serif;
        font-size: 2rem;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    article {
        /* width: 28.125rem;
        height: 18.063rem; */
        flex-direction: column;
        justify-content: center;
        text-align: center;
        font-family: Roboto;
        font-size: 1.25rem;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-top: 0.938rem;
        }

    ul {
        list-style-position: inside;
    }

    /* HISTOIRE */
    .notreHistoire {
        width: 100%;
        display: flex;
        flex-direction: row;
         justify-items: center;
         justify-content: space-around;
          }

    .rectangle1     {
        background: linear-gradient(180deg, rgba(193, 66, 93, 0.60) 0%, rgba(119, 188, 72, 0.80) 99.99%, rgba(119, 188, 72, 0.00) 100%);
        width: 1.563rem;
        height: 45rem;
        border-radius: 1.25rem;
    }

    .rectangle1 {
        display: block;
    }

    .rectangle0 {
        display: none;
    }

    .histoire {
       flex-grow: 1;
        text-align: justify;
        font-family: Roboto;
        font-size: 1.70rem;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        max-width: 75rem;
        padding-left: 2rem;
        padding-right: 2rem;


    }

    /* beneficiaires*/
    .case {
        text-align: center;
        font-family: Philosopher;
        font-size: 2rem;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        border-radius: 1.25rem;
        border: 0.063rem solid #000003;
        background: #FFF;
        box-shadow: 0.313rem 0.313rem 0.313rem 0rem rgba(0, 0, 3, 0.50);
        width: auto;
        height: 6.25rem;
        margin-left: 3rem;
        margin-right: 3rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .article-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
      width: 100%;
    }

    .article-beneficiaire1,
    .article-beneficiaire2,
    .article-beneficiaire3 {
        /* width: 33.33%;
        height: 13.625rem; */
           padding: 0 0.625rem;
        border-radius: 1.25rem;
        position: relative;
        padding: 0.625rem;
        border: 0.0625rem solid #ccc;
        transition: transform 0.5s ease, box-shadow 0.8s ease;
        text-align: center;
        font-family: Philosopher;
        font-size: 1.5rem;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        display: flex;
        justify-content: center;
        align-items: center;
        min-width: 200px;
        width: 25%;
        margin: 1rem;
    }

    .article-beneficiaire1:hover,
    .article-beneficiaire2:hover,
    .article-beneficiaire3:hover {
        transform: scale(1.08);
        box-shadow: 1.25rem 1.25rem 1.25rem 0px rgba(125, 92, 103, 0.80);
    }

    .article-beneficiaire1 {
        border: 0.0625rem solid #7D5C67;
        box-shadow: 0.625rem 0.625rem 0.625rem 0px rgba(125, 92, 103, 0.80);
    }

    .article-beneficiaire2 {
        border: 0.0625rem solid #77BC48;
        box-shadow: 0.625rem 0.625rem 0.625rem 0px rgba(119, 188, 72, 0.80);
    }

    .article-beneficiaire3 {
        border: 0.0625rem solid #C1425D;
        box-shadow: 0.625rem 0.625rem 0.625rem 0px rgba(193, 66, 93, 0.80);
    }

    .beneficiaires {
        display: flex;
        justify-content: space-between;
    }

    .principe h2 {
        order: 0;
    }

    .adhésion,
    .mandat,
    .anonymat {
        flex: 1;
        padding: 0.625rem;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        position: relative;
        margin-bottom: 1.875rem;
    }

    .adhésion h3 {
        color: #7D5C67;
    }

    .mandat h3 {
        color: #77BC48;
    }

    .anonymat h3 {
        color: #C35B79;
    }

    .adhésion::before,
    .mandat::before,
    .anonymat::before {
        content: "";
        /* width: 31.25rem;
        height: 7.5rem; */
        border-radius: 1.875rem;
        position: absolute;
        top: 17.8125rem;
        transform: translateY(-100%);
        z-index: -1;
        transition: height 0.9s ease;
    }

    .adhésion:hover::before,
    .mandat:hover::before,
    .anonymat:hover::before {
        height: 12.5rem;
        bottom: 0;
        transform-origin: top;
        transition: height 0.9s ease;
    }

    .adhésion::before {
        background-color: rgba(125, 92, 103, 0.50);
    }

    .mandat::before {
        background-color: rgba(119, 188, 72, 0.50);
    }

    .anonymat::before {
        background-color: rgba(195, 91, 121, 0.50);
    }

    /* OBJECTIF*/
    .objectif .article-container {
        display: flex;
        justify-content: space-between;
    }

    .objectif article {
        /* width: 28.125rem;
        height: 18.75rem; */
        border-radius: 1.25rem;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 5rem;
        border: 0.125rem solid #000;
        box-shadow: 0.313rem 0.313rem 0.313rem 0.313rem rgba(0, 0, 0, 0.50);
        text-align: center;
    }

    /*INTERVENTION*/
    .intervention {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }

    .intervention-content {
        display: flex;
        flex-direction: row;
        position: relative;
        width: 100%;
        align-items: center;
    }

    .intervention-image {
        width: 50%;
        /*height: 33.0625rem; */
        margin-left: 12.5rem;
        margin-top: 1.25rem;
        position: relative;
        z-index: 1;
        border-radius: 1.25rem;
        box-shadow: 0.3125rem 0.3125rem 0.3125rem 0px rgba(0, 0, 0, 0.50);
    }

    .modes {
        display: flex;
        /* width: 45.875rem;
        height: 28.125rem; */
        flex-direction: column;
        justify-content: center;
        text-align: center;
        font-family: Roboto, sans-serif;
        font-size: 1.5rem;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        border: 0.0625rem solid #000;
        background: #FFF;
        box-shadow: 0.3125rem 0.3125rem 0.3125rem 0px rgba(0, 0, 0, 0.50);
        padding: 0.625rem;
        border-radius: 1.25rem;
        position: relative;
        z-index: 2;
        margin-left: -1.5625rem;
        position: relative;
        background: linear-gradient(to left, #77BC48, #7D5C67, #C1425D);
        padding: 0.9375rem;
    }

    .modes::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: white;
        z-index: -1;
        transition: all 0.3s ease-in-out;
        border-radius: 1.25rem;
    }

    .intervention-content:hover .modes::before {
        top: 0.9375rem;
        right: 0.9375rem;
        bottom: 0.9375rem;
        left: 0.9375rem;
    }

    .image {
        display: block;
        background-position: center;
        /* max-width: 100%;
        height: auto; */
        z-index: 1;
        position: relative;
        margin: auto;
    }

    .image-container {
        position: relative;
        /* width: 26.25rem;
        height: 14.375rem; */
        margin: 0 auto;
        display: flex;
        justify-content: center;
    }

    .image-container1 {
        background-color: rgba(125, 92, 103, 0.50);
    }

    .image-container2 {
        background-color: rgba(119, 188, 72, 0.50);
    }

    .image-container3 {
        background-color: rgba(195, 91, 121, 0.50);
    }

    .responsive-img {
        width: 100%;
        height: 100%;
    }

    /*PRINCIPE*/
    .principe {
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        align-items: center;
    }

    .principe .article-container {
        justify-content: space-between;
    }

    /* .principe .article-container>div {
        flex-basis: calc((50% - 3.75rem) / 3);
        margin: 0 1.875rem;
    } */

    .rectangle2 {
        width: 1.5625rem;
        height: 53rem;
        border-radius: 1.25rem;
        background: linear-gradient(180deg, #77BC48 25.52%, rgba(119, 188, 72, 0.60) 52.60%, rgba(119, 188, 72, 0.00) 91.67%);
    }

    .left {
        align-items: center;
    }

    .left p {
        display: flex;
        width: 68.75rem;
        height: 7.5rem;
        flex-direction: column;
        justify-content: center;
        color: #000;
        text-align: center;
        font-family: Roboto;
        font-size: 1.625rem;
        font-style: italic;
        font-weight: 400;
        line-height: normal;
        margin-left: auto;
        margin-right: auto;
        text-align: end;
    }

    .right {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .right p {
        color: #000;
        text-align: center;
        font-family: Roboto;
        font-size: 2.25rem;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        display: flex;
        /* width: 21.5625rem;
        height: 39.4375rem; */
        flex-direction: column;
        justify-content: center;
        margin: auto;
    }

    .ligne {
        width: 68.75rem;
        height: 0.3125rem;
        background: #77BC48;
        display: block;
        margin: 0.625rem auto;
    }

    /*CAROUSEL*/
    .carousel-container-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        /* max-width: 106.25rem; */
    }

    .carousel-container {
        display: flex;
        overflow: hidden;
        height: 18.75rem;
    }

    .carousel-slide {
        display: flex;
        width: 100%;
        transition: all 1s ease;
    }

    .slide {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;

    }

    .slide-content {
        display: flex;
        justify-content: center;
        align-items: center;
        color: #000;
        font-family: Philosopher;
        font-size: 1.25rem;
        font-style: italic;
        font-weight: 400;
        line-height: normal;
        border: 2px solid #000;
        /* width: 25.8125rem;
        height: 13.625rem; */
        box-sizing: border-box;
        margin-right: 5rem;
        border-radius: 1.25rem;
        border: 0.0625rem solid #C1425D;
        background: #F6F6F6;
        box-shadow: 0.3125rem 0.3125rem 0.3125rem 0px rgba(193, 66, 93, 0.80);
        padding: 0 1.25rem;
    }

    .slide-content.liedevin {
        border: 0.0625rem solid #7D5C67;
        box-shadow: 0.3125rem 0.3125rem 0.3125rem 0px rgba(125, 92, 103, 0.80);
    }

    .slide-content.vert {
        border: 0.0625rem solid #77BC48;
        box-shadow: 0.3125rem 0.3125rem 0.3125rem 0px rgba(119, 188, 72, 0.80);
    }

    .slide-content.rose {
        border: 0.0625rem solid #C1425D;
        box-shadow: 0.3125rem 0.3125rem 0.3125rem 0px rgba(193, 66, 93, 0.80);
    }

    .button {
        font-size: 2em;
        padding: 0.5em;
        background: transparent;
        border: none;
        cursor: pointer;
    }


    /*REGLEMENTAIRE*/
    .reglementaire {
        display: grid;
        grid-template-columns: 30% auto 70%;
        gap: 1.25rem;
        margin-top: 2rem;
    }

    .gauche,
    .droit {
        text-align: center;
        font-family: Roboto;
        font-size: 1.5rem;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .rectangle3 {
        width: 1.5625rem;
        height: 28rem;

        border-radius: 1.25rem;
        background: linear-gradient(180deg, #7D5C67 14.06%, rgba(184, 165, 171, 0.93) 40.63%, #B8A5AB 63.02%, #7D5C67 91.67%);
    }
</style>

<body>
    <?php require_once("inc/haut.inc.php") ?>

    <section class="notreHistoire">
        <h2>Notre histoire</h2>
        <span class="rectangle1"></span>
        <p class="histoire">Après la Seconde Guerre mondiale, de nombreux enfants se retrouvent livrés à eux-mêmes et vivent dans la rue. Des bénévoles entreprennent alors des actions pour aider et protéger ces jeunes. Ainsi naît la prévention spécialisée, caractérisée par une intervention directe dans la rue.<br>
            <br>En 1957, la première commission nationale de prévention est créée pour structurer ces actions. En 1963, le comité national des clubs et équipes de prévention spécialisée est établi pour coordonner les initiatives à travers le pays. La prévention spécialisée est officiellement reconnue en 1972 grâce à un arrêté et des circulaires d'application, ce qui entraîne une multiplication des équipes et clubs soutenus par les pouvoirs publics.<br>
            <br>L'association "L'Avenir des Cités" naît dans les années 70 grâce à des bénévoles d'A.T.D Quart Monde. Elle se consacre à retisser les liens avec les institutions et à revaloriser l'image des quartiers défavorisés. Elle développe ses propres outils d'insertion professionnelle et de logement, ainsi que des partenariats pour des activités du bâtiment.<br>
            <br>Dans les années 80, le club de prévention élargit son champ d'action à la résidence Saint-Pol, un quartier d'habitat social marqué par la précarité due au chômage. En 1996, l'association se déplace à Harnes, répondant à la demande des autorités locales.<br>
            <br>Depuis lors, le club de prévention intervient dans trois quartiers de <strong>Harnes</strong>, classés en zone urbaine sensible, ainsi que dans deux autres quartiers à <strong>Billy Montigny</strong> et <strong>Sallaumines</strong>.
        </p>
        <span class="rectangle0"></span>
    </section>

    <section class="beneficiaires section-beneficiaires">
        <h2>Bénéficiaires</h2>
        <p class="case">La prévention spécialisée vise principalement les jeunes de 11 à 16 ans. Elle s’adresse prioritairement :</p>
        <div class="article-container">
            <article class="article-beneficiaire1">Aux jeunes et familles en difficulté ou en rupture avec leur environnement, qui sont engagés, ou risque de l’être, dans des processus de marginalisation ou d’exclusion.</article>
            <article class="article-beneficiaire2">Aux jeunes en difficulté pour accomplir les actes de la vie quotidienne qui ne peuvent pas être pris en charge.</article>
            <article class="article-beneficiaire3">Aux jeunes repérés en souffrance ou en difficulté, par les différents partenaires et les dispositif existants.</article>
        </div>
    </section>

    <section class="principe">
        <h2>Les principes d’intervention</h2>
        <div class="article-container">
            <div class="adhésion">
                <div class="image-container">
                    <img src="/photos/Photo 1.png" alt="Description de l'image 1">
                </div>
                <h3 class="titre1">La libre-adhésion</h3>
                <article>Ce principe exprime la démarche d’aller vers les jeunes marginalisés dans leur milieu de façon volontaire mais respectueuse du temps nécessaire à l’établissement d’une relation.<br><br>
                    Les jeunes gardent ensuite l’initiative du maintien de cette relation, basée sur la confiance. <br><br>Ainsi, le principe de libre adhésion amène l’éducateur spécialisé et le jeune à déterminer ensemble leurs objectifs et les moyens à mettre en oeuvre pour les atteindres.
                </article>
            </div>
            <div class="mandat">
                <div class="image-container">
                    <img src="/photos/Photo 2.png" alt="Description de l'image 2">
                </div>
                <h3 class="titre2">L’absence de mandat nominatif</h3>
                <article>La prévention spécialisée, par son absence de mandat nominatif, se distingue des autres modes de prévention telle que l’AEMO.<br><br> Le jeune demeure toujours libre d’entrer ou pas dans la relation avec l’éducateur.<br><br>
                    Il s’agit d’aller vers les jeunes en difficultés pour les accompagner afin de les aider à favoriser leur insertion dans différentes structures en vue d’une insertion durable dans la société.
                </article>
            </div>
            <div class="anonymat">
                <div class="image-container">
                    <img src="/photos/Photo 3.png" alt="Description de l'image 3">
                </div>
                <h3 class="titre3">Le respect de l’anonymat</h3>
                <article>L’anonymat doit être totalement respecté dans les premiers temps de la rencontre, tant que le jeune ne désire pas le lever. <br><br>Mais toute démarche d’insertion et de reconnaissance sociale nécessaite un travail de réseau, donc de l’évolution du respect de l’anonymat vers une pratique éthique de la confidentialité.
                </article>
            </div>
        </div>
    </section>

    <!-- <section class="objectif">
        <h2>Les objectifs</h2>
        <div class="article-container">
            <article>Prévenir les risques d’exclusion en favorisant l’accès aux droits, à l’éducation, à la santé, à la culture et aux sports.</article>
            <article>Prévenir les conduites à risques qui peuvent être liées à des fragilités individuelles, à la dureté de certains contextes sociaux et urbains, à des violences subies.</article>
            <article>Aider à un meilleur dialogue entre jeunes et adultes et contribuer à favoriser l’émergence de réseaux de solidarités locales à partir des potentialités du milieu.</article>
    </section> -->

    <!-- <section class="intervention">
        <h2>Les modes d’intervention</h2>
        <div class="intervention-content">
            <img src="/photos/intervention.jpg" class="intervention-image" alt="Description de l'image d'intervention">
            <article class="modes">Les pratiques des équipes éducatives sont plurielles et s’appuient sur des supports diversifiés, notamment :
                <ul>
                    <li>Le travail de rue</li>
                    <li>Les actions collectives</li>
                    <li>Les actions communautaires</li>
                    <li>L’accompagnement éducatif individuel</li>
                </ul>
                L’objectif est d’assuré une continuité éducative autour du jeune, qu’il soit dans sa famille, à l’école ou dans la rue. Les projets des services de prévention spécialisée d’élaborent sur la base des diagnostics territoriaux des MDS (Maison du Département Solidaire) et leurs besoins identifiés.
            </article>
        </div>
    </section> -->

    <!-- <section class="methodologie">
        <h2>Principes méthodologiques d’action spécifiques</h2>
        <div class="grid-container">
            <div class="left">
                <p>La non-institutionnalisation s’entend comme le principe de ne assurer sur le long terme la prise en charge d’actions mise en oeuvre pour faciliter la rencontre avec des jeunes à la marge. Le principe de non-institutionnalisation est un gage d’adaptation permanente, d’innovation sociale, d’expérimentation.</p>
                <span class="ligne"></span>
                <p>L’aide au développement du pouvoir de penser et d’agir des jeunes, de leurs communautés de vie, individuellement ou collectivement est activement recherchée.</p>
                <span class="ligne"></span>
                <p>Le travail de réseau, la collaboration inter-institutionnelle, la recherche des complémentarités sont indispensables pour dépasser les clivages institutionnels, pour participer à la création du lien social, pour contribuer à la résolution de situations individuelles, pour monter des actions collectives et pour faciliter les passages de relais.</p>
                <span class="ligne"></span>
                <p>La collaboration aux différentes politiques publiques territorialisées est recherchée dans le respect des principes de la protection de l’enfance.</p>
                <span class="ligne"></span>
                <p>La démarche évaluative est indispensable tant sur la qualité interne des processus que sur l’impact social des actions.</p>
            </div>
            <div class="rectangle2"></div>
            <div class="right">
                <p>La prévention spécialisée répond également à d’autres principes méthodologiques d’action :</p>
            </div>
        </div>
    </section> -->

    <!-- <section class="temoignage">
        <h2>Témoignages</h2>
        <div class="carousel-container-wrapper">
            <button id="prevButton" class="button">&lt;</button>
            <div class="carousel-container">
                <div id="carousel" class="carousel-slide">
                    <div class="slide">
                        <div class="slide-content liedevin">“Mes enfants et moi-même, vous remercions de tout ce que vous faites pour nous ainsi que pour les autres. Cela est très utile pour les quartiers.
                            Merci à toute l’équipe du club, j’espère que le club va durer, car très utile, merci à vous”</div>
                    </div>
                    <div class="slide">
                        <div class="slide-content vert">“Je suis content d’avoir intégré le club de Prév.
                            Je trouve les éducateurs vraiment sympas, à l’écoute.
                            C’est comme une famille, merci beaucoup”</div>
                    </div>
                    <div class="slide">
                        <div class="slide-content rose">“Un club au top pour les jeunes et leurs familles, avec des éducateurs toujours à l’écoute, qui font leur maximum pour rendre la vie du quotidien plus agréable.
                            Toujours présent même pendant le confinement, franchement bravo à vous tous”</div>
                    </div>
                    <div class="slide">
                        <div class="slide-content liedevin">“Mes enfants et moi-même, vous remercions de tout ce que vous faites pour nous ainsi que pour les autres. Cela est très utile pour les quartiers.
                            Merci à toute l’équipe du club, j’espère que le club va durer, car très utile, merci à vous”</div>
                    </div>
                    <div class="slide">
                        <div class="slide-content vert">“Je suis content d’avoir intégré le club de Prév.
                            Je trouve les éducateurs vraiment sympas, à l’écoute.
                            C’est comme une famille, merci beaucoup”</div>
                    </div>
                    <div class="slide">
                        <div class="slide-content rose">“Un club au top pour les jeunes et leurs familles, avec des éducateurs toujours à l’écoute, qui font leur maximum pour rendre la vie du quotidien plus agréable.
                            Toujours présent même pendant le confinement, franchement bravo à vous tous”</div>
                    </div>
                </div>
            </div>
            <button id="nextButton" class="button">&gt;</button>
        </div>

        </div>
    </section> -->

    <!-- <section class="reglementaire">
        <div class="gauche">
            <h3>Cadre réglementaire</h3>
            <p> Code de l’action sociale et des familles :<br><br>
                Article L. 121-2<br>
                Article L. 221-1<br>
                Article L. 312-1<br>
                Articles R. 221-1 à R. 221-3</p>
        </div>
        <span class="rectangle3"></span>
        <div class="droit">
            <h3>Autres textes législatifs</h3>
            <p>Arrêté 76-26 bis du 4 juillet 1972 relative aux clubs et équipes de prévention.<br><br>
                Convention quadripartite de Septembre 2005 du Conseil Départemental,<br>
                association gestionnaire du club de prévention spécialisé, CAF, communes.<br><br>
                Rénovation du cadre d’intervention de la prévention spécialisée (mars 2012)</p>
        </div>
    </section> -->
    <script>
        const carousel = document.getElementById('carousel');
        const prevButton = document.getElementById('prevButton');
        const nextButton = document.getElementById('nextButton');
        const slides = document.querySelectorAll('.carousel-slide .slide');
        const totalSlides = slides.length;

        let slidePosition = 0;

        carousel.style.transform = 'translateX(' + (-slidePosition * slides[0].clientWidth) + 'px)';

        prevButton.addEventListener("click", () => moveToSlide(-1));
        nextButton.addEventListener("click", () => moveToSlide(1));

        function updateSlidePosition() {
            carousel.style.transform = 'translateX(' + (-slidePosition * slides[0].clientWidth) + 'px)';
        }

        function moveToSlide(direction) {
            slidePosition = ((slidePosition + direction) + totalSlides) % totalSlides;
            updateSlidePosition();
        }
    </script>
    <!-- <?php require_once("inc/bas.inc.php") ?> -->
</body>

</html>