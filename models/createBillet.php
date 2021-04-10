<?php
require('dbConnect.php');

function createBillet()
{
    $db = dbConnect();
    // Insertion du commentaire à l'aide d'une requête préparée
    $req = $db->prepare('INSERT INTO billets(title, content, date_creation) VALUES(?, ?, CURRENT_DATE())');
    $req->execute(array($_POST['title'], $_POST['content']));
}