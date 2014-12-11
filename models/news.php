<?php

require_once __DIR__ . '/../function/db.php';

function News_getAll()
{
    return DBQuery("
    SELECT * FROM news
    ");
}


/*
function News_getOne($id) {
    return DBQuery("
    SELECT * FROM news WHERE id=$id
    ");
}

*/

function News_saveArticle($_title, $_text)
{
    return DBExec("
    INSERT INTO news (title, text) VALUES ('$_title', '$_text')
    ");
}

function News_updateArticle($id, $new_title, $new_text)
{
    return DBExec("
    UPDATE news SET title='$new_title', text='$new_text'
    WHERE id='$id';
    ");
}

/*
$article = 'article';

if (!empty($_FILES)) {
    if (isset($_FILES)[$article])
    {
        if (0 == ($_FILES)[$article]['error'])
        {
            $newFileName = $_FILES[$name]['name'];
            $newFilePath = __DIR__ . '/controllers/' . $newFileName;
            move_uploaded_file(
                $_FILES)[$name]['temp_name']
                $newFilePath
            );
            $title = 'Title article';
        dbExec("
            'INSERT INTO controllers (title,file)
        VALUE ('$title','$newFileName')
        ");
        }
    }

header('Location: /index.php');
*/