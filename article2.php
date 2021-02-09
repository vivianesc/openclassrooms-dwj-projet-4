<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=jean-forteroche;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT title, content FROM billets WHERE id=2');
while ($donnees = $reponse->fetch()) {
    echo $donnees['title']  . '<br />' .  $donnees['content'];
}
$reponse->closeCursor();
?>