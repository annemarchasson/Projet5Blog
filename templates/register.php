<link rel="stylesheet" href="../public/css/style_add.css">
<?php include('C:\wamp64\www\testblog\Projet5Blog\templates\header.php');?>
<?php $this->title = "Inscription"; ?>
<h1>Inscription</h1>
<div class="text_article">
    <form method="post" action="../public/index.php?route=register">
        <label for="pseudo" class="col-sm col-form-label">Pseudo</label><br>
        <input type="text" class="form-control" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
        <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
        <label for="password" class="col-sm col-form-label">Mot de passe</label><br>
        <input type="password" class="form-control" id="password" name="password"><br>
        <?= isset($errors['password']) ? $errors['password'] : ''; ?>
        <input type="submit" class="btn btn-primary" value="Inscription" id="submit" name="submit">
    </form>
</div>
<?php include('C:\wamp64\www\testblog\Projet5Blog\templates\footer.php');?>