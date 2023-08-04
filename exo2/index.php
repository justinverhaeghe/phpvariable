<?php
$lastname = 'Verhaeghe';
$firstname = 'Justin';
$age = 34;
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
    <title>PHP Variables - Exercice 2</title>
</head>
<!-- Header -->

<body>
    <header class="d-flex flex-column justify-content-center align-items-center text-light">
        <h1>PHP Variables</h1>
        <h2>Exercice 2</h2>
    </header>
    <main>
        <!-- Consigne de l'exercice -->
        <div class="d-flex justify-content-center pt-5">
            <p>
                Consigne : Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de
                votre
                choix.
                Attention age est de type entier. Afficher leur contenu.
            </p>
        </div>
        <hr>
        <!-- Réponse -->
        <div class="d-flex justify-content-center ">
            <?php
            echo "Hello, je m'appelle $firstname $lastname, j'ai actuellement $age ans";
            ?>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
</body>

</html>