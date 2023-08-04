<?php
$km = 1;
?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP Variables - Exercice 3</title>
</head>
<!-- Header -->

<body>
    <header class="d-flex flex-column justify-content-center align-items-center text-light">
        <h1>PHP Variables</h1>
        <h2>Exercice 3</h2>
    </header>
    <main>
        <!-- Consigne de l'exercice -->
        <div class="d-flex justify-content-center pt-5">
            <p>Consigne : Créer une variable km. L'initialiser à 1. Afficher son contenu.
                Changer sa valeur par 3. Afficher son contenu.
                Changer sa valeur par 125. Afficher son contenu.
            </p>
        </div>
        <hr>
        <!-- Réponse -->
        <div class="d-flex justify-content-center text-center">
            <?php
            echo "La première valeur est $km";
            echo "<br>";
            $km = 3;
            echo "La seconde valeur est $km";
            echo "<br>";
            $km = 125;
            echo "La troisième valeur est $km";
            ?>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
</body>

</html>