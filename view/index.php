<html>
<head>
    <title>Новости</title>
</head>
<body>
    <?php foreach ($news as $article): ?>
    <article>
        <h1><?=$article['title']; ?></h1><!--есть также тег header для заголовка-->
        <div><?=$article['text']; ?></div>
    </article>
    <?php endforeach;  ?>
</body>
</html>