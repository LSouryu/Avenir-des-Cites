<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOS SUPPORTS DE COMMUNICATION</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            text-align: center;
            height: 100%;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-top: 0;
        }

        h2 {
            display: flex;
            height: 6.625rem;
            flex-direction: column;
            justify-content: center;
            flex-shrink: 0;
            color: #000;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            font-size: 2.5rem;
            font-style: italic;
            font-weight: 700;
            line-height: normal;
            margin: 1.875rem 0;
            border-bottom: none;
        }

        h3 {
            display: flex;
            width: 15rem;
            height: 3.125rem;
            flex-direction: column;
            justify-content: center;
            flex-shrink: 0;
            color: #F6F6F6;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            line-height: normal;
            margin: 0;
            position: relative;
            margin-left: 4.0625rem;
            margin-top: 0.625rem;
        }

        h3::after {
            content: '';
            display: block;
            position: absolute;
            top: 4.375rem;
            left: 50%;
            transform: translateX(-50%);
            background: #77BC48;
            width: 18.75rem;
            height: 0.3125rem;
        }

        h4 {
            display: flex;
            width: 16.625rem;
            height: 2.4375rem;
            flex-direction: column;
            justify-content: center;
            flex-shrink: 0;
            color: #F6F6F6;
            font-family: Roboto;
            font-size: 1.625rem;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }

        .centered-image {
            position: relative;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 3.125rem;
            max-width: 107.5rem;
            margin: 3.125rem auto;
            padding: 1.25rem;
            flex-direction: column;
            height: 100%;
        }

        .styled-div {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 2rem;
            width: 90.5625rem;
            height: 51.875rem;
            flex-shrink: 0;
            border-radius: 1.875rem;
            background: #7D5C67;
            padding: 1.25rem;
            color: #fff;
            margin-top: 1.875rem;
            align-items: start;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .styled-div .description {
            flex: 1;
            padding-right: 1.25rem;
        }

        .styled-div .expandable-cards-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .bottom-content {
            grid-column: 1 / 3;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }

        .button {
            padding: 0.625rem 1.25rem;
            background: #3498db;
            border: none;
            border-radius: 0.3125rem;
            color: white;
            cursor: pointer;
            display: block;
            margin: 10px 0;
        }

        .preview-documents {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            align-items: center;
            justify-content: center;
            height: 100%;
        }


        .preview {
            margin-left: 0;
            width: 31.875rem;
            height: 22.5rem;
            border-radius: 1.25rem;
            overflow: hidden;
            position: relative;
            border-radius: 20px;
            box-shadow: 5px 5px 5px 0px rgba(246, 246, 246, 0.60);
            flex: 1;
            margin-bottom: 1rem;
        }


        .preview img {
            max-width: 100%;
            height: auto;
            display: block;
            border-radius: 1.25rem;
        }

        .loupe {
            position: fixed;
            width: 9.375rem;
            height: 9.375rem;
            border: 0.25rem solid #c35b79;
            border-radius: 50%;
            background-repeat: no-repeat;
            pointer-events: none;
            display: none;
            transform: scale(1.2);
            transition: transform 0.2s ease-in-out;
            z-index: 1000;
        }

        .expandable-card {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
            position: relative;
            border: 0.0625rem solid #ccc;
            padding: 0.625rem;
            max-height: 2.5rem;
            width: 54.25rem;
            height: 4.625rem;
            flex-shrink: 0;
            border-radius: 1.25rem;
            background: rgba(246, 246, 246, 0.40);
            flex: 1;
        }

        .expandable-card h4 {
            margin: 0;
        }

        .expand-control {
            position: absolute;
            right: 0.625rem;
            top: 0.625rem;
            cursor: pointer;
            font-size: 1.875rem;
            width: 2.5rem;
            height: 2.5rem;
            line-height: 2.5rem;
            text-align: center;
        }

        .expand-content {
            padding-top: 0.625rem;
            overflow: auto;
        }

        .expandable-card .expand-control {
            position: absolute;
            top: 0.625rem;
            right: 0.625rem;
            cursor: pointer;
        }

        .expandable-card .expand-content,
        .expandable-card p,
        .expandable-card .button {
            display: none;
        }

        .expandable-card.expanded {
            max-height: 31.25rem;
            width: 54.25rem;
            height: 13.125rem;
            flex-shrink: 0;
            border-radius: 1.25rem;
            background: rgba(246, 246, 246, 0.40);
        }

        .expandable-card.expanded .expand-content,
        .expandable-card.expanded p,
        .expandable-card.expanded .button,
        .expandable-card.expanded .download {
            display: block;
        }

        .expandable-card .download {
            display: flex;
            width: 25rem;
            height: 3.0625rem;
            color: #F6F6F6;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            font-size: 1.625rem;
            font-style: italic;
            font-weight: 300;
            line-height: normal;
            border: none;
            border-radius: 0.3125rem;
            cursor: pointer;
        }

        .download {
            background-color: rgba(125, 92, 103, 0.4);
            color: white;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
            align-items: center;
            justify-content: center;
            height: 3.125rem;
            width: 9.375rem;
            text-align: center;
            line-height: normal;
            display: flex;
            padding-top: 0.625rem;
            padding-bottom: 0.625rem;
            border: 0.125rem solid white;
        }

        .download:hover {
            background-color: white;
            color: #7D5C67;
        }
    </style>
</head>

<body>
    <h1>NOS SUPPORTS DE COMMUNICATION</h1>
    <img class="centered-image" src="photos/svg/Rectangles_vert_haut.svg">
    <div class="container-haut">
        <section>
            <h2>Nos flyers</h2>
            <div class="styled-div">
                <h3>L'association</h3>
                <div class="bottom-content">
                    <p>Cliquez ci-dessous pour télécharger notre flyer au format pdf.</p>
                    <a href="chemin_vers_votre_fichier.pdf" download>
                        <button class="button">Télécharger</button>
                    </a>
                    <div class="preview-documents">
                        <div class="preview">
                            <img src="photos/download/Flyer Asso Recto.png" alt="Aperçu de l'image 1 pour l'association">
                        </div>
                        <div class="preview">
                            <img src="photos/download/Flyer Asso Verso.png" alt="Aperçu de l'image 2 pour l'association">
                        </div>
                    </div>
                </div>
            </div>

            <div class="styled-div">
                <h3>Psychologue de rue</h3>
                <div class="bottom-content">
                    <p>Cliquez ci-dessous pour télécharger notre flyer au format pdf.</p>
                    <a href="chemin_vers_votre_fichier.pdf" download>
                        <button class="button">Télécharger</button>
                    </a>
                    <div class="preview-documents">
                        <div class="preview">
                            <img src="photos/download/Flyer psy Recto.png" alt="Aperçu de l'image 1 pour Psychologue de rue">
                        </div>
                        <div class="preview">
                            <img src="photos/download/Flyer psy Verso.png" alt="Aperçu de l'image 2 pour Psychologue de rue">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <img class="centered-image" src="photos/svg/Rectangles_vert_haut.svg">

        <section>
            <h2>Nos documents</h2>
            <div class="styled-div">
                <div class="description">
                    <p>Dans cette partie vous trouverez, nos divers documents téléchargeables.</p>
                </div>
                <div class="expandable-cards-container">
                    <div class="expandable-card">
                        <h4>Autorisation parentale</h4>
                        <div class="expand-content">
                            <p>Lorem ipsum dolor sit amet consectetur. Pellentesque sem cras amet morbi aenean elementum.</p>
                            <a href="chemin_vers_votre_fichier.pdf" download>
                                <button class="button">Télécharger</button>
                            </a>

                        </div>
                        <span class="expand-control">+</span>
                    </div>

                    <div class="expandable-card">
                        <h4>Projet de service</h4>
                        <div class="expand-content">
                            <p>Lorem ipsum dolor sit amet consectetur. Pellentesque sem cras amet morbi aenean elementum.</p>
                            <a href="chemin_vers_votre_fichier.pdf" download>
                                <button class="button">Télécharger</button>
                            </a>

                        </div>
                        <span class="expand-control">+</span>
                    </div>

                    <div class="expandable-card">
                        <h4>Rapport d’activité 2022</h4>
                        <div class="expand-content">
                            <p>Lorem ipsum dolor sit amet consectetur. Pellentesque sem cras amet morbi aenean elementum.</p>
                            <a href="chemin_vers_votre_fichier.pdf" download>
                                <button class="button">Télécharger</button>
                            </a>

                        </div>
                        <span class="expand-control">+</span>
                    </div>
                </div>
            </div>
        </section>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const images = document.querySelectorAll('.preview img');
                const loupe = document.createElement('div');

                loupe.classList.add('loupe');
                document.body.appendChild(loupe);

                images.forEach(image => {
                    image.addEventListener('mousemove', function(e) {
                        const rect = image.getBoundingClientRect();
                        const scaleX = image.naturalWidth / image.width;
                        const scaleY = image.naturalHeight / image.height;

                        const x = e.clientX - rect.left;
                        const y = e.clientY - rect.top;

                        const offsetX = x * scaleX - loupe.offsetWidth / 2;
                        const offsetY = y * scaleY - loupe.offsetHeight / 2;

                        // Afficher la loupe
                        loupe.style.display = 'block';
                        loupe.style.left = `${e.clientX - (loupe.offsetWidth / 2)}px`;
                        loupe.style.top = `${e.clientY - (loupe.offsetHeight / 2) - 40}px`;


                        loupe.style.backgroundImage = `url('${image.src}')`;
                        loupe.style.backgroundPosition = `-${offsetX}px -${offsetY}px`;
                        loupe.style.backgroundSize = `${image.width * scaleX}px ${image.height * scaleY}px`;
                    });

                    image.addEventListener('mouseleave', function() {
                        loupe.style.display = 'none';
                    });
                });

                const expandControls = document.querySelectorAll('.expand-control');

                expandControls.forEach(control => {
                    control.addEventListener('click', function() {
                        const card = control.closest('.expandable-card');

                        if (card.classList.contains('expanded')) {
                            card.classList.remove('expanded');
                            control.textContent = '+';
                        } else {
                            card.classList.add('expanded');
                            control.textContent = '-';
                        }
                    });
                });
            });
        </script>

</body>

</html>