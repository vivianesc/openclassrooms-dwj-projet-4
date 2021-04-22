<?php
require('../models/billet.php');
require('../views/createBilletView.php');

if (isset($_POST['title']) && isset($_POST['content'])) {
  $response = createBillet($_POST['title'], $_POST['content']);
  echo "Votre billet a été ajouté";
} else {
  echo "Erreur : le billet n'a pas été ajouté";
}
