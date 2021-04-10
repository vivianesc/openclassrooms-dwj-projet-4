<?php $title = 'Jean Forteroche, billet'; ?>

<?php ob_start(); ?>

<section id="introduction_administration">
    <div class="heading_description">
        <?php
        if (isset($_GET['login']) &&  $_GET['login'] == 'true' || isset($_POST['username']) and $_POST['username'] ==  "Jean" and isset($_POST['password']) and $_POST['password'] ==  "eden") { ?>
            <h2>Bonjour Jean, bienvenue dans votre éditeur de billets</h2>
            <div class="cpanel">
                <p><?php require('../controllers/billet.php'); ?></p>
                <ul>
                    <li><a href="billet_editer.php" class="button">Liste des commentaires signalés</a></li>
                </ul>
            </div>

        <?php

        } else {
            require('../modules/login_error.php');
        }
        ?>
</section>
<!--/Section introduction end -->

<?php $content = ob_get_clean(); ?>

<?php require('../templates/page.php'); ?>