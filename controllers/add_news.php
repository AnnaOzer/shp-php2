<?php

require_once __DIR__ . '/../models/news.php';

unset($article);

if(!empty($_POST)) {
    if(!empty($_POST['text'])){
        $article = [];
        $article['text'] = $_POST['text'];
        $article['title'] = !empty($_POST['title']) ? $_POST['title'] : 'Без названия';
        }
}

if(isset($article)) {
    News_addOne($article);
}

header('Location: ../index.php');