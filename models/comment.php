<?php

function deleteComments($billetId)
{
    $db = dbConnect();
    $req = $db->query('DELETE FROM comments WHERE id_billet = ' . $billetId);

    return $req;
}

function getComments($billetId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT pseudo, comment, DATE_FORMAT(date_comment, \'%d/%m/%Y \') AS date_comment_fr FROM comments WHERE id_billet = ? ORDER BY date_comment');
    $req->execute(array($billetId));

    return $req;
}

require('dbConnect.php');

function postComment($billetId, $pseudo, $comment)
{
    $db = dbConnect();
    $req = $db->prepare('INSERT INTO comments(id_billet, pseudo, comment, date_comment, report) VALUES(?, ?, ?, CURRENT_DATE(), 0)');
    $req->execute(array($billetId, $pseudo, $comment));
}