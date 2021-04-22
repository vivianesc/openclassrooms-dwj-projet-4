<?php
require('../models/login.php');

        if (isset($_GET['login']) &&  $_GET['login'] == 'true' || isset($_POST['username']) and $_POST['username'] ==  "Jean" and isset($_POST['password']) and $_POST['password'] ==  "eden") 
        {
            echo 'Bonjour Jean, bienvenue dans votre éditeur de billets';
            require('../controllers/billet.php');

        } else {
            require('../modules/login_error.php');
        }