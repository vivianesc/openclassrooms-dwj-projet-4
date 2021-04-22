<?php
require('dbConnect.php');

function getBillets()
{
    $db = dbConnect();
    $req = $db->query('SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y \') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 10');

    return $req;
}

function createBillet()
{
    $db = dbConnect();
    // Insertion du commentaire à l'aide d'une requête préparée
    $req = $db->prepare('INSERT INTO billets(title, content, date_creation) VALUES(?, ?, CURRENT_DATE())');
    $req->execute(array($_POST['title'], $_POST['content']));
}

function deleteBillet($billetId)
{
    $db = dbConnect();
    $req = $db->query('DELETE FROM billets WHERE id = ' . $billetId);
    return $req;
}

function editBillet($title, $content, $billetId)
{
    $db = dbConnect();
    $req = $db->prepare("UPDATE billets SET title = ?, content = ? WHERE id = ?");
    $req->execute(array($title, $content, $billetId));
    return $req;
}

function getBillet($billetId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y \') AS date_creation_fr FROM billets WHERE id = ?');
    $req->execute(array($billetId));
    $billet = $req->fetch();

    return $billet;
}



