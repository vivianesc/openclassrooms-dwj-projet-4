<?php
require('../models/postComment.php');

if (isset($_POST['comment']) && $_POST['comment'] > 0) {
  $req = postComment($_POST['comment']);
  require('../views/billetView.php');
} else {
  echo 'Erreur : aucun commentaire envoyé';
}
