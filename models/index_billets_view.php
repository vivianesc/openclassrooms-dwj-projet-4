<?php $title = 'Jean Forteroche, le blog'; ?>

<?php require('../modules/header.php'); ?>

<?php ob_start(); ?>
<section id="introduction">
    <div class="heading_description">
        <h1><span class="heading_jeanforteroche">BILLET POUR L'ALASKA</h1>
        <h2>Partez à la découverte de mon nouveau roman</h2>
        <p><a href="#billets" class="button">Voir tous les billets</a></p>
    </div>
</section>

<!--/Section content -->
<section id="billets">
    <div class="heading_description">
        <h2>LES BILLETS</h2>
    </div>
    <div class="display-posts-listing image-left">

        <?php
        while ($donnees = $req->fetch()) {
        ?>
            <div class="listing-item">
                <div class="excerpt">
                    <?php echo htmlspecialchars($donnees['title']); ?>
                    <em>le <?php echo $donnees['date_creation_fr']; ?></em>
                    <a href="article.php?billet=<?php echo $donnees['id']; ?>">Lire le billet</a>
                    <p>
                        <?php
                        // On affiche le contenu du billet
                        echo nl2br(htmlspecialchars($donnees['content']));
                        ?>
                    </p>
                </div>
            <?php
        } // Fin de la boucle des billets
        $req->closeCursor();
            ?>
            </div>
    </div>
</section>
<!--/Section content end-->

<?php $content = ob_get_clean(); ?>

<?php require('../templates/template.php'); ?>

<?php require('../modules/footer.php'); ?>