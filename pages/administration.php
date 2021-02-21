
<?php $title = 'Jean Forteroche, billet'; ?>

<?php require('../modules/header.php'); ?>

<?php ob_start(); ?>

    <section id="introduction_administration">
        <div class="heading_description">
            <?php
            if (isset($_POST['username']) and $_POST['username'] ==  "Jean" and isset($_POST['password']) and $_POST['password'] ==  "eden") {
                echo '<h2>Bonjour Jean, bienvenue dans votre éditeur de billets</h2>
                <div class="cpanel">
                <ul>
                <li><a href="billet_ajouter.php" class="button">Ajouter un article</a></li>
                <li><a href="billet_editer.php" class="button">Liste des commentaires signalés</a></li>
                </ul>
                </div>';
            } else {
                require('../modules/login_error.php');
            }
            ?>
    </section>
    <!--/Section introduction end -->

    <?php $content = ob_get_clean(); ?>

    <?php require('../templates/template.php'); ?>

    <?php require('../modules/footer.php'); ?>