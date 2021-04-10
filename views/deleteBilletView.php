<?php $title = 'Jean Forteroche, billet'; ?>

<?php ob_start(); ?>

<section id="introduction_administration">
    <div class="heading_description">
        <h2>Le billet a bien été supprimé</h2>
        <h3><a href="../pages/index.php">Retour à la liste des billets</a></h3>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('../templates/page.php'); ?>