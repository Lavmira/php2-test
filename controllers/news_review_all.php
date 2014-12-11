<?php
require_once __DIR__ . '/../models/news.php';

$news = News_getAll();

include__DIR__ .  '/../view/article_review_all.php';




/*if (isset($_GET['id']))
{
    $article = News_getAll($_GET[id]);
}

$article = 'article';

if (!empty($_FILES)) {
    if (isset($_FILES)[$article])
    {
        if (0 == ($_FILES)[$article]['error'])
        {
            $newFileName = $_FILES[$title]['name'];
            $newFilePath = __DIR__ . '/controllers/' . $newFileName;
            move_uploaded_file(
                $_FILES[$title]['temp_name']
                $newFilePath
            );
            $title = 'Title article';
        dbExec("
            'INSERT INTO controllers (title,file)
        VALUE ('$title','$newFileName')
        ");
        }
    }
*/








