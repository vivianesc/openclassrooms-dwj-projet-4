<?php $title = 'Jean Forteroche, billet'; ?>

<?php ob_start(); ?>

<section id="introduction_administration">
    <div class="heading_description">
        <h2><?= htmlspecialchars($billet['title']) ?></h2>
        <em>le <?= $billet['date_creation_fr'] ?></em>
        <h3><a href="../pages/index.php">Retour à la liste des billets</a></h3>
    </div>
    <div class="news">
        <p><?= htmlspecialchars($billet['content']) ?></p>
    </div>
    <div class="cpanel">
        <ul>
            <li><a href="../pages/delete.php?billet=<?php echo $billet['id']; ?>" class="button">Supprimer</a></li>
            <li><a href="../views/billetEditView.php?billet=<?php echo $billet['id']?>&title=<?php echo $billet['title']?>&content=<?php echo $billet['content']?>"class="button">Éditer</a></li>
        </ul>

        <div class="comments">
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
        </div>
        <div id="formulaire"><?php require('../modules/commentForm.php'); ?></div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('../templates/page.php'); ?>