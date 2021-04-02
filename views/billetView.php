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
        <div class="cpanel">
            <ul>
                <li><a href="../pages/delete.php?billet=<?php echo $billet['id']; ?>" class="button">Supprimer</a></li>
                <li><a href="billet_supprimer.php" class="button">Éditer</a></li>
            </ul>
        </div>
        <h2>Commentaires</h2>

        <?php
        while ($comment = $comments->fetch()) {
        ?>
            <?= htmlspecialchars($comment['pseudo']) ?>
            <em>le <?= $comment['date_comment_fr'] ?></em>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>

        <?php
        }
        ?>
        <p><?php require('../modules/commentForm.php'); ?></p>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('../templates/page.php'); ?>