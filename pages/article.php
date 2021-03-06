<?php
require('../models/getBillet.php');
//require('../models/getComments.php');

$req = getBillet($billetId);

require('../views/billetView.php');



/* if (isset($_GET['id']) && $_GET['id'] > 0) {
    $billet = getBillet($_GET['id']);
//    $comments = getComments($_GET['id']);
    require('../views/billetView.php');
}
else {
    echo 'Erreur : aucun identifiant de billet envoyé';
} */