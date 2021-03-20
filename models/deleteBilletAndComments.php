<?php
require('dbConnect.php');

function deleteBillet($billetId)
{
    $db = dbConnect();
    /*        $req = $db->prepare('SELECT title');
    $req->execute(array($billetId));
    $billet = $req->fetch(); */
    $req = $db->query('DELETE FROM billets WHERE id = ' . $billetId);
    return $req;
}

function deleteComments($billetId)
{
    $db = dbConnect();
    $req = $db->query('DELETE FROM comments WHERE id_billet = ?');
    return $req;
}
