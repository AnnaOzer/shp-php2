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
    return DBQueryOne("
    SELECT * FROM news WHERE id=" . $id
    );
}

function News_addOne($article)
{
    return DBExec("
    INSERT INTO `news`(`title`, `text`) VALUES ('" . $article['title'] . "', '" .$article['text']. "')
    ");
}

function News_updateOneById($article)
{
    return DBExec("
    UPDATE `news` SET `title`='". $article['title'] ."', `text`='". $article['text'] ."'  WHERE id='" .$article['id']. "'
    ");
}