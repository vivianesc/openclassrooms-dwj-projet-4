<?php $title = 'Jean Forteroche, billet'; ?>

<?php require('../modules/header.php'); ?>

<?php ob_start(); ?>
<section id="introduction">
    <div class="heading_description">
        <h2><a href="index.php">Retour à la liste des billets</a></h2>

        <?php
        // Connexion à la base de données
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=jean-forteroche;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        // Récupération du billet
        $req = $bdd->prepare('SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y \') AS date_creation_fr FROM billets WHERE id = ?');
        $req->execute(array($_GET['billet']));
        $donnees = $req->fetch();
        ?>

        <div class="news">
            <h3>
                <?php echo htmlspecialchars($donnees['title']); ?>
                <em>le <?php echo $donnees['date_creation_fr']; ?></em>
            </h3>

            <p>
                <?php
                echo nl2br(htmlspecialchars($donnees['content']));
                ?>
            </p>
        </div>
        <li><a href="billet_editer.php" class="button">Éditer</a></li>
        <li><a href="billet_supprimer.php" class="button">Supprimer</a></li>

        <h2>Commentaires</h2>

        <?php
        $req->closeCursor(); // Important : on libère le curseur pour la prochaine requête

        // Récupération des commentaires
        $req = $bdd->prepare('SELECT author, comment, DATE_FORMAT(date_comment, \'%d/%m/%Y \') AS date_comment_fr FROM comments WHERE id_billet = ? ORDER BY date_comment');
        $req->execute(array($_GET['billet']));

        while ($donnees = $req->fetch()) {
        ?>
            <p><strong><?php echo htmlspecialchars($donnees['author']); ?></strong> le <?php echo $donnees['date_comment_fr']; ?></p>
            <p><?php echo nl2br(htmlspecialchars($donnees['comment'])); ?></p>
        <?php
        } // Fin de la boucle des commentaires
        $req->closeCursor();
        ?>

        <?php $content = ob_get_clean(); ?>

        <?php require('../templates/template.php'); ?>

        <?php require('../modules/footer.php'); ?>