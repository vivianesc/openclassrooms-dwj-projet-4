<?php
require('../models/billet.php');
require('../models/comment.php');

if (isset($_GET['billet']) && $_GET['billet'] > 0) {
  deleteBillet($_GET['billet']);
  deleteComments($_GET['billet']);
  require('../views/deleteBilletView.php');
} else {
  echo 'Erreur : aucun identifiant de billet envoyé';
}
