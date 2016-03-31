<?php

require_once __DIR__ . '/models/news.php';

// получить данные из get, по уолчанию 1я новость
$id = !empty($_GET['id']) ? $_GET['id'] : 1;

// обратиться к модели за одной новостью
$article = News_getById($id);

// если в $article null, показать 404
if(null === $article && isset($_GET['id'])) {
    include __DIR__ . '/view/404.php';
} else {
// вывести эту одну новость
    include __DIR__ .'/view/one_article.php';
}