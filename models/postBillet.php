<?php
require('dbConnect.php');

function postBillet()
{
$db = dbConnect();
// Insertion du commentaire à l'aide d'une requête préparée
$req = $db->prepare('INSERT INTO billets(title, content, date_creation) VALUES(?, ?, CURRENT_DATE())');
$req->execute(array($_POST['title'], $_POST['content']));

// Redirection du visiteur vers la page article
header('Location: billetView.php');

}