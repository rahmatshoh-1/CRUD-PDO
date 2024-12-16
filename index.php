<?php
    // //Подключайм файл с функциями
    include 'functions.php';   
    include 'database/start.php';

        // Получаем все посты 
        $posts = $db->getAll('posts');
        // выводим все пости методом foreach
        include 'index.view.php';

?>
