<?php include('header.php');?>
<?php $this->title = "Connexion"; ?>
<h1>Connexion</h1>
<?= $this->session->show('error_login'); ?>
<div class="text_article">
    <form method="post" action="../public/index.php?route=login">
        <label for="pseudo" class="col-sm col-form-label">Pseudo</label><br>
        <input type="text" class="form-control" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
        <label for="password" class="col-sm col-form-label">Mot de passe</label><br>
        <input type="password" class="form-control" id="password" name="password"><br>
        <input type="submit" class="btn btn-primary" value="Connexion" id="submit" name="submit">
    </form>
</div>
<?php include('footer.php');?>


