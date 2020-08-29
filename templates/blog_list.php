<?php $this->title = 'Bloglist'; ?>
<?php include('..\templates\header.php');?>
<link rel="stylesheet" href="../public/css/style_add.css">
<h2>Mon blog</h2><br>
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
    </div>
    <br>
    <?php
}
?>
<?php include('..\templates\footer.php');?>


