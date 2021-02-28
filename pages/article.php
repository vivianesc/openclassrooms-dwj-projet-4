<?php ob_start(); ?>

<section id="introduction_administration">
    <div class="heading_description">
        <h2><a href="index.php">Retour à la liste des billets</a></h2>

        <?php require('../models/getBillet.php'); ?>

        <?php require('../models/getComments.php'); ?>

        <?php require('../modules/comment.php'); ?>

        <?php $content = ob_get_clean(); ?>

</section>

<?php require('../templates/page.php'); ?>