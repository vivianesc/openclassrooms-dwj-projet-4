<?php
require('../models/billet.php');

if (isset($_GET['billet']) && isset($_POST['title']) && isset($_POST['content']) && $_GET['billet'] && $_POST['title'] && $_POST['content'] > 0) {
  editBillet($_GET['billet'], $_POST['title'], $_POST['content']);
  echo "Votre billet a été modifié";
/* } else {
  echo "Erreur : le billet n'a pas été modifié";
} */
}