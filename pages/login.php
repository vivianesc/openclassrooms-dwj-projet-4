<?php $title = 'Jean Forteroche, login'; ?>

<?php require('../modules/header.php'); ?>

<?php ob_start(); ?>
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

    <?php $content = ob_get_clean(); ?>

<?php require('../templates/template.php'); ?>

<?php require('../modules/footer.php'); ?>