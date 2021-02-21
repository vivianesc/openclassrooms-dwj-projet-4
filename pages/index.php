<?php
// Récupération des données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=jean-forteroche;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$req = $bdd->query('SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y \') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 10');

require('../models/index_billets_view.php');