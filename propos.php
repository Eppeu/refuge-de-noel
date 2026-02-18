<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="" href="style/style.css">
    <title>À propos: Refuge de Noël</title>
    <link rel="icon" type="image/png" href="logo.png"/>
</head>
<body>
    <header>
        <section>
            <figure class="header__figure"> <!-- logo + bouton --> 
                <a href="./index.html"><img src="public/icons/logo.png" alt="placeholder"></a>
                <div class="Billeterie_text">
                        <a href="billeterie.html" class="header_button">
                        <img class="Header_icons" src="public/icons/billeteire.png" alt="placeholder">
                        Billeterie
                    </a>
                </div>
            </figure>
            </div>
            <ul class="header__nav"> <!-- Menue -->
                <li><a href="index.html">Accueil</a></li>
                <li><a href="adoption.php">Adoption</a></li>
                <li><a href="propos.php">À propos</a></li>
            </ul>
                <div class="Donation_text">
                    <a href="don.html"  class="header_button" >
                        <img class="Header_icons" src="public/icons/money.png" alt="placeholder">
                        Faire un don

                    </a>
                </div>
        </section>
    </header>

    <main>

        <section class="Main__Leader"> <!-- cehf de projet-->
            <div class="Leader_container">
                <img src="public/personnes/meuf_chouette.jpg" height=400px width=auto alt="placeholder">
                <div class="Leader_text_container">
                    <h2>Noël - Cheffe de projet</h2>
                    <p>Noël est l’auteure du projet , elle est la directrice du parc. Soignante depuis 15 ans, elle a toujours voulu venir en aide aux animaux donc créer ce parc était donc une évidence. </p>
                </div>
            </div>
        </section>

        <section class="Main__Workers"> <!-- Salarié-->
            <div class="Workers_container">
                <div class="Worker_1">
                    <img src="public/personnes/Frederic.jpg"  alt="Frederic">
                    <h3>Frédéric- soignant/ Sous directeur  </h3>
                    <p>Frédéric fait partie des personnes à l’origine de ce projet humanitaire. Amoureux des animaux, il a toujours aimé les soigner. Il a donc aidé Noël a fondé ce parc.</p>
                </div>

                <div class="Worker_2">
                    <img src="public/personnes/Mia.jpg"  alt="Mia">
                    <h3>Mia - soignante</h3>
                    <p>Mia est vétérinaire, elle a décidé de suivre son conjoint Frédéric dans son projet. Elle est la chef opératrice des soignants depuis 3 ans. Et elle vous accompagnera lors de votre journée d'immersion.  </p>
                </div>

                <div class="Worker_3">
                    <img src="public/personnes/Louis.jpg"  alt="Louis">
                    <h3>Louis - soignant</h3>
                    <p>Louis  travaillait dans un zoo plus précisément dans le secteur des rapaces. Il est passionné depuis qu’il est enfant. Il a aidé Noël et Frédéric a fonder la volière du parc et dressé les aigles.</p>
                </div>
            </div>
        </section>

        <section class="Main__Day"> <!--calendrier-->
            <?php 
                $jours=["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
                $jour_actuel=getdate();
                
            ?>
            

            <div class="Day_container"> <!--suite calendrier-->
                <img src="public/personnes/interieur_parc.jpg" height="400px" width=auto alt="Placeholder">
                <table>
                    <tr>
                        <?php if($jours[0]==$jour_actuel["weekday"]): ?>
                            <th class ="hightlight_color">Lundi</th>
                        <?php else:?>
                            <th>Lundi</th>
                        <?php endif; ?>
                        </th>

                        <td>8:00-19:00</td>
                        <td>
                            <ul>
                                <li>Journée avec les soignants</li>
                                <li>Visites immersives</li>
                                <li>Promenade des chiens</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <?php if($jours[1]==$jour_actuel["weekday"]): ?>
                            <th class ="hightlight_color">Mardi</th>
                        <?php else:?>
                            <th>Mardi</th>
                        <?php endif; ?>
                        </th>

                        <td>8:00-19:00</td>
                        <td>Visite guidée du parc/Activités éducatives</td>
                    </tr>

                    <tr>
                        <?php if($jours[2]==$jour_actuel["weekday"]): ?>
                            <th class ="hightlight_color">Mercredi</th>
                        <?php else:?>
                            <th>Mercredi</th>
                        <?php endif; ?>
                        </th>
                        <td>8:00-19:00</td>
                        <td>Activités éducatives/ Journée avec les soignants</td>
                    </tr>

                    <tr>
                        <?php if($jours[3]==$jour_actuel["weekday"]): ?>
                            <th class ="hightlight_color">Jeudi</th>
                        <?php else:?>
                            <th>Jeudi</th>
                        <?php endif; ?>
                        </th>
                        <td colspan="2">Fermé</td>
                    </tr>

                    <tr>
                        <?php if($jours[4]==$jour_actuel["weekday"]): ?>
                            <th class ="hightlight_color">Vendredi</th>
                        <?php else:?>
                            <th>Vendredi</th>
                        <?php endif; ?>
                        </th>
                        <td>8:00-19:00</td>
                        <td>Visite guidée du parc/Activités éducatives</td>
                    </tr>

                    <tr>
                        <?php if($jours[5]==$jour_actuel["weekday"]): ?>
                            <th class ="hightlight_color">Samedi</th>
                        <?php else:?>
                            <th>Samedi</th>
                        <?php endif; ?>
                        </th>
                        <td>8:00-19:00</td>
                        <td>Journée avec les soignants/Visites immersives</td>
                    </tr>

                    <tr>
                        <?php if($jours[6]==$jour_actuel["weekday"]): ?>
                            <th class ="hightlight_color">Dimanche</th>
                        <?php else:?>
                            <th>Dimanche</th>
                        <?php endif; ?>
                        </th>
                        <td>8:00-19:00</td>
                        <td>Promenade des chiens/Visites immersives</td>
                    </tr>
                </table>
            </div>
        </section>

    </main>

    <footer>
        <section class="Footer__Join"> <!-- reseaux sociaux -->
            <h2>Nous rejoindre!</h2>
            <div class="Footer_Join_container">
                <a href="https://www.youtube.com/">
                    <img src="public/icons/youtube.svg" alt="youtube">
                </a>
                <a href="https://www.tiktok.com/fr/">
                    <img src="public/icons/tiktok.svg" alt="Tiktok">
                </a>
                <a href="https://www.instagram.com/">
                    <img src="public/icons/instagram.svg" alt="Instagram">
                </a>
                <a href="https://www.tripadvisor.fr/">
                    <img src="public/icons/tripadvisor.svg" alt="Tropadvisor">
                </a>
            </div>
        </section>

        <section class="Footer_legal">
            <div class="Footer_legal_container">
                <div class="Legal_mention">
                    <p>@Blahaj - 2025 - Tous droits réservés - <strong><a href="#">Mention Legales</a></strong></p>
                </div>

                <div class="Partners">
                    <img src="public/icons/occitanie.png" alt="Region Occitanie">
                    <img class="logo_footer" src="public/icons/logo.png" alt="Logo Refuge">
                </div>

            </div>
        </section>
    </footer>
</body>
</html>