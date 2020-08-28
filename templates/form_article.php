<?php include('C:\wamp64\www\testblog\Projet5Blog\templates\header.php');?>
<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId='.$post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>

<form method="post" action="../public/index.php?route=<?= $route; ?>">

    <label for="title">Titre</label><br>
    <input type="text" id="title" name="title" value="<?= isset($post) ? htmlspecialchars($post->get('title')): ''; ?>"><br>
    <?= isset($errors['title']) ? $errors['title'] : ''; ?>

    <label for="standfirst">Courte Description</label><br>
    <input type="text" id="standfirst" name="standfirst" value="<?= isset($post) ? htmlspecialchars($post->get('standfirst')):'';?>"><br>
    <?= isset($errors['standfirst']) ? $errors['standfirst'] : ''; ?>

    <label for="content">Contenu</label><br>
    <textarea id="content" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
    <?= isset($errors['content']) ? $errors['content'] : ''; ?>

    <input type="submit" value="<?= $submit; ?>" id="submit" name="submit">

</form>
<?php include('C:\wamp64\www\testblog\Projet5Blog\templates\footer.php');?>
