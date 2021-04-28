<?php $title = 'Jean Forteroche, login'; ?>

<?php ob_start(); ?>
<section id="introduction">
    <form method="post" action="../pages/administration.php">
        <fieldset id="">
            <legend>LOGIN</legend>
            <p><input type="text" name="username" placeholder="Identifiant" required></p>
            <p><input type="password" name="password" placeholder="Mot de passe" required></p>
            <p><input type="submit" name="submit" value="Login" class="login_button"></p>
        </fieldset>
    </form>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('../templates/page.php'); ?>