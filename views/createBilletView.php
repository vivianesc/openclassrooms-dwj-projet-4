<?php $title = 'Jean Forteroche, billet'; ?>

<?php ob_start(); ?>

<section id="introduction_administration">
    <div class="heading_description">
        <form method="post" action="../pages/administration.php?login=true">
            <p>
            <fieldset id="">
                <legend>CRÉATION DE BILLET</legend>
                <p>
                    <input type="text" name="title" placeholder="Titre" required><br />
                    <textarea name="content" placeholder="Contenu" rows="20" cols="100" required></textarea><br />
                    <input type="submit" value="Ajouter" class="login_button">
                </p>
                <p><a href="" class="button">Liste des commentaires signalés</a></p>
</section>
</fieldset>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('../templates/page.php'); ?>