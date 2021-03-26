<?php
require('dbConnect.php');

function postComment()
{
$db = dbConnect();
// Insertion du commentaire à l'aide d'une requête préparée
$req = $db->prepare('INSERT INTO comments(pseudo, comment, date_comment) VALUES(?, ?, CURRENT_DATE())');
$req->execute(array($_POST['pseudo'], $_POST['comment']));

// Redirection du visiteur vers la page article
//header('Location: billetView.php');

}