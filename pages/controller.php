<!-- <?php

require('index.php');
require('article.php');

function listBillets()
{
    $billets = getBillets();

    require('../views/indexView.php');
}

function billet()
{
    $billet = getBillet($_GET['id']);
    $comments = getComments($_GET['id']);

    require('../views/billetView.php');
}
?>
 -->