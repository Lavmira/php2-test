<html>
<head>
    <title>Новости</title>
    <meta charset="UTF-8">
</head>
<body>
<div>
    <?foreach ($news as $key => $article): ?>
        <a href="/../controllers/news_review.php?id=<?= $article['id']; ?>">Просмотр новости № <?= $key+1; ?></a><br />
    <?php endforeach; ?>
</div>
<br/>
<div>
    <a href="/../controllers/news_review_all.php">Все новости</a>
</div>
<br/>
<div>
    <a href="/../controllers/news_add.php">Добавление новостей</a>
</div>
</body>
</html>

