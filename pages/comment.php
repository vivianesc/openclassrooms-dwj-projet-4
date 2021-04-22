<?php
require('../models/comment.php');

if (isset($_GET['billet']) && $_GET['billet'] > 0) {
  $comment = postComment($_GET['billet'], $_POST['pseudo'], $_POST['comment']);
  require('../views/commentView.php');
} else {
  echo 'Erreur : aucun commentaire envoyé';
}
