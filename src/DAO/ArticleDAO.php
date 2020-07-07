<?php
namespace App\src\DAO;

class ArticleDAO extends DAO
{
    public function getArticles()
    {
        $sql = 'SELECT id, title, chapo, content, author, createdAt FROM article ORDER BY id DESC';
        return $this->createQuery($sql);
    }

    public function getArticle($articleId)
    {
        $sql = 'SELECT id, title, chapo, content, author, createdAt FROM article WHERE id = ?';
        return $this->createQuery($sql, [$articleId]);
    }
}