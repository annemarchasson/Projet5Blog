<?php include('..\templates\header.php');?>
<?php $this->title = 'Article'; ?>
<link rel="stylesheet" href="../public/css/style_ass.css">
<h2>Article</h2>
<div class="text_article">
    <h3><?= htmlspecialchars($article->getTitle());?></h3>
    <p class="standfirst_article"><?= htmlspecialchars($article->getStandfirst());?></p>
    <p class="content_article"><?= htmlspecialchars($article->getContent());?></p>
    <p class="author_article"><?= htmlspecialchars($article->getAuthor());?></p>
    <p class="date_article">Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
</div>
<br>
<div class="actions">
    <a class="link_1" href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
    <a class="link_1" href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
</div>
<br>

<div id="comments" class="text-left">
    <h3>Ajouter un commentaire</h3>
    <?php include('form_comment.php'); ?>
    <br>
    <h3>Commentaires</h3>
    <?php
    foreach ($comments as $comment)
    {
        ?>
        <div class="text_article">
        <p class="author_article"><?= htmlspecialchars($comment->getPseudo());?></p>
        <p class="content_article"><?= htmlspecialchars($comment->getContent());?></p>
        <p class="date_article">Posté le <?= htmlspecialchars($comment->getCreatedAt());?></p>
        </div>
        <?php
        if($comment->isFlag()) {
            ?>
            <p>Ce commentaire a déjà été signalé</p>
            <?php
        } else {
            ?>
            <p><a class="link_1" href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>">Signaler le commentaire</a></p>
            <?php
        }
        ?>
        <p><a class="link_1" href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a> </p>
        <br>
        <?php
    }
    ?>
</div>
    <a class="link_see_more_article" href="../public/index.php">Retour à l'accueil</a>
<?php include('..\templates\footer.php');?>