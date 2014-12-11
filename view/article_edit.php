<html>
<head>
    <title>Редактирование новости</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Редактирование новости:</h1>
<form action="/../controllers/news_edit.php" method="post">
    <p>Заголовок:<br />
        <input type="text" name="title" value="<?=$edit_article[0]['title']?>Новость 1" required placeholder=" |Enter title" autofocus=""/><br />
    </p>
    <p>Текст:<br />
        <textarea name="text" <?=$edit_article[0]?> cols="50" rows="5"  required></textarea>
    </p>
    <input type="submit" name="submit" value="Отправить"/>
</form>
<a href="/../index.php">На главную</a>
<br />
</body>
</html>
<?php
echo $title.' '.$status_add_article;