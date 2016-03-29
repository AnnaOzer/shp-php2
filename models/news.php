<?php

require_once __DIR__ . '/../functions/db.php';

function News_getAll()
{
    return DBQuery("
    SELECT * FROM news
    ");
}

function News_getById($id)
{
    return DBQuery("
    SELECT * FROM news WHERE id=" . $id
    )[0];
}

function News_addOne($article)
{
    return DBExec("
    INSERT INTO `news`(`title`, `text`) VALUES ('" . $article['title'] . "', '" .$article['text']. "')
    ");
}