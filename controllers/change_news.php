<?php

require_once __DIR__ . '/../models/news.php';

// получить данные из post
unset($article);

if(!empty($_POST)) {
    if(isset($_POST['title'])
    && isset($_POST['text'])
    && isset($_POST['id'])) {
        $article['title'] = $_POST['title'];
        $article['text'] = $_POST['text'];
        $article['id'] = $_POST['id'];
    }
}

// записать их в базу
if(isset($article)) {
    News_updateOneById($article);
}

header('Location:../index.php');