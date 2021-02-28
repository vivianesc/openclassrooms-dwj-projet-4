<?php
// Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=jean-forteroche;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Récupération des commentaires
$req = $bdd->prepare('SELECT pseudo, comment, DATE_FORMAT(date_comment, \'%d/%m/%Y \') AS date_comment_fr FROM comments WHERE id_billet = ? ORDER BY date_comment');
$req->execute(array($_GET['billet']));

while ($donnees = $req->fetch()) {
?>
    <p><strong><?php echo htmlspecialchars($donnees['pseudo']); ?></strong> le <?php echo $donnees['date_comment_fr']; ?></p>
    <p><?php echo nl2br(htmlspecialchars($donnees['comment'])); ?></p>
<?php

} // Fin de la boucle des commentaires
$req->closeCursor();
?>