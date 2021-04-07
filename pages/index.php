<?php
require('../models/getBillets.php');

$req = getBillets();

require('../views/indexView.php');
/* 
require('..models/postComment.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'getBillets') {
        getBillets();
    }
    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            billet();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'postComment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['pseudo']) && !empty($_POST['comment'])) {
                postComment($_GET['id'], $_POST['pseudo'], $_POST['comment']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
}
else {
    getBillets();
} */