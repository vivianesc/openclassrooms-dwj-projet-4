<?php $title = 'Jean Forteroche, commentaire'; ?>

<?php ob_start(); ?>

<section id="introduction_administration">
    <div class="heading_description">
        <h2>Votre post a été ajouté</h2>
        <h3><a href="../pages/index.php">Retour à la liste des billets</a></h3>
    </div>

</section>

<?php $content = ob_get_clean(); ?>

<?php require('../templates/page.php'); ?>