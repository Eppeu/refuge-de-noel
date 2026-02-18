<?php 
    $compteur_div=0;
    $getjson=file_get_contents("./Private/adoption.json");
    $animaux=json_decode($getjson, true);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Adoption: Refuge de Noël</title>
    <link rel="icon" type="image/png" href="logo.png"/>
</head>
<body>
    <header>
        <section>
            <figure class="header__figure"> <!-- logo + bouton --> 

                <a href="./index.html"><img src="public/icons/logo.png" alt="logo"></a>
                <div class="Billeterie_text">
                        <a href="billeterie.html" class="header_button">
                         <img class="Header_icons" src="public/icons/billeteire.png" alt="icone billeterie">
                         Billeterie
                        </a>
                </div>

                <div class="Billeterie_text">
                    <a href="Private/adopton_admin.php" class="header_button">
                    <img class="Header_icons" src="public/icons/billeteire.png" alt="icone admin">
                    Admin
                </a>

            </figure>

            <ul class="header__nav">
                <li><a href="index.html">Accueil</a></li>
                <li><a href="adoption.php">Adoption</a></li>
                <li><a href="propos.php">À propos</a></li>
            </ul>
                <div class="Donation_text">
                    <a href="don.html"  class="header_button" >
                        <img class="Header_icons" src="public/icons/money.png" alt="icone don">
                        Faire un don

                    </a>
                </div>
        </section>
    </header>



    <main> <!--Tableau des adoptions-->
        <section class="main__table">
            <?php foreach ($animaux as $animal): ?>
            <table class="table-animal">
                <?php if ($compteur_div % 2 == 0):?>
                    <tr class ="row_table">
                        <td class="image">
                            <img src="<?php echo $animal['image']; ?>" alt="Photo de l'animal">
                        </td>
                        <td class="infos">
                            <h2><?php echo $animal['nom'] . " - " . $animal['age'] . " ans " . " / " . $animal['sexe']; ?></h2>
                            <p><?php echo $animal['description']; ?></p>
                        </td>
                    </tr>
                    <?php $compteur_div += 1;?>
                <?php else:?>
                        <tr class ="row_reverse_table">
                        <td class="image">
                            <img src="<?php echo $animal['image']; ?>" alt="Photo de l'animal">
                        </td>
                        <td class="infos">
                            <h2><?php echo $animal['nom'] . " - " . $animal['age'] . " ans " . " / " . $animal['sexe']; ?></h2>
                            <p><?php echo $animal['description']; ?></p>
                        </td>
                        </tr>
                <?php $compteur_div += 1;?>
                <?php endif;?>
            </table>
            <?php endforeach; ?>
        </section>
        
    </main>


    <!-- reseaux sociaux -->
    <footer>
        <section class="Footer__Join">
            <h2>Nous rejoindre!</h2>

            <div class="Footer_Join_container">
                <a href="https://www.youtube.com/">
                    <img src="public/icons/youtube.svg" alt="youtube">
                </a>
                <a href="https://www.tiktok.com/@le_refuge_de_noel">
                    <img src="public/icons/tiktok.svg" alt="Tiktok">
                </a>
                <a href="https://www.instagram.com/le_refuge_de_noel/">
                    <img src="public/icons/instagram.svg" alt="Instagram">
                </a>
                <a href="https://www.tripadvisor.fr/Profile/Go33070313324">
                    <img src="public/icons/tripadvisor.svg" alt="Tropadvisor">
                </a>
            </div>
        </section>

        <section class="Footer_legal">
            <div class="Footer_legal_container">
                <div class="Legal_mention">
                    <p>@Blahaj - 2025 - Tous droits réservés - <strong><a href="mentions_legale.html">Mention Legales</a></strong></p>
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