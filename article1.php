<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/4f98587330.js" crossorigin="anonymous"></script>
    <title>Jean Forteroche, le blog</title>
</head>

<body>
    <section id="billet">
        <?php
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=jean-forteroche;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $reponse = $bdd->query('SELECT title, content, date FROM billets WHERE id=1');
        while ($donnees = $reponse->fetch()) {
        ?>
            <div class="billets">
                <h3>
                    <?php echo htmlspecialchars($donnees['title']); ?>
                    <em>le <?php echo $donnees['date']; ?></em>
                </h3>

                <p>
                    <?php
                    // On affiche le contenu du billet
                    echo nl2br(htmlspecialchars($donnees['content']));
                    ?>
                    <br>
                    <em><a href="commentaires.php=<?php echo $donnees['id']; ?>">Commentaires</a></em>
                </p>
            </div>
        <?php
        }
        ?>
</body>

</html>