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
    <!--/Header -->
    <header>
        <div id="logo">
            <img src="images/logo.jpg" alt="Logo Jean Forteroche" class="logo_jeanforteroche" />
        </div>
        <nav>
            <ul>
                <li><a href="#billets">Les billets</a></li>
                <li><a href="auteur.php">L'auteur</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <!--/Header end-->

    <!--/Section introduction-->
    <section id="introduction">
        <div class="heading_description">
            <h1><span class="heading_jeanforteroche">BILLET POUR L'ALASKA</h1>
            <h2>Partez à la découverte de mon nouveau roman</h2>
            <p><a href="#billets" class="button">Voir tous les billets</a></p>
        </div>
    </section>
    <!--/Section introduction end -->

    <!--/Section content -->
    <section id="billets">
        <div class="heading_description">
            <h2>LES BILLETS</h2>
        </div>
        <div class="display-posts-listing image-left">
            <div class="listing-item">
                <a class="image" href="article1.php"><img width="150" height="150" src="images/billet-2.jpg" class="thumbnail" alt="Billet 1" /></a>
                <div class="excerpt">
                    <?php
                    try {
                        $bdd = new PDO('mysql:host=localhost;dbname=jean-forteroche;charset=utf8', 'root', 'root');
                    } catch (Exception $e) {
                        die('Erreur : ' . $e->getMessage());
                    }
                    $reponse = $bdd->query('SELECT title, content FROM billets WHERE id=1');
                    while ($donnees = $reponse->fetch()) {
                        echo $donnees['title']  . '<br />' .  $donnees['content'];
                    }
                    $reponse->closeCursor();
                    ?>
                    <a class="title" href="article1.php">Lire la suite&hellip;</a> 
                </div>
                <p><a href="article1.php" class="button">Lire l'article</a></p>
            </div>

            <div class="listing-item">
                <a class="image" href="article2.php"><img width="150" height="150" src="images/billet-4.jpg" class="thumbnail" alt="Billet 2" /></a>
                <div class="excerpt">
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
                    <a class="title" href="article1.php">Lire la suite&hellip;</a>
                </div>
                <p><a href="article2.php" class="button">Lire l'article</a></p>
            </div>
        </div>
    </section>
    <!--/Section content end-->

    <!-- /footer -->
    <footer>
        <div class="heading_description">
            <p>Jean Forteroche - 25 rue d'Hauteville - 75010 Paris - Tél. 01 02 03 04 05</p>
            <p>Information importante : Le blog de Jean Forteroche est fictif. Il a été réalisé dans le cadre d’une formation OpenClassrooms.</p>
        </div>
    </footer>
    <!--/footer end-->

</body>

</html>