<form method="post" action="ajouter.php">
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
?>