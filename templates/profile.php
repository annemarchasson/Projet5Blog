<?php include('C:\wamp64\www\testblog\Projet5Blog\templates\header.php');?>
<?php $this->title = 'Mon profil'; ?>
<h1>Profile</h1>
<?= $this->session->show('update_password'); ?>
<div>
    <h2><?= $this->session->get('pseudo'); ?></h2>
    <p><?= $this->session->get('id'); ?></p>
    <a href="../public/index.php?route=updatePassword">Modifier son mot de passe</a>
    <a href="../public/index.php?route=deleteAccount">Supprimer son compte</a>
</div>
<br>
<?php include('C:\wamp64\www\testblog\Projet5Blog\templates\footer.php');?>