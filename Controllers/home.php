<?php
    //Подключайм файл с функциями
    include '../functions.php';   
    $db = include '../database/start.php';
    // Получаем все посты 
    $posts = $db->getAll('posts');
    // выводим все пости методом foreach
    include __DIR__ .'/../index.view.php';
?>
