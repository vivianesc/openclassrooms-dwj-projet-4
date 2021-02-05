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
<header>
<?php
    if (isset($_POST['username']) AND $_POST['username'] ==  "Jean" AND isset($_POST['password']) AND $_POST['password'] ==  "eden")
    {
        echo '<p>Bonjour Jean, vous pouvez écrire votre article</p>';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
    ?>

<p><a href="login.php">cliquez ici</a> pour revenir à la page login.php.</p>

</header>

</body>

</html>
