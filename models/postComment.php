<?php
function postComment()
{
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=jean-forteroche;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
}
// Insertion du commentaire à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO comments(pseudo, comment, date_comment) VALUES(?, ?, CURRENT_DATE())');
$req->execute(array($_POST['pseudo'], $_POST['comment']));

// Redirection du visiteur vers la page article
header('Location: article.php');
