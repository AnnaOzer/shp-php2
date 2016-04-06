<?php

class Article {
    /**
     * @var string
     */
    public $title;
    public $text;
}

$art = new Article;
$art->title = "Супер новость!";
$art->text = "Текст новости";

$art->title = "Не очень супер";
?>

<article>
    <header><?=$art->title; ?></header>
    <div><?=$art->text; ?></div>
</article>