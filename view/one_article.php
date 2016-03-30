<html>
<head>
    <title>Новость<?php echo isset($id) ? ' №' .$id : ''; ?></title>
</head>
<body>
    <article>
        <h1><?=$article['title']; ?></h1>
        <div><?=$article['text']; ?></div>
    </article>
</body>
</html>
