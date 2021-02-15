<form method="post" action="billet_ajouter_cible.php">
    <p>
    <fieldset id="">
        <legend>EDITION DES BILLETS</legend>
        <p>
            <label for="title">Titre</label> : <input type="text" name="title" id="title"><br />
            <label for="content">Contenu</label> : <input type="text" name="content" id="content"><br />
            <input type="submit" value="Ajouter" class="login_button">
        </p>
    </fieldset>
    </p>
</form>
<?php
// Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=jean-forteroche;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
// Récupération du contenu
$reponse = $bdd->query('SELECT title, content FROM billets ORDER BY ID DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['title']) . '</strong> : ' . htmlspecialchars($donnees['content']) . '</p>';
}

$reponse->closeCursor();

?>
