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
    <?php
    require('header.php');
    ?>
    <!--/Header end-->
    <section id="introduction">
    <form method="post" action="administration.php">
        <p>
        <fieldset id="">
            <legend>LOGIN</legend>
            <p><input type="text" name="username" placeholder="Identifiant" required></p>
            <p><input type="password" name="password" placeholder="Mot de passe" required></p>
            <p><input type="submit" name="submit" value="Login" class="login_button"></p>
        </fieldset>
        </p>
    </form>
    </section>
    <!-- /footer -->
    <?php
    require('footer.php');
    ?>
    <!--/footer end-->

</body>

</html>