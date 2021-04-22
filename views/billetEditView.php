<?php $title = "Jean Forteroche, édition d'un billet"; ?>

<?php ob_start(); ?>

<section id="introduction_administration">
    <div class="heading_description">
        <form method="post" action="../pages/edit.php">
            <p>
            <fieldset id="">
                <legend>ÉDITION DE BILLET</legend>
                <p>
                    <input type="text" name="title" value="<?php echo $_GET['title'] ?>" required /><br />
                    <textarea type="text" name="content" rows="20" cols="100" required><?php echo $_GET['content'] ?></textarea><br />
                    <a href="../pages/edit.php?billet=<?php echo $billet['id']; ?>" class="button">Éditer</a>
                </p>
                <h3><a href="../pages/index.php">Retour à la liste des billets</a></h3>
    </div>
</section>
</fieldset>
</form>
<?php $content = ob_get_clean(); ?>

<?php require('../templates/page.php'); ?>