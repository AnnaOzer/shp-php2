<?php

class Article {
    public $title;
    public $text;
}

$art = new Article;
$art->title = "Супер новость!";
$art->text = "Текст новости";

?>

<article>
    <header><?=$art->title; ?></header>
    <div><?=$art->text; ?></div>
</article>