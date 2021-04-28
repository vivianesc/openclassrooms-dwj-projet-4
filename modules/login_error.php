<?php $title = 'Jean Forteroche, login error'; ?>

<?php ob_start(); ?>
<section id="introduction">
    <div class="heading_description">
        <h2>Mauvais identifiant ou mot de passe !</h2>
        <p><a href="../views/loginView.php" class="login_button">Retour page login</a></p>
    </div>
</section>
<?php $content = ob_get_clean(); ?>

<?php require('../templates/page.php'); ?>