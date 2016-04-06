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
        $this->source = $source;
        parent::__construct($title, $text);
    }

    public function getTextCount()
    {
        // вызов метода предка
        echo '(Старое значение было бы:';
        echo parent::getTextCount();
        echo ') ';

        return 42;
    }
}

$art = new RepostArticle("Супер новость", "Текст статьи", "BBC");

?>

<article>
    <header><?=$art->title; ?></header>
    <div><?=$art->text; ?></div>
    <p>Число знаков: <?=$art->getTextCount(); ?></p>
</article>