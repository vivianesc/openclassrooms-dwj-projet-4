<?php $title = 'Jean Forteroche, billet'; ?>

<?php ob_start(); ?>

<section id="introduction_administration">
    <div class="heading_description">
        <h2><a href="../pages/index.php">Retour à la liste des billets</a></h2>

        <div class="news">
            <h3>
                <?= htmlspecialchars($billet['title']) ?>
                <em>le <?= $billet['date_creation_fr'] ?></em>
            </h3>

            <p>
                <?= nl2br(htmlspecialchars($billet['content'])) ?>
            </p>
        </div>
        <li><a href="billet_editer.php" class="button">Éditer</a></li>
        <li><a href="billet_supprimer.php" class="button">Supprimer</a></li>
        <h2>Commentaires</h2>

        <?php
        while ($comment = $comments->fetch()) {
        ?>
            <?= htmlspecialchars($comment['pseudo']) ?>
            <em>le <?= $comment['date_comment_fr'] ?></em>
            <p><?= (htmlspecialchars($comment['comment'])) ?></p>
        <?php
        }
        ?>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('../templates/page.php'); ?>