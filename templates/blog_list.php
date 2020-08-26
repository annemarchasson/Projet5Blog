<?php $this->title = 'Bloglist'; ?>

<?php include('C:\wamp64\www\testblog\Projet5Blog\templates\header.php');?>
<h2>Liste des articles</h2>
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
<?php include('C:\wamp64\www\testblog\Projet5Blog\templates\footer.php');?>


