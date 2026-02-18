    <?php
        $getjson=file_get_contents("adoption.json");
        $decode_json=json_decode($getjson,true);

        if (isset($_POST["SubmitButton"])) {

            // Uploaded pictures (help me grrr)
            $path_directory= "../public/adoption/";
            $filename = basename($_FILES["animal_image"]["name"]);
            $file_directory = $path_directory . $filename;
            if (move_uploaded_file($_FILES["animal_image"]["tmp_name"], $file_directory)) {
                $final_path= "public/adoption/" . $filename;

                $post_form = array(
                "nom" => $form_name=$_POST["animal_name"],
                "age" => $form_age=$_POST["animal_age"],
                "sexe" => $form_sexe=$_POST["animal_sexe"],
                "image" => $final_path,
                "description" => $form_description=$_POST["animal_description"]
                );
                array_push($decode_json, $post_form);
            } else {
                echo "La photo choisie fait plus de 5Mo, veuillez mettre une photo moins lourde.";
            }
        }

        if (isset($_POST["delete_index"])) {
            $index = $_POST["delete_index"];
            unset($decode_json[$index]);
        } 
    $newfile=json_encode($decode_json);
    file_put_contents("adoption.json",$newfile);
    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Admin</title>
    <link rel="icon" type="image/png" href="../logo.png"/>
</head>
<body>
    <header>
        <section>
            <figure class="header__figure">
                <a href="../index.html"><img src="../public/icons/logo.png" alt="logo"></a>
                <div class="Billeterie_text">
                        <a href="../billeterie.html" class="header_button">
                        <img class="Header_icons" src="../public/icons/billeteire.png" alt="icone billeterie">
                        Billeterie
                    </a>
                </div>
            </figure>
            <ul class="header__nav">
                <li><a href="../index.html">Accueil</a></li>
                <li><a href="../adoption.php">Adoption</a></li>
                <li><a href="../propos.php">À propos</a></li>
            </ul>
                <div class="Donation_text">
                    <a href="../don.html"  class="header_button" >
                        <img class="Header_icons" src="../public/icons/money.png" alt="icone don">
                        Faire un don

                    </a>
                </div>
        </section>
    </header>

    <main>

    <section class="Admin">
        <h1>Tableau de bord</h1>


    <form action="adopton_admin.php" method="post" class="admin_form" enctype="multipart/form-data">
        <div class="admin_form_style">
            <label for="animal_name">Nom</label>
            <input type="text" name="animal_name" id="animal_name" required>

            <label for="animal_age">Age</label>
            <input type="number" name="animal_age" id="animal_age" required>

            <label for="animal_sexe">Sexe</label>
            <input type="text" name="animal_sexe" id="animal_sexe" required>

            <label for="animal_image">Image (Moins de 5Mo)</label>
            <input type="file" name="animal_image" id="animal_image" 
            accept=".png,.jpg,.jpeg,.svg" required>

            <label for="animal_description">Description</label>
            <input type="text" name="animal_description" id="animal_description" required>
        </div>
        <div class="admin_form_style">
            <input type="submit" value="Submit" name="SubmitButton">
        </div>
    </form>

    <table class="Admin_table">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Age</th>
            <th>Sexe</th>
            <th>Image</th>
            <th>Description</th>
            <th>Statut</th>
        </tr>
            <?php foreach ($decode_json as $index => $animaux):?>
        <tr>
            <td><?php echo $index ?></td>
            <td><?php echo $animaux["nom"];?></td>
            <td><?php echo $animaux["age"];?></td>
            <td><?php echo $animaux["sexe"];?></td>
            <td><img src="<?php echo "../" . $animaux["image"];?>" alt="Animal" onerror="this.onerror=null;this.src='../public/placeholder/placeholder.png';"></td>
            <td><?php echo $animaux["description"];?></td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="delete_index" value="<?php echo $index; ?>">
                    <input type="submit" value="Delete" name="BtnDelete">
                </form>
            </td>
        </tr>
            <?php endforeach; ?>
    </table>
    </section>
    </main>
    
</body>
</html>