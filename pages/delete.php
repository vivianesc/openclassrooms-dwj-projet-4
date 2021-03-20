<?php
require('../models/deleteBilletAndComments.php');
require('../models/getBillet.php');

if (isset($_GET['billet']) && $_GET['billet'] > 0) {
  $billet = getBillet($_GET['billet']);
  deleteBillet($_GET['billet']);
  //  $comments = deleteComments($_GET['billet']);
  require('../views/deleteBilletView.php');
} else {
  echo 'Erreur : aucun identifiant de billet envoyé';
}
