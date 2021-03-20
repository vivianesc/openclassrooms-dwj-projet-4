<?php
require('../models/getBillet.php');

if (isset($_GET['billet']) && $_GET['billet'] > 0) {
    $billet = getBillet($_GET['billet']);
    $comments = getComments($_GET['billet']);
    require('../views/billetView.php');
} else {
    echo 'Erreur : aucun identifiant de billet envoyé';
}
