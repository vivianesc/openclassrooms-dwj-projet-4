<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/4f98587330.js" crossorigin="anonymous"></script>
    <title>Jean Forteroche, le blog</title>
</head>

<body>
    <!--/Header -->
    <header>
    </header>
    <!--/Header end-->

    <!--/Section introduction-->
    <section id="introduction_administration">
        <div class="heading_description">
            <?php
            if (isset($_POST['username']) and $_POST['username'] ==  "Jean" and isset($_POST['password']) and $_POST['password'] ==  "eden") {
                echo '<h2>Bonjour Jean, bienvenue dans votre éditeur de billets</h2>
                <div class="cpanel">
                <ul>
                <li><a href="billet_ajouter.php" class="button">Ajouter</a></li>
                <li><a href="billet_editer.php" class="button">Éditer</a></li>
                <li><a href="billet_supprimer.php" class="button">Supprimer</a></li>
                </ul>
                </div>';
            } else {
                echo '<h2>Mauvais identifiant ou mot de passe !</h2>
                <p><a href="login.php" class="login_button">Retour page login</a></p>';
            }
            ?>
    </section>
    <!--/Section introduction end -->
</body>
</html>