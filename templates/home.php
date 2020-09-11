<?php $this->title = 'Accueil'; ?>
<div class="message-home">
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
<?= $this->session->show('contact'); ?>
</div>
<?php include('header.php');?>
<?php include('section_photo.php');?><br>
<?php
foreach ($articles as $article)
{
    ?>
    <div class="text_article">
        <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h2>
        <p class="standfirst_article"><?= htmlspecialchars($article->getStandfirst());?></p>
        <p class="content_article"><?= htmlspecialchars($article->getContent());?></p>
        <p class="author_article"><?= htmlspecialchars($article->getAuthor());?></p>
        <p class="date_article">Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
    </div><br>
    <?php
}
?>
<a class="link_see_more_article" href="../public/index.php?route=bloglist">Voir plus d'articles</a><br>
<?php include('section_about.php');?>
<?php include('footer.php');?>
