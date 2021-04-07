<form action="../pages/comment.php?billet=<?php echo $billet['id']; ?>" method="post">
    <fieldset id="">
        <legend>AJOUTER UN COMMENTAIRE</legend>
        <p>
            <input type="text" name="pseudo" placeholder="pseudo" required><br />
            <textarea name="comment" placeholder="Votre commentaire" rows="8" cols="45" required></textarea>
            <input type="submit" value="Envoyer" class="login_button" />
        </p>
    </fieldset>
</form>