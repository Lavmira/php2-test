<?php

require_once __DIR__ . '/../models/news.php';

if (isset($_GET['id']))
{
    $one_article = News_getOne($_GET[id]);
}



include '/../view/article_review.php';

