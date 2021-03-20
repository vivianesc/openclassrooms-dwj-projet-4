<?php
require('dbConnect.php');

function getBillets()
{
    $db = dbConnect();
    $req = $db->query('SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y \') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 10');

    return $req;
}
