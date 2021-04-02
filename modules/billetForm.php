<form action="../pages/add.php" method="post">
<form action="comment.php?action=postComment&amp;id=<?= $post['id'] ?>" method="post">
    <fieldset id="">
        <legend>AJOUTER UN ARTICLE</legend>
        <p>
            <textarea name="title" id="title" rows="8" cols="45">Titre</textarea><br />
            <textarea name="article" id="article" rows="8" cols="45">Votre article</textarea>
            <input type="submit" value="Envoyer" class="login_button" />
        </p>
    </fieldset>
</form>