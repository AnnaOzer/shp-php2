<?php

class Article
{
    /**
     * @var string
     */
    public $title;
    public $text;

    public function __construct($title='', $text='')
    {
        $this->title = $title;
        $this->text = $text;
    }

    // доступный для всех метод подсчитывает сколько символов в тексте новости
    public function getTextCount()
    {
        // число символов в свойстве text данного объекта
        return strlen($this->text);
    }

}

class RepostArticle
    extends Article
{
    public $source;

    public function __construct($title, $text, $source)
    {
        $this->title = $title;
        $this->text = $text;
        $this->source = $source;
    }
}

$art = new RepostArticle("Супер новость", "Текст статьи", "BBC");

?>

<article>
    <header><?=$art->title; ?></header>
    <div><?=$art->text; ?></div>
    <p>Число знаков: <?=$art->getTextCount(); ?></p>
</article>