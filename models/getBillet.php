<?php
require('dbConnect.php');

function getBillet($billetId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y \') AS date_creation_fr FROM billets WHERE id = ?');
    $req->execute(array($billetId));
    $billet = $req->fetch();

    return $billet;
}

function getComments($billetId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT pseudo, comment, DATE_FORMAT(date_comment, \'%d/%m/%Y \') AS date_comment_fr FROM comments WHERE id_billet = ? ORDER BY date_comment');
    $req->execute(array($billetId));

    return $req;
}
