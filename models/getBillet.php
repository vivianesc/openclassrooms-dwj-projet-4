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
<?php $title = htmlspecialchars($donnees['title']); ?>