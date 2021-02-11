<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=jean-forteroche;charset=utf8', 'root', 'root');
}
catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}

// Insertion du billet à l'aide d'une requête préparée
$bdd->prepare('INSERT INTO billets (title, content, date) VALUES(?, ?, ?)');
$req->execute(array($_POST['title'], $_POST['content']));

// Redirection vers la page edition d'article
header('Location: billet_ajouter.php');
?>