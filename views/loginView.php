<?php $title = 'Jean Forteroche, login'; ?>

<?php ob_start(); ?>
<section id="introduction">
    <form method="post" action="administration.php">
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


<!-- <section id="introduction_administration">
    <div class="heading_description">
        <?php
        if (isset($_GET['login']) &&  $_GET['login'] == 'true' || isset($_POST['username']) and $_POST['username'] ==  "Jean" and isset($_POST['password']) and $_POST['password'] ==  "eden") { ?>
            echo 'Bonjour Jean, bienvenue dans votre éditeur de billets';
            require('../controllers/billet.php');
                <p><a href="" class="button">Liste des commentaires signalés</a></p>
            </div>
        <?php

        } else {
            require('../modules/login_error.php');
        }
        ?>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('../templates/page.php'); ?> -->