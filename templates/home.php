<?php $this->title = 'Accueil'; ?>
<?php include('C:\wamp64\www\testblog\Projet5Blog\templates\header.php');?>
<?php include('C:\wamp64\www\testblog\Projet5Blog\templates\section_photo.php');?>
<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>
<br>

<?php
foreach ($articles as $article)
{
    ?>
    <div>
        <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h2>

        <p><?= htmlspecialchars($article->getStandfirst());?></p>
        <p><?= htmlspecialchars($article->getContent());?></p>
        <p><?= htmlspecialchars($article->getAuthor());?></p>
        <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
    </div>
    <br>
    <?php
}
?>

<a href="../public/index.php?route=bloglist">Voir plus d'articles</a>
<br>
<?php include('C:\wamp64\www\testblog\Projet5Blog\templates\section_about.php');?>
<?php include('C:\wamp64\www\testblog\Projet5Blog\templates\contact.php');?>

<?php include('C:\wamp64\www\testblog\Projet5Blog\templates\footer.php');?>
