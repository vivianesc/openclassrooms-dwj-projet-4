<form action="article.php?billet=1" method="post">
    <fieldset id="">
        <legend>AJOUTER UN COMMENTAIRE</legend>
        <p>
            <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
            <textarea name="comment" id="comment" rows="8" cols="45">Votre commentaire</textarea>
            <input type="submit" value="Envoyer" class="login_button" />
        </p>
    </fieldset>
</form>

<?php
//require('models/postComment.php') 
//postComment($_POST['comment'])

// Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=jean-forteroche;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Insertion du commentaire à l'aide d'une requête préparée
if (isset($_POST)) {
    $req = $bdd->prepare('INSERT INTO comments(pseudo, comment, date_comment) VALUES(?, ?, CURRENT_DATE())');
    // TO FIX
    // $req->execute(array($_POST['pseudo'], $_POST['comment']));
}
?>