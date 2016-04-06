<?php

class Article {
    public $title;
    public $text;
}

$art = new Article;
$art->title = "Супер новость!";
$art->text = "Текст новости";

var_dump($art);