<?php
require('dbConnect.php');

function postComment($billetId, $pseudo, $comment)
{
    $db = dbConnect();
    $req = $db->prepare('INSERT INTO comments(id_billet, pseudo, comment, date_comment, report) VALUES(?, ?, ?, CURRENT_DATE(), 0)');
    $req->execute(array($billetId, $pseudo, $comment));
}
