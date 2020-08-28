<link rel="stylesheet" href="../public/css/style_add.css">
<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>
<div class="text_article">
<form method="post" action="../public/index.php?route=<?= $route; ?>&articleId=<?= htmlspecialchars($article->getId()); ?>">
    <label for="pseudo" class="col-sm-2 col-form-label">Pseudo</label><br>
    <input type="text" class="form-control" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
    <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
    <label for="content" class="col-sm-2 col-form-label">Message</label><br>
    <textarea id="content" class="form-control" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
    <?= isset($errors['content']) ? $errors['content'] : ''; ?>
    <input type="submit" class="btn btn-primary" value="<?= $submit; ?>" id="submit" name="submit">
</form>
</div>