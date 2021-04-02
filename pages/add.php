<?php
require('../models/postBillet.php');

if (isset($_POST['billet']) && $_POST['billet'] > 0) {
    postBillet($_POST['billet']);
    require('../views/BilletView.php');
} else {
    echo 'Erreur : aucun identifiant de billet envoyé';
}
