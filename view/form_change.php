<form method="post" action="../controllers/change_news.php">
    <input type="hidden" value="<?php echo $article['id'];?>" name="id">
    Заголовок статьи: <input type="text" name="title" value="<?php echo $article['title']; ?>"><br><br>
    Текст новости: <textarea name="text" ><?php echo $article['text']; ?></textarea><br>
    <input type="submit">
</form>