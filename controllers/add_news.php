<?php

unset($article);

if(!empty($_POST)) {
    if(isset($_POST['text'])){
        $article = [];
        $article['text'] = $_POST['text'];
        $article['title'] = isset($_POST['title']) ? $_POST['title'] : 'Без названия';
        }
}

if(isset($article)) {

}

header('Location: ../index.php');