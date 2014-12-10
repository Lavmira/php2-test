<?php

include __DIR__ . '../function/db.php';
$article = 'article';

if (!empty($_FILES)) {
    if (isset($_FILES)[$article])
    {
        if (0 == ($_FILES)[$article]['error'])
        {
            $newFileName = $_FILES[$name]['name'];
            $newFilePath = __DIR__ . '/news/' . $newFileName;
            move_uploaded_file(
                $_FILES)[$name]['temp_name']
                $newFilePath
            );
            $title = 'Title article';
        dbExec("
            'INSERT INTO news (title,file)
        VALUE ('$title','$newFileName')
        ");
        }
    }

header('Location: /index.php');