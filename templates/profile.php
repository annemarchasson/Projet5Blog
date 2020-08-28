<link rel="stylesheet" href="../public/css/style_add.css">
<?php include('C:\wamp64\www\testblog\Projet5Blog\templates\header.php');?>
<?php $this->title = 'Mon profil'; ?>
<h1>Profile</h1>
<?= $this->session->show('update_password'); ?>
<div class="text_article">
    <p class="author_article"><?= $this->session->get('pseudo'); ?></p>
    <p class="author_article">identifiant: <?= $this->session->get('id'); ?></p>
    <a class="link_1" href="../public/index.php?route=updatePassword">Modifier son mot de passe</a>
    <a class="link_1" href="../public/index.php?route=deleteAccount">Supprimer son compte</a>
</div>
<br>
<?php include('C:\wamp64\www\testblog\Projet5Blog\templates\footer.php');?>