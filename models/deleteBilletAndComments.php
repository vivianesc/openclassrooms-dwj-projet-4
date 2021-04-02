<?php
require('dbConnect.php');

function deleteBillet($billetId)
{
    $db = dbConnect();
    $req = $db->query('DELETE FROM billets WHERE id = ' . $billetId);
    return $req;
}

function deleteComments($billetId)
{
    $db = dbConnect();
    $req = $db->query('DELETE FROM comments WHERE id_billet = ' . $billetId);

    return $req;
}
