<?php

if (isset($_GET['login']) &&  $_GET['login'] == 'true') {
    echo 'Bonjour Jean, bienvenue dans votre éditeur de billets';
    require('../controllers/billet.php');
} else {
    require('../controllers/login.php');
}
