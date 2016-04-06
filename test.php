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

$art1 = new Article;
$art1->title = '1';
$art1->text = '11';
?>

<article>
    <header><?=$art->title; ?></header>
    <div><?=$art->text; ?></div>
</article>