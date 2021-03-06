<?php
require('dbConnect.php');

function getComments($billetId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT pseudo, comment, DATE_FORMAT(date_comment, \'%d/%m/%Y \') AS date_comment_fr FROM comments WHERE id_billet = ? ORDER BY date_comment');
    $req->execute(array($billetId));
    $comments = $req->fetch();

    return $comments;
}
