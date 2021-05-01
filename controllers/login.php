<?php
require('../models/login.php');
require('../views/loginView.php');

$logged = login($_POST['username'], $_POST['password']);
if (!$logged) {
   // TODO
   //AFFICHER UN MESSAGE D'ERREUR
}
